<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\SetChainName',
            'params' => array(
                'chainName' => 'b2cEmail',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\QueueMessage',
    ),
);