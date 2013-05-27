<?php
return array (
    'clientScriptPackages' => array(
        'layouts.main' => array(
            'theme_css' => array(
                's/main.css',
                's/mediaqueries.css',
            ),
            'js' => array(
                'js/views/UserNavView.js',
            ),
            'depends' => array(
                '_js_error',
                'jquery',
                '_app',
                '_yii_t',
                '_toolbar.search_form',
                '_ajax_packages_toolbar',
                '_ajax_packages_activity_notification',
                '_app_popup',
                '_layouts.main_for_ie8',
                '_layouts.main_for_ie9',
                '_respond_for_lt_ie9',
            ),
        ),
        'staticPage.privacy_policy' => array(
            'theme_css' => array(
                's/main.css',
                's/terms-privacy.css',
            ),
        ),
        'staticPage.terms' => array(
            'theme_css' => array(
                's/main.css',
                's/terms-privacy.css',
            ),
        ),
        'widget.Interactivity' => array(
            'widget_js' => array(
                'js/socket.io.js',
                'js/interaction.js',
            ),
        ),
        'widget.BottomToolbar' => array(
            'theme_css' => array(
                's/menu-nav.css',
            ),
            'depends' => array(
                '_js_error',
                '_ajax_packages_activity_tooltip',
                '_app_ui',
            ),
        ),
        'landing_w_activeform' => array(
            'depends' => array(
                '_js_error',
                'yiiactiveform',
                'autocomplete',
            ),
        ),
        'landing' => array(
            'depends' => array(
                '_js_error',
                'autocomplete',
            ),
        ),
        'one_click_landing' => array(
            'depends' => array(
                'jquery',
                'countdown_package',
            ),
        ),
        'user.registrationComplete' => array(
            'theme_css' => array(
                's/main.css',
                's/mediaqueries.css',
                's/popup.css',
            ),
            'js' => array(
                'js/registrationComplete.js',
            ),
            'depends' => array(
                '_js_error',
                '_layouts.main_for_ie8',
                '_layouts.main_for_ie9',
            ),
        ),
    ),
);