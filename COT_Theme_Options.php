<?php


class COT_Theme_Options
{

        /**
         * Start things up
         *
         * @since 1.0.0
         */
    public function __construct()
    {
        // We only need to register the admin panel on the back-end
        if (is_admin()) {
            /**
             * Theme Option Page
             */
            add_action('admin_menu', array('COT_Theme_Options','add_admin_menu'));
            /**
             * Register the settings to use on the theme options page
             */
            add_action('admin_init', array('COT_Theme_Options','register_settings'));
        }
    }
    /**
     * Returns all theme options
     *
     * @since 1.0.0
     */
    public static function get_theme_options()
    {
        return get_option('cot_theme_options');
    }

    public static function get_theme_option($id)
    {
        $options = self::get_theme_options();
        if (isset($options[$id])) {
            return $options[$id];
        }
    }

    public static function add_admin_menu()
    {
        add_theme_page(
            esc_html__('Chafik On Tech Theme Options', 'text-domain'),
            esc_html__('Chafik On Tech Theme Options', 'text-domain'),
            'manage_options',
            'cot_theme_options.php',
            array('COT_Theme_Options' ,'cot_theme_page')
        );
    }

    public static function register_settings()
    {
        register_setting('cot_theme_options', 'cot_theme_options', array('COT_Theme_option','sanitize'));

        // Add settings section
        add_settings_section('cot_social_media_section', 'Social Media Settings', array('COT_Theme_Options','cot_display_section'), 'cot_theme_options.php');
        // Create  field
        add_settings_field(
            'cot_facebook_url',
            'Facebook Page/Profile Url',
            array('COT_Theme_Options','cot_facebook_url'),
            'cot_theme_options.php',
            'cot_social_media_section'
        );
        add_settings_field(
            'cot_twitter_url',
            'Twitter Profile Url',
            array('COT_Theme_Options','cot_twitter_url'),
            'cot_theme_options.php',
            'cot_social_media_section'
        );

        add_settings_field(
            'cot_github_url',
            'GitHub Profile Url',
            array('COT_Theme_Options','cot_github_url'),
            'cot_theme_options.php',
            'cot_social_media_section'
        );

        add_settings_field(
            'cot_linkedin_url',
            'LinkedIn Profile Url',
            array('COT_Theme_Options','cot_linkedin_url'),
            'cot_theme_options.php',
            'cot_social_media_section'
        );
        // Add settings section
        add_settings_section('cot_contact_info_section', 'Contact Information Settings', array('COT_Theme_Options','cot_display_section'), 'cot_theme_options.php');
        add_settings_field('cot_contact_name', 'Contact full name', array('COT_Theme_Options','cot_contact_name'), 'cot_theme_options.php', 'cot_contact_info_section');
        add_settings_field('cot_contact_email', 'Contact Email', array('COT_Theme_Options','cot_contact_email'), 'cot_theme_options.php', 'cot_contact_info_section');
        add_settings_field('cot_contact_telephone', 'Contact Telephone', array('COT_Theme_Options','cot_contact_telephone'), 'cot_theme_options.php', 'cot_contact_info_section');
        add_settings_field('cot_contact_img1', 'Contact  Image(1)', array('COT_Theme_Options','cot_contact_img1'), 'cot_theme_options.php', 'cot_contact_info_section');
        add_settings_field('cot_contact_img2', 'Contact  Image(2)', array('COT_Theme_Options','cot_contact_img2'), 'cot_theme_options.php', 'cot_contact_info_section');
        add_settings_field('cot_contact_description', 'Contact Description', array('COT_Theme_Options','cot_contact_description'), 'cot_theme_options.php', 'cot_contact_info_section');
    }
    public static function cot_facebook_url()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_facebook_url' name='cot_theme_options[cot_facebook_url]' type='text' value='".esc_attr(isset($options['cot_facebook_url'])?$options['cot_facebook_url']:'')."'/>";
    }
    public static function cot_twitter_url()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_twitter_url' name='cot_theme_options[cot_twitter_url]' type='text' value='".esc_attr(isset($options['cot_twitter_url'])?$options['cot_twitter_url']:'')."'/>";
    }
    public static function cot_github_url()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_github_url' name='cot_theme_options[cot_github_url]' type='text' value='".esc_attr(isset($options['cot_github_url'])?$options['cot_github_url']:'')."'/>";
    }
    public static function cot_linkedin_url()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_linkedin_url' name='cot_theme_options[cot_linkedin_url]' type='text' value='".esc_attr(isset($options['cot_linkedin_url'])?$options['cot_linkedin_url']:'')."'/>";
    }

    public static function cot_contact_name()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_contact_name' name='cot_theme_options[cot_contact_name]' type='text' value='".esc_attr(isset($options['cot_contact_name']) ?$options['cot_contact_name'] :'')."'/>";
    }
    public static function cot_contact_description()
    {
        $options = get_option('cot_theme_options');
        echo "<textarea id='cot_contact_description' name='cot_theme_options[cot_contact_description]' rows='5' cols='33' >".esc_attr(isset($options['cot_contact_description']) ?$options['cot_contact_description'] :'').'</textarea>' ;
    }
    public static function cot_contact_email()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_contact_email' name='cot_theme_options[cot_contact_email]' type='text' value='".esc_attr(isset($options['cot_contact_email']) ?$options['cot_contact_email'] :'')."'/>";
    }
    public static function cot_contact_telephone()
    {
        $options = get_option('cot_theme_options');
        echo "<input id='cot_contact_telephone' name='cot_theme_options[cot_contact_telephone]' type='text' value='".esc_attr(isset($options['cot_contact_telephone']) ?$options['cot_contact_telephone'] :'')."'/>";
    }
    public static function cot_contact_img1()
    {
        $options = get_option('cot_theme_options');
        if (isset($options['contact_img1'])) {
            $image = wp_get_attachment_image_src($options['contact_img1']);
            echo "<a href='#' id='cot_contact_img1'><img src='".$image[0]."'.</a>
            <a href='#' id='cot_contact_img1_rmv'>Remove image</a>
                 <input  name='cot_theme_options[contact_img1]' type='hidden' value='".$options['contact_img1']."' />";
        } else {
            echo " <a href='#' id='cot_contact_img1'>Upload image</a>
            <a href='#' id='cot_contact_img1_rmv' style='display:none'>Remove image</a>
                 <input  name='cot_theme_options[contact_img1]' type='hidden' value='' />";
        }
    }
    public static function cot_contact_img2()
    {
        $options = get_option('cot_theme_options');
        if (isset($options['contact_img2'])) {
            $image = wp_get_attachment_image_src($options['contact_img2']);
            echo "<a href='#' id='cot_contact_img2'><img src='".$image[0]."'.</a>
            <a href='#' id='cot_contact_img2_rmv'>Remove image</a>
                 <input  name='cot_theme_options[contact_img2]' type='hidden' value='".$options['contact_img2']."' />";
        } else {
            echo " <a href='#' id='cot_contact_img2'>Upload image</a>
            <a href='#' id='cot_contact_img2_rmv' style='display:none'>Remove image</a>
                 <input  name='cot_theme_options[contact_img2]' type='hidden' value='' />";
        }
    }
    public static function cot_display_section($section)
    {
    }

    public static function sanitize($options)
    {
        if ($options) {
        }
        return $options;
    }

    public static function cot_theme_page()
    {?>
<div class="section panel">
    <h1>Theme Options</h1>
    <form action="options.php" enctype="multipart/form-data" method="POST">
        <?php
        settings_fields('cot_theme_options');
        do_settings_sections('cot_theme_options.php');
        ?>
        <?php submit_button(); ?>
    </form>
    Created by <a href="#">Chafik HADJ ABDOU RAZACK</a>.
</div>
<?php }
}
