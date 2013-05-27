<?php
return array (
    'clientScriptInternalPackages' => array(
        '_app' => array(
            'js' => array(
                'js/libs/underscore-min.js',
                'js/libs/json2.js',
                'js/libs/backbone-min.js',
                'js/libs/lazyload.js',
                'js/libs/Resources.js',
                'js/libs/BaseView.js',
                'js/libs/BaseModel.js',
                'js/app.js',
            ),
        ),
        '_app_ui' => array(
            'js' => array(
                'js/app.ui.js',
            ),
        ),
        '_app_popup' => array(
            'js' => array(
                'js/views/PopupView.js',
            ),
            'js_templates' => array(
                'PopupTemplate.js',
            ),
            'messages' => array(
                'popup.js',
            ),
        ),
        '_jquery.mousewheel' => array(
            'js' => array(
                'plugins/jquery-mousewheel/jquery.mousewheel.min.js',
            ),
        ),
        '_toolbar.search_form' => array(
            'js' => array(
                'js/models/SearchForm.js',
                'js/views/SearchFormView.js',
                'js/models/LocationSuggest.js',
            ),
            'messages' => array(
                'search-form.js',
            ),
            'js_templates' => array(
                'SearchFormTemplate.js',
            ),
        ),
        '_yii_t' => array(
            'js' => array(
                'js/yii_t.js',
            ),
        ),
        '_ajax_packages_block' => array(
            'js' => array(
                'js/models/Block.js',
            ),
        ),
        '_ajax_packages_wink' => array(
            'js' => array(
                'js/models/Wink.js',
                'js/views/WinkView.js',
            ),
        ),
        '_ajax_packages_favorite' => array(
            'js' => array(
                'js/models/Favorite.js',
                'js/views/FavoriteView.js',
            ),
        ),
        '_ajax_packages_user_list' => array(
            'js' => array(
                'js/views/UserListView.js',
            ),
        ),
        '_ajax_packages_toolbar' => array(
            'js' => array(
                'js/models/Toolbar.js',
                'js/views/ToolbarView.js',
            ),
        ),
        '_ajax_packages_activity_notification' => array(
            'js' => array(
                'js/views/ActivityNotificationView.js',
            ),
            'js_templates' => array(
                'ActivityNotificationTemplate.js',
            ),
            'messages' => array(
                'activity-notification-template.js',
            ),
        ),
        '_ajax_packages_activity_tooltip' => array(
            'js' => array(
                'js/views/ActivityTooltipView.js',
            ),
            'messages' => array(
                'activity-tooltip-template.js',
            ),
            'js_templates' => array(
                'ActivityTooltipTemplate.js',
            ),
        ),
        '_ajax_packages_profile_editor' => array(
            'js' => array(
                'js/models/ProfileEditor.js',
                'js/views/ProfileEditorView.js',
                'js/models/LocationSuggest.js',
            ),
            'messages' => array(
                'profile-editor-template.js',
            ),
            'js_templates' => array(
                'ProfileEditorTemplate.js',
            ),
            'depends' => array(
                '_app_ui',
            ),
        ),
        '_ajax_packages_profile_photo' => array(
            'js' => array(
                'js/models/ProfilePhoto.js',
                'js/models/ProfilePhotoRemove.js',
                'js/models/ProfilePhotoAvatar.js',
                'js/views/ProfilePhotoView.js',
            ),
            'messages' => array(
                'profile-photo-template.js',
            ),
            'js_templates' => array(
                'ProfilePhotoTemplate.js',
            ),
        ),
        'fineuploader_package' => array(
            'js' => array(
                'plugins/fineuploader/utils.js',
                'plugins/fineuploader/button.js',
                'plugins/fineuploader/dnd.js',
                'plugins/fineuploader/handler.base.js',
                'plugins/fineuploader/handler.form.js',
                'plugins/fineuploader/handler.xhr.js',
                'plugins/fineuploader/uploader.basic.js',
                'plugins/fineuploader/uploader.js',
                'plugins/fineuploader/header.js',
            ),
        ),
        'jcrop_package' => array(
            'css' => array(
                'plugins/jcrop/css/jquery.Jcrop.css',
            ),
            'js' => array(
                'plugins/jcrop/js/jquery.Jcrop.js',
            ),
        ),
        '_layouts.main_for_ie8' => array(
            'theme_css' => array(
                's/css-ie8.css',
            ),
            'wrapper' => array(
                '<!--[if IE 8]>',
                '<![endif]-->',
            ),
        ),
        '_layouts.main_for_ie9' => array(
            'theme_css' => array(
                's/css-ie9.css',
            ),
            'wrapper' => array(
                '<!--[if IE 9]>',
                '<![endif]-->',
            ),
        ),
    ),
);