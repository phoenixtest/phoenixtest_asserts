<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'userId' => 'toUserId',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\SetUniqMessageId',
        'application\\processors\\SetUserSite',
        'application\\processors\\SetBrandInfo',
        array(
            'name' => 'application\\processors\\SetTransportName',
            'params' => 'eEmail',
        ),
        'application\\processors\\SetUserAddress',
        'application\\processors\\SetReturnPath',
        'application\\processors\\SetEmailId',
        'application\\processors\\SetViewInfo',
        'application\\processors\\SetLocaleInfo',
        'application\\processors\\ConsoleRenderView',
        'application\\processors\\SendEmail',
        'application\\processors\\SaveSentStats',
    ),
);