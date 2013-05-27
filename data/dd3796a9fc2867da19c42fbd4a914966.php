<?php
return array (
    'processors' => array(
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\SetUserSite',
        'application\\processors\\SetBrandInfo',
        'application\\processors\\SetEmailId',
        'application\\processors\\SetViewInfo',
        'application\\processors\\ViewModelValid',
        'application\\processors\\SetLocaleInfo',
        'application\\processors\\ConsoleRenderView',
        'application\\processors\\SendPushAndroid',
    ),
);