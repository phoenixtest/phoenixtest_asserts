<?php
return array (
    'controllerDeny' => array(
        'paymentVisit' => array(
            'Authenticated' => 'application.denyControllers.Register',
            'Confirmed' => 'application.denyControllers.ConfirmationPopup',
        ),
    ),
);