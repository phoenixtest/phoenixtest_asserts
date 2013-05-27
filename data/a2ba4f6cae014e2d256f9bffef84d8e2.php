<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'to_id' => 'toUserId',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\SendCountersViaInteraction',
    ),
);