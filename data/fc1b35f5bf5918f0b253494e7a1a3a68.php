<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\InArray',
            'params' => array(
                'fieldName' => 'eventSource',
                'fieldValue' => array(
                    'onFunnelComplete',
                    'onRepeatedMessage',
                ),
            ),
        ),
        array(
            'name' => 'application\\processors\\IsEqual',
            'params' => array(
                'fieldName' => 'processingGroup',
                'fieldValue' => 'common',
            ),
        ),
        array(
            'name' => 'application\\processors\\SetChainName',
            'params' => array(
                'chainName' => 'b2cPushAndroid',
            ),
        ),
        array(
            'name' => 'application\\processors\\Adapt',
            'params' => array(
                'userId' => 'toUserId',
            ),
        ),
        'application\\processors\\SetNotificationId',
        'application\\processors\\SetNotificationInfo',
        'application\\processors\\UserSubscribed',
        'application\\processors\\RecipientNotImport',
        'application\\processors\\RecipientConfirmed',
        array(
            'name' => 'application\\processors\\SetTransportName',
            'params' => 'pusAndroid',
        ),
        'application\\processors\\SetUserAddress',
        'application\\processors\\AddressValid',
        'application\\processors\\SetEmailId',
        'application\\processors\\SetViewInfo',
        'application\\processors\\ViewModelValid',
    ),
);