<?php
return array (
    'processors' => array(
        array(
            'name' => 'application\\processors\\InArray',
            'params' => array(
                'fieldName' => 'eventSource',
                'fieldValue' => array(
                    'onRepeatedMessage',
                ),
            ),
        ),
        array(
            'name' => 'application\\processors\\IsEqual',
            'params' => array(
                'fieldName' => 'processingGroup',
                'fieldValue' => 'urgent',
            ),
        ),
    ),
);