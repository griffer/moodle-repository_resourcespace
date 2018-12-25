<?php
defined('MOODLE_INTERNAL') || die();
$capabilities = array(
    'repository/resourcespace:view' => array(
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE,
        'archetypes' => array(
            'user' => CAP_ALLOW
        )
    )
);
