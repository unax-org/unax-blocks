<?php
/**
 * Leaderland functions
 */

require_once 'inc/template-functions.php';
require_once 'inc/template-hooks.php';


/**
 * Register group block style.
 */
register_block_style(
    'core/group',
    array(
        'name'         => 'container',
        'label'        => __( 'Container', 'twentytwentytwo-child' ),
    )
);


/**
 * Register group columns style.
 */
register_block_style(
    'core/row',
    array(
        'name'         => 'container',
        'label'        => __( 'Container', 'twentytwentytwo-child' ),
    )
);


/**
 * Register group columns style.
 */
register_block_style(
    'core/columns',
    array(
        'name'         => 'container',
        'label'        => __( 'Container', 'twentytwentytwo-child' ),
    )
);
