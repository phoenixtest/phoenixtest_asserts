<?php
return array (
    'clientScriptAjaxPackages' => array(
        'user' => array(
            'theme_css' => array(
                's/profile.css',
                's/tabs.css',
                's/w-messenger.css',
            ),
            'js' => array(
                'js/models/User.js',
                'js/views/UserView.js',
            ),
            'messages' => array(
                'user-template.js',
            ),
            'js_templates' => array(
                'UserTemplate.js',
            ),
            'depends' => array(
                '_ajax_packages_wink',
                '_ajax_packages_favorite',
            ),
        ),
        'userList' => array(
            'js' => array(
                'js/models/UsersList.js',
            ),
            'theme_css' => array(
                's/frame-search.css',
                's/userlist.css',
            ),
            'depends' => array(
                '_jquery.mousewheel',
                '_ajax_packages_user_list',
            ),
        ),
        'search' => array(
            'js' => array(
                'js/models/Search.js',
                'js/views/SearchView.js',
            ),
            'messages' => array(
                'search-template.js',
            ),
            'js_templates' => array(
                'SearchTemplate.js',
            ),
            'depends' => array(
                'userList',
            ),
        ),
        'activitiesTypes' => array(
            'js' => array(
                'js/models/ActivitiesTypes.js',
                'js/views/ActivitiesTypesView.js',
            ),
            'js_templates' => array(
                'ActivitiesTypesTemplate.js',
            ),
            'messages' => array(
                'activities-types-template.js',
            ),
            'depends' => array(
                'userList',
            ),
        ),
        'account' => array(
            'theme_css' => array(
                's/frame-account.css',
            ),
            'js' => array(
                'js/models/Account.js',
                'js/views/AccountView.js',
                'js/models/AccountPassword.js',
                'js/models/AccountEmail.js',
            ),
            'messages' => array(
                'account-template.js',
            ),
            'js_templates' => array(
                'AccountTemplate.js',
            ),
            'depends' => array(
                'notificationSettings',
                'notificationSubscription',
                'notificationNewFeed',
            ),
        ),
        'funnel' => array(
            'theme_css' => array(
                's/popup.css',
            ),
            'js' => array(
                'js/models/Funnel.js',
                'js/models/LocationSuggest.js',
                'js/views/FunnelView.js',
            ),
            'messages' => array(
                'funnel-template.js',
            ),
            'js_templates' => array(
                'FunnelTemplate.js',
            ),
        ),
        'messenger' => array(
            'js' => array(
                'js/views/MessengerView.js',
                'js/models/Messenger.js',
            ),
            'messages' => array(
                'messenger-template.js',
            ),
            'js_templates' => array(
                'MessengerTemplate.js',
            ),
        ),
        'userWidget' => array(
            'js' => array(
                'js/models/UserWidget.js',
                'js/models/UsersWidgetList.js',
                'js/views/UserWidgetView.js',
                'js/models/Banner.js',
            ),
            'messages' => array(
                'user-widget-template.js',
            ),
            'js_templates' => array(
                'UserWidgetTemplate.js',
            ),
            'depends' => array(
                '_ajax_packages_wink',
                '_ajax_packages_favorite',
            ),
        ),
        'userActivityBlock' => array(
            'js' => array(
                'js/models/UserActivityBlock.js',
                'js/views/UserActivityBlockView.js',
            ),
            'messages' => array(
                'user-activity-block-template.js',
            ),
            'js_templates' => array(
                'UserActivityBlockTemplate.js',
            ),
        ),
        'userNavBar' => array(
            'js' => array(
                'js/views/UsersNavBarView.js',
            ),
            'js_templates' => array(
                'UsersNavBarTemplate.js',
            ),
        ),
        'removeAccount' => array(
            'theme_css' => array(
                's/popup.css',
            ),
            'js' => array(
                'js/models/RemoveAccount.js',
                'js/views/RemoveAccountView.js',
                'js/models/PasswordRecovery.js',
            ),
            'js_templates' => array(
            ),
            'messages' => array(
            ),
            'depends' => array(
                'notificationSettings',
                'notificationSubscription',
                'popupStopAction',
            ),
        ),
        'stopSubscription' => array(
            'theme_css' => array(
                's/popup.css',
            ),
            'js' => array(
                'js/models/StopSubscription.js',
                'js/views/StopSubscriptionView.js',
                'js/models/PasswordRecovery.js',
            ),
            'js_templates' => array(
            ),
            'messages' => array(
            ),
            'depends' => array(
                'notificationSettings',
                'notificationSubscription',
                'popupStopAction',
            ),
        ),
        'photoGallery' => array(
            'theme_css' => array(
                's/photo-viewer.css',
            ),
            'js' => array(
                'js/models/PhotoGallery.js',
                'js/views/PhotoGalleryView.js',
            ),
            'messages' => array(
                'photo-gallery.js',
            ),
            'js_templates' => array(
                'PhotoGalleryTemplate.js',
            ),
        ),
        'profile' => array(
            'theme_css' => array(
                's/frame-myprofile.css',
            ),
            'js' => array(
                'js/models/Profile.js',
                'js/views/ProfileView.js',
            ),
            'js_templates' => array(
                'ProfileTemplate.js',
            ),
            'depends' => array(
                '_ajax_packages_profile_editor',
                '_ajax_packages_profile_photo',
                'fineuploader_package',
                'jcrop_package',
            ),
        ),
        'contactUs' => array(
            'theme_css' => array(
                's/contact-us.css',
            ),
            'js' => array(
                'js/models/ContactUs.js',
                'js/views/ContactUsView.js',
            ),
            'js_templates' => array(
                'ContactUsTemplate.js',
            ),
            'messages' => array(
                'contact-us.js',
            ),
            'depends' => array(
            ),
        ),
        'billingHistory' => array(
            'theme_css' => array(
                's/page-billing-history.css',
            ),
            'js' => array(
                'js/views/BillingHistoryView.js',
                'js/models/BillingHistory.js',
                'js/models/RestartPaymentSubscription.js',
            ),
            'js_templates' => array(
                'BillingHistoryTemplate.js',
            ),
            'messages' => array(
                'billing-history.js',
            ),
        ),
        'notificationSubscription' => array(
            'js' => array(
                'js/models/NotificationSubscription.js',
                'js/views/NotificationSubscriptionView.js',
            ),
            'js_templates' => array(
                'NotificationSubscriptionTemplate.js',
            ),
            'messages' => array(
                'notification-subscription-template.js',
            ),
        ),
        'notificationSettings' => array(
            'js' => array(
                'js/models/NotificationSettings.js',
                'js/views/NotificationSettingsView.js',
            ),
            'js_templates' => array(
                'NotificationSettingsTemplate.js',
            ),
            'messages' => array(
                'notification-settings-template.js',
            ),
        ),
        'notificationNewFeed' => array(
            'js' => array(
                'js/models/NotificationNewsFeedSubscription.js',
                'js/views/NotificationNewsFeedSubscriptionView.js',
            ),
            'messages' => array(
                'NotificationNewsFeedSubscriptionTemplate.js',
            ),
            'js_templates' => array(
                'NotificationNewsFeedSubscriptionTemplate.js',
            ),
        ),
        'popupStopAction' => array(
            'js_templates' => array(
                'PopupStopActionTemplate.js',
            ),
            'messages' => array(
                'popup-stop-action-template.js',
            ),
        ),
    ),
);