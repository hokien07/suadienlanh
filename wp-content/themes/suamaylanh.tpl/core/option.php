<?php
//thư viện yêu cầu kích hoạt plugin
add_action('tgmpa_register', 'my_plugin_activation');
function my_plugin_activation()
{
    $plugins = array(
        array(
            'name' => 'redux-framework',
            'slug' => 'redux-framework', //Tên slug của plugin trên URL
            'required' => false,
        ),

    ); // end $plugins

    $config = array(
        'default_path' => '',
        'menu' => 'hokien-install-plugins', // Menu slug.
        'has_notices' => true,                    // Có hiển thị thông báo hay không
        'dismissable' => false,                    // Nếu đặt false thì người dùng không thể hủy thông báo cho đến khi cài hết plugin.
        'dismiss_msg' => '',                      // Nếu 'dismissable' là false, thì tin nhắn ở đây sẽ hiển thị trên cùng trang Admin.
        'is_automatic' => false,                   // Nếu là false thì plugin sẽ không tự động kích hoạt khi cài xong.
        'message' => '',
        'strings' => array(
            'page_title' => __('Yêu Cầu Cài Đặt Plugin', 'tgmpa'),
            'menu_title' => __('Install Plugins', 'tgmpa'),
            'installing' => __('Installing Plugin: %s', 'tgmpa'), // %s = plugin name.
            'oops' => __('Có Lỗi trong quá trình cài đặt.', 'tgmpa'),
            'notice_can_install_required' => _n_noop('This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_can_install_recommended' => _n_noop('Bạn cần cài đặt plugin: %1$s.', 'This theme recommends the following plugins: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_install' => _n_noop('Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.'), // %1$s = plugin name(s).
            'notice_can_activate_required' => _n_noop('The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop('The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_activate' => _n_noop('Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.'), // %1$s = plugin name(s).
            'notice_ask_to_update' => _n_noop('The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.'), // %1$s = plugin name(s).
            'notice_cannot_update' => _n_noop('Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.'), // %1$s = plugin name(s).
            'install_link' => _n_noop('cài đặt plugin', 'Begin installing plugins'),
            'activate_link' => _n_noop('Begin activating plugin', 'Begin activating plugins'),
            'return' => __('Return to Required Plugins Installer', 'tgmpa'),
            'plugin_activated' => __('Plugin đã được kích hoạt thành công.', 'tgmpa'),
            'complete' => __('Đã cài đặt và kích hoạt tất cảplugin. %s', 'tgmpa'), // %s = dashboard link.
            'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    ); // end $config
    tgmpa($plugins, $config);

}

    //theme option

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "hk_options";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => 'Theme đang dùng: ' . $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => 'Phiên Bản: ' . $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Theme Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Chỉnh các thông số theme tại đây.</p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>Khu vực chỉnh một số thông số của giao diện. Ấn Save để lưu lại thay đổi.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>Khu vực chỉnh một số thông số của giao diện. Ấn Save để lưu lại thay đổi.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     *
     * ---> START SECTIONS
     *
     */

    //logo
    Redux::setSection( $opt_name, array(
    'title' => __( 'Logo', 'redux-framework-demo' ),
    'id'    => 'logo',
    'desc'  => __( 'Cài đạt logo cho trang web.', 'redux-framework-demo' ),
    'icon'  => 'el el-blogger',
    'fields' => array(
        array(
            'id'       => 'logo-top',
            'type'     => 'switch',
            'title'    => __( 'Tiêu Đề: ', 'redux-framework-demo' ),
            'hint'     => array(
                'content' => 'Nhập tiêu đề thể hiện trên text box.',
            )
        ),
        array(
            'id'       => 'image-logo',
            'type'     => 'media',
            'title'    => __( 'Hình Logo:  ', 'redux-framework-demo' ),
            'desc'     => __( 'Chọn hình làm logo và upload tại đây.', 'redux-framework-demo' ),
            'compiler' => 'bool',
            'on'       => __('Bật', 'redux-framework-demo'),
            'off'      => __('Tắt', 'redux-framework-demo'),
        )
    )
) );


    // -> Header Slide
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Header Slide', 'redux-framework-demo' ),
        'id'     => 'slide',
        'desc'   => __( 'links hình ảnh và tiêu đề slide.', 'redux-framework-demo' ),
        'icon'   => 'el el-slideshare',
        'fields' => array(
            array(
                'id'       => 'slide-text-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu Đề: ', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề slide.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Nhập tiêu đề thể hiện khi slide hình ảnh chạy.',
                )
            ),
            array(
                'id'       => 'slide-image-1',
                'type'     => 'media',
                'title'    => __( 'Links: ', 'redux-framework-demo' ),
                'desc'     => __( 'Link hình ảnh slide.', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'slide-text-2',
                'type'     => 'text',
                'title'    => __( 'Tiêu Đề: ', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề slide 2.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Nhập tiêu đề thể hiện khi slide hình ảnh chạy.',
                )
            ),
            array(
                'id'       => 'slide-image-2',
                'type'     => 'media',
                'title'    => __( 'Links: ', 'redux-framework-demo' ),
                'desc'     => __( 'Link hình ảnh slide.', 'redux-framework-demo' )
            )
        )
    ) );

    //Header Text
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header Text', 'redux-framework-demo' ),
        'id'    => 'header-text',
        'desc'  => __( 'Thông tin 3 section nằm trong text box.', 'redux-framework-demo' ),
        'icon'  => 'el el-pencil',
        'fields' => array(
            array(
                'id'       => 'header-text-1',
                'type'     => 'text',
                'title'    => __( 'Tiêu Đề: ', 'redux-framework-demo' ),
                'desc'     => __( 'Tiêu đề text box.', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Nhập tiêu đề thể hiện trên text box.',
                )
            ),
            array(
                'id'       => 'header-text-2',
                'type'     => 'text',
                'title'    => __( 'Slogan:  ', 'redux-framework-demo' ),
                'desc'     => __( 'Câu slogan', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Câu slogan.',
                )
            ),
            array(
                'id'       => 'header-text-3',
                'type'     => 'textarea',
                'title'    => __( 'Nội Dung Ngắn:  ', 'redux-framework-demo' ),
                'desc'     => __( 'Nội dung ngắn được hiển thị ở trang chủ', 'redux-framework-demo' ),
                'hint'     => array(
                    'content' => 'Nội dung ngắn được hiển thị ở trang chủ.',
                )
            )
        )
    ) );

    //phản hồi khách hàng
    Redux::setSection( $opt_name, array(
    'title'  => __( 'Phản hồi khách hàng', 'redux-framework-demo' ),
    'id'     => 'phan-hoi',
    'desc'   => __( 'Thông tin phản hồi khách hàng lưu tại đây.', 'redux-framework-demo' ),
    'icon'   => 'el el-thumbs-up',
    'fields' => array(
        array(
            'id'       => 'ten-khach-hang',
            'type'     => 'text',
            'title'    => __( 'Tên Khách Hàng', 'redux-framework-demo' ),
            'desc'     => __( 'Tên Khách Hàng', 'redux-framework-demo' ),
            'hint'     => array(
                'content' => 'Tên khách hàng đã phản hồi.',
            )
        ),
        array(
            'id'       => 'noi-dung',
            'type'     => 'textarea',
            'title'    => __( 'Nội Dung Phản Hồi: ', 'redux-framework-demo' ),
            'desc'     => __( 'Thông tin khách đã phản hồi.', 'redux-framework-demo' ),
            'hint'     => array(
                'content' => 'Thông tin khách đã phản hồi.',
            )
        ),
        array(
            'id'       => 'hinh-khach',
            'type'     => 'media',
            'title'    => __( 'Link avatar khách hàng: ', 'redux-framework-demo' ),
            'desc'     => __( 'link dẫn tới hình ảnh của khách hàng.', 'redux-framework-demo' )
        )

    )
) );


/*
 * <--- END SECTIONS
 */

