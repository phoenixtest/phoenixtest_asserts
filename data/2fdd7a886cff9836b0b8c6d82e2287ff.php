<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\IsEqual',
            'params' => array(
                'fieldName' => 'processingGroup',
                'fieldValue' => 'common',
            ),
        ),
        array(
            'name' => 'application\\processors\\InArray',
            'params' => array(
                'fieldName' => 'eventSource',
                'fieldValue' => array(
                    'onViewProfile',
                    'onSendingImb',
                    'onWink',
                ),
            ),
        ),
        array(
            'name' => 'application\\processors\\SetChainName',
            'params' => array(
                'chainName' => 'c2cPushIos',
            ),
        ),
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'from_id' => 'fromUserId',
                'to_id' => 'toUserId',
            ),
        ),
        'application\\processors\\RecipientNotImport',
        'application\\processors\\RecipientConfirmed',
        'application\\processors\\UserOffline',
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\ValuableMessageFromImport',
        'application\\processors\\UserSubscribed',
        'application\\processors\\SetEmailId',
        'application\\processors\\LimitNotReached',
        array(
            'name' => 'application\\processors\\SetTransportName',
            'params' => 'pushIos',
        ),
        'application\\processors\\SetUserAddress',
        'application\\processors\\AddressValid',
        'application\\processors\\SetViewInfo',
        'application\\processors\\ViewModelValid',
    ),
);