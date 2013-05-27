<?php
return array (
    'clientScriptInternalPackages' => array(
        '_codeMirror' => array(
            'module_css' => array(
                'plugins/codeMirror/docs.css',
                'plugins/codeMirror/codemirror.css',
                'plugins/codeMirror/simple-hint.css',
                'plugins/codeMirror/dialog.css',
            ),
            'module_js' => array(
                'plugins/codeMirror/codemirror.js',
                'plugins/codeMirror/xml.js',
                'plugins/codeMirror/closetag.js',
                'plugins/codeMirror/simple-hint.js',
                'plugins/codeMirror/xml-hint.js',
                'plugins/codeMirror/search.js',
                'plugins/codeMirror/searchcursor.js',
                'plugins/codeMirror/dialog.js',
                'plugins/codeMirror/match-highlighter.js',
                'plugins/codeMirror/formatting.js',
                'plugins/codeMirror/css.js',
            ),
        ),
        'toastmessage' => array(
            'module_css' => array(
                's/jquery.toastmessage.css',
            ),
            'module_js' => array(
                'js/jquery.toastmessage.js',
            ),
        ),
        'fancybox' => array(
            'module_css' => array(
                'plugins/fancybox/jquery.fancybox-1.3.4.css',
            ),
            'module_js' => array(
                'plugins/fancybox/jquery.fancybox-1.3.4.pack.js',
            ),
        ),
        '_js_error' => array(
            'js' => array(
                'js/jsError.js',
            ),
        ),
        'galleria' => array(
            'module_css' => array(
                'plugins/galleria/themes/classic/galleria.classic.css',
            ),
            'module_js' => array(
                'plugins/galleria/galleria-1.2.7.js',
            ),
        ),
        '_reportClearDate' => array(
            'module_js' => array(
                'js/report/clearDate.js',
            ),
            'depends' => array(
                'jquery',
            ),
        ),
    ),
);