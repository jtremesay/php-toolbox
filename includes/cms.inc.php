<?php

class CMS
{
    protected $navigation;

    function __construct($navigation)
    {
        $this->navigation = $navigation;
    }

    public function renderAskedPage()
    {
        $page_id = isset($_GET['id']) ? $_GET['id'] : '';
        $this->renderPage($page_id);
    }


    public function renderPage($page_id)
    {
        $page = $this->findPageById($page_id);
        if (is_null($page)) {
            $page = array(
                'type' => 'page',
                'id' => 'index',
                'title' => 'Main',
            );
        }

        $vars = array();
        $vars['pages'] = $this->navigation;
        $vars['current_page'] = $page;


        $snippet_name = isset($page['snippet']) ? $page['snippet'] : $page['id'];
        $snippet_path = 'snippets/'.$snippet_name.'.php';
        if (file_exists($snippet_path)) {
            require $snippet_path;

            page_snippet_callback($vars);
        }


        $template_name = isset($page['template']) ? $page['template'] : $page['type'].'-'.$page['id'];
        $template_path = 'templates/'.$template_name.'.html';
        if (file_exists($template_path)) {
            $vars['template_name'] = $template_name;

            $tpl = new Rain\Tpl();
            $tpl->assign($vars);
            $tpl->draw('base');
        }
    }


    protected function findPageById($id)
    {
        $page = $this->findPageByIdAndNavigation($id, $this->navigation);

        return $page;
    }

    protected function findPageByIdAndNavigation($id, $navigation)
    {
        foreach ($navigation as $element) {
            if ($element['type'] === 'page' && $element['id'] === $id) {
                return $element;
            }

            if ($element['type'] === 'dropdown') {
                $page = $this->findPageByIdAndNavigation($id, $element['pages']);
                if (!is_null($page)) {
                    return $page;
                }
            }
        }

        return null;
    }
}