<?php
return array (
    'clientScriptPackages' => array(
        'admin.layouts.base' => array(
            'module_css' => array(
                's/base.css',
            ),
            'module_js' => array(
                'js/base.js',
            ),
        ),
        'admin.layouts.main' => array(
            'module_css' => array(
                's/base.css',
                's/landing_cms_base.css',
            ),
            'module_js' => array(
                'js/landingCms/functions.js',
                'js/base.js',
            ),
            'depends' => array(
                'jquery',
                'jquery.ui',
                '_js_error',
            ),
        ),
        'admin.reportIncome.report' => array(
            'module_css' => array(
                's/report_income.css',
            ),
            'module_js' => array(
            ),
        ),
        'admin.report.userInfo' => array(
            'depends' => array(
                '_reportClearDate',
            ),
        ),
        'admin.report.payment_visit' => array(
            'depends' => array(
                '_reportClearDate',
            ),
        ),
        'admin.report.paymentRepeat' => array(
            'depends' => array(
                '_reportClearDate',
            ),
        ),
        'admin.report.payment' => array(
            'depends' => array(
                '_reportClearDate',
            ),
        ),
        'admin.report.entry' => array(
            'module_js' => array(
                'js/report/entry.js',
            ),
            'depends' => array(
                'admin.layouts.main',
                '_reportClearDate',
            ),
        ),
        'admin.landing.editPage' => array(
            'module_js' => array(
                'js/codeMirrorPack.js',
            ),
            'js_position' => 'POS_END',
            'depends' => array(
                'admin.layouts.main',
                '_codeMirror',
            ),
        ),
        'admin.landing.editDocument' => array(
            'module_js' => array(
                'js/landingCms/resource.js',
                'js/codeMirrorPack.js',
            ),
            'js_position' => 'POS_END',
            'depends' => array(
                'admin.layouts.main',
                'toastmessage',
                '_codeMirror',
            ),
        ),
        'admin.landing.editBlock' => array(
            'module_js' => array(
                'js/codeMirrorPack.js',
                'js/landingCms/resource.js',
            ),
            'js_position' => 'POS_END',
            'depends' => array(
                'admin.layouts.main',
                'toastmessage',
                '_codeMirror',
            ),
        ),
        'admin.landing.editResource' => array(
            'module_js' => array(
                'js/landingCms/resource.js',
            ),
            'depends' => array(
                'toastmessage',
                '_codeMirror',
            ),
        ),
        'admin.landing.editTilePhoto' => array(
            'module_js' => array(
                'js/landing/editTilePhoto.js',
            ),
        ),
        'admin.landing.profiles' => array(
            'module_css' => array(
                's/landingProfiles.css',
            ),
            'module_js' => array(
                'js/landing/profiles.js',
            ),
        ),
        'admin.layouts.errorsmain' => array(
            'module_css' => array(
                's/adminerrors.css',
            ),
            'depends' => array(
                'jquery',
            ),
        ),
        'admin.approve.photo_mass_approve' => array(
            'module_js' => array(
                'js/mass_approve_photo.js',
            ),
            'module_css' => array(
                's/approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
            ),
        ),
        'admin.approve.photo_approve' => array(
            'module_js' => array(
                'js/approve_photo.js',
            ),
            'module_css' => array(
                's/approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
                'galleria',
            ),
        ),
        'admin.approve.content_mass_approve' => array(
            'module_js' => array(
                'js/mass_approve_content.js',
            ),
            'module_css' => array(
                's/approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
            ),
        ),
        'admin.approve.content_approve' => array(
            'module_js' => array(
                'js/approve_content.js',
            ),
            'module_css' => array(
                's/approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
            ),
        ),
        'admin.approve.scammer_approve' => array(
            'module_css' => array(
                's/approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
            ),
        ),
        'admin.approve.imb_scam_approve' => array(
            'module_js' => array(
                'js/imb_scam_approve.js',
            ),
            'module_css' => array(
                's/imb_scam_approve.css',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
            ),
        ),
        'admin.scammer.scam_detector_activity_list' => array(
            'module_js' => array(
                'js/hadling_scammer_by_staff.js',
            ),
            'depends' => array(
                'admin.layouts.base',
                'fancybox',
            ),
        ),
        'admin.user.find' => array(
            'depends' => array(
                'admin.layouts.base',
            ),
        ),
        'admin.user.photos' => array(
            'module_js' => array(
                'js/user/photos.js',
            ),
        ),
        'admin.user.payments' => array(
            'module_css' => array(
                's/payment.css',
            ),
        ),
        'admin.payment.add_package_set' => array(
            'module_js' => array(
                'js/payment/add_package_set.js',
            ),
        ),
        'admin.payment.stock_form' => array(
            'module_js' => array(
                'js/payment/stock_form.js',
            ),
        ),
        'widget.HandlerScammer' => array(
            'module_js' => array(
                'js/management_scammer.js',
            ),
            'depends' => array(
                'fancybox',
            ),
        ),
        'widget.PaymentStatus' => array(
            'module_js' => array(
                'js/userPermissions.js',
            ),
            'depends' => array(
            ),
        ),
        'codeMirrorReadOnly' => array(
            'module_js' => array(
                'js/landing/documentReadOnly.js',
            ),
        ),
    ),
);