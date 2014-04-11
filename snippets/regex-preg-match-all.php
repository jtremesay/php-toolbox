<?php

function page_snippet_callback(&$template_vars)
{
    $template_vars['preg_flag_offset_capture'] = PREG_OFFSET_CAPTURE;
    $template_vars['preg_flag_set_order'] = PREG_SET_ORDER;
    $template_vars['preg_flag_pattern_order'] = PREG_PATTERN_ORDER;
}