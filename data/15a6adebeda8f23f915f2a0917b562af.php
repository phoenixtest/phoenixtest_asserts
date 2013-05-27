<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'from_id' => 'fromUserId',
                'to_id' => 'toUserId',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\SetEmailId',
        'application\\processors\\SetUserSite',
        'application\\processors\\SetBrandInfo',
        array(
            'name' => 'application\\processors\\SetTransportName',
            'params' => 'pushAndroid',
        ),
        'application\\processors\\SetUserAddress',
        'application\\processors\\SetViewInfo',
        'application\\processors\\SetLocaleInfo',
        'application\\processors\\ConsoleRenderView',
        'application\\processors\\SendPushAndroid',
    ),
);