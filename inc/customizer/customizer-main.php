<?php
define( 'SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID', 'shopanytime_customizer_settings' );
define( 'SIMPLE_SHOP_CUSTOMIZER_PANEL_ID', 'shopanytime_customizer_panel' );

if ( class_exists( 'Kirki' ) ) {
    Kirki::add_config( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'capability'  => 'edit_theme_options',
        'option_type' => 'theme_mod',
    ) );
    Kirki::add_panel( SIMPLE_SHOP_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 10,
        'title'       => esc_html__( 'SimpleShop', 'kirki' ),
        'description' => esc_html__( 'Simple Shop Settings', 'kirki' ),
    ) );
    Kirki::add_section( 'shopanytime_homepage', array(
        'title'           => esc_html__( 'Homepage Settings', 'kirki' ),
        'panel'           => SIMPLE_SHOP_CUSTOMIZER_PANEL_ID,
        'priority'        => 160,
        'active_callback' => function () {
            return is_page_template( 'page-templates/homepage.php' );
        },
    ) );

    // category section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_category_section',
        'label'    => esc_html__( 'Display Product Category', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_product_cat_title',
        'label'           => esc_html__( 'Product Category Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'Shop By Category', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_category_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'number',
        'settings'        => 'shopanytime_homepage_product_cat_number_column',
        'label'           => esc_html__( 'Number of Columns', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => 4,
        'choices'         => array(
            'min'  => 0,
            'max'  => 8,
            'step' => 1,
        ),
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_category_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
    Kirki::add_field(  SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'radio',
        'settings'    => 'shopanytime_homepage_product_cat_show_product_count',
        'label'       => esc_html__( 'Category Product Count', 'kirki' ),
        'section'     => 'shopanytime_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            '1'   => esc_html__( 'Show', 'kirki' ),
            '0' => esc_html__( 'Hide', 'kirki' )
        ],
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_category_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ] );

    // main product section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_main_product_section',
        'label'    => esc_html__( 'Display Main Products', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_main_product_title',
        'label'           => esc_html__( 'Main Product Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'New Arrival', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_main_product_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_main_product_sub_title',
        'label'           => esc_html__( 'Main Product Sub Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( '37 New fashion products arrived recently in our showroom for this winter', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_main_product_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );

    // promotion section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_promotion_section',
        'label'    => esc_html__( 'Display Promotion', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_promotion_title',
        'label'           => esc_html__( 'Promotion Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'Sale', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_promotion_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_promotion_sub_title',
        'label'           => esc_html__( 'Promotion Subtitle', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'Up to 50% off', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_promotion_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );

    // popular product section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_popular_product_section',
        'label'    => esc_html__( 'Display Popular Products', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_propular_product_title',
        'label'           => esc_html__( 'Popular Product Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'Popular Product', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_popular_product_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_propular_product_sub_title',
        'label'           => esc_html__( 'Popular Product Sub Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( '', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_popular_product_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );

    // offer section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_offer_section',
        'label'    => esc_html__( 'Display Offers Products', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),

    ) );

    // flicker Section
    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'     => 'switch',
        'settings' => 'shopanytime_homepage_flicker_section',
        'label'    => esc_html__( 'Display flickers', 'kirki' ),
        'section'  => 'shopanytime_homepage',
        'default'  => '1',
        'priority' => 10,
        'choices'  => array(
            'on'  => esc_html__( 'Show', 'kirki' ),
            'off' => esc_html__( 'Hide', 'kirki' ),
        ),
    ) );

    Kirki::add_field( SIMPLE_SHOP_CUSTOMIZER_CONFIG_ID, array(
        'type'            => 'text',
        'settings'        => 'shopanytime_homepage_flicker_title',
        'label'           => esc_html__( 'Flicker Title', 'kirki' ),
        'section'         => 'shopanytime_homepage',
        'default'         => esc_html__( 'Simple Shop on Flickr', 'kirki' ),
        'priority'        => 10,
        'active_callback' => array(
            array(
                'setting'  => 'shopanytime_homepage_flicker_section',
                'operator' => '==',
                'value'    => true,
            ),
        ),
    ) );
}