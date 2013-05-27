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
        array(
            'name' => 'application\\processors\\NotScammer',
            'params' => array(
                'userFieldName' => 'fromUserId',
            ),
        ),
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'renderType' => 'action',
            ),
        ),
        'application\\processors\\AddActivity',
        'application\\processors\\SendViaInteraction',
    ),
);