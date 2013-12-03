<?php

$vars['dynamic_form'] = json_encode(array(
    array(
        'tag' => 'input',
        'type' => 'text',
        'name' => 'login',
        'id' => 'form-login',
        'label' => 'Login',
        'placeholder' => 'Enter your login'
    ),
    array(
        'tag' => 'input',
        'type' => 'email',
        'name' => 'email',
        'id' => 'form-email',
        'label' => 'Email',
        'placeholder' => 'Enter your email'
    ),
    array(
        'tag' => 'textarea',
        'name' => 'biography',
        'id' => "form-biography",
        'label' => 'Biography',
        'placeholder' => 'Enter your biography'
    ),
    array(
        'tag' => 'input',
        'type' => 'number',
        'name' => 'favorites_numbers[]',
        'id' => 'form-favorite-number1',
        'label' => 'Favorite number 1',
        'placeholder' => 'Enter your favorite number'
    ),
    array(
        'tag' => 'input',
        'type' => 'number',
        'name' => 'favorites_numbers[]',
        'id' => 'form-favorite-number2',
        'label' => 'Favorite number 2',
        'placeholder' => 'Enter your second favorite number'
    ),
    array(
        'tag' => 'input',
        'type' => 'number',
        'name' => 'favorites_numbers[]',
        'id' => 'form-favorite-number3',
        'label' => 'Favorite number 3',
        'placeholder' => 'Enter your third favorite number'
    ),
));

$vars['loop_count'] = range(0, 5);