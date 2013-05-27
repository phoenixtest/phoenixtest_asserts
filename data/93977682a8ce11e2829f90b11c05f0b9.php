<?php
return array (
    'clientScriptPackages' => array(
        'payment.layout' => array(
            'module_theme_css' => array(
                's/payment.css',
                's/payment.css',
            ),
            'module_js' => array(
                'js/functions.js',
                'js/payment.js',
                'js/credit_cards_validation.js',
            ),
            'depends' => array(
                'yiiactiveform',
                'jquery',
                '_js_error',
            ),
        ),
        'payment.layouts.staticPage' => array(
            'module_theme_css' => array(
                's/staticPage.css',
            ),
        ),
    ),
);