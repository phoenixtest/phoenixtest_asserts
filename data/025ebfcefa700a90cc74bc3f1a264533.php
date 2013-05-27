<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'from_id' => 'fromUserId',
                'to_id' => 'toUserId',
                'toUserId' => 'userIdTo',
                'fromUserId' => 'userIdFrom',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\SetLocaleInfo',
        'application\\processors\\RecipientHasSpecialStatus',
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'renderType' => 'action',
            ),
        ),
        'application\\processors\\SendAutoReply',
    ),
);