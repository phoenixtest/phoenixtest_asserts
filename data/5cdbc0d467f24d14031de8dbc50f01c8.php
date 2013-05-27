<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\SetChainName',
            'params' => array(
                'chainName' => 'b2cPushIos',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\QueueMessage',
    ),
);