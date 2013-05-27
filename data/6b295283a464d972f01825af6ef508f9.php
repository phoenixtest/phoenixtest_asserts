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
                    'onRegisterComplete',
                    'onResendWelcomeMail',
                    'onChangeEmailRequest',
                    'onRemindPassword',
                ),
            ),
        ),
        array(
            'name' => 'application\\processors\\SetChainName',
            'params' => array(
                'chainName' => 'b2cEmail',
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
        array(
            'name' => 'application\\processors\\SetTransportName',
            'params' => 'eEmail',
        ),
        'application\\processors\\SetUserAddress',
        'application\\processors\\AddressValid',
        'application\\processors\\SetEmailId',
        'application\\processors\\SetViewInfo',
        'application\\processors\\ViewModelValid',
    ),
);