<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'COT_Theme_Options.php';
function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = "nav-link";

    return $atts;
}
  add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

  function add_additional_class_on_li($classes, $item, $args)
  {
      $classes[] = 'nav-item';

      return $classes;
  }
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
function add_css()
{
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/vendor/bootstrap.min.css', '1.1', 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('slick-style', get_template_directory_uri().'/assets/css/vendor/slick.css', '1.1', 'all');
    wp_enqueue_style('slick-style');
    wp_register_style('slick-theme-style', get_template_directory_uri().'/assets/css/vendor/slick-theme.css', '1.1', 'all');
    wp_enqueue_style('slick-theme-style');
    wp_register_style('aos-style', get_template_directory_uri().'/assets/css/vendor/aos.css', '1.1', 'all');
    wp_enqueue_style('aos-style');
    wp_register_style('feature-style', get_template_directory_uri().'/assets/css/plugins/feature.css', '1.1', 'all');
    wp_enqueue_style('feature-style');
    wp_register_style('main-style', get_template_directory_uri().'/assets/css/style.css', '1.1', 'all');
    wp_enqueue_style('main-style');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_scripts()
{
    wp_register_script('jquery-script', get_template_directory_uri().'/assets/js/vendor/jquery.js', array('jquery'), '1.1', true);
    wp_enqueue_script('jquery-script');

    wp_register_script('modernizer-script', get_template_directory_uri().'/assets/js/vendor/modernizer.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('modernizer-script');

    wp_register_script('feather-script', get_template_directory_uri().'/assets/js/vendor/feather.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('feather-script');

    wp_register_script('slick-script', get_template_directory_uri().'/assets/js/vendor/slick.min.js', array('jquery'), '1.1', true);
    wp_enqueue_script('slick-script');

    wp_register_script('bootstrap-script', get_template_directory_uri().'/assets/js/vendor/bootstrap.js', array('jquery'), '1.1', true);
    wp_enqueue_script('bootstrap-script');

    wp_register_script('text-type-script', get_template_directory_uri().'/assets/js/vendor/text-type.js', array('jquery'), '1.1', true);
    wp_enqueue_script('text-type-script');

    wp_register_script('wow-script', get_template_directory_uri().'/assets/js/vendor/wow.js', array('jquery'), '1.1', true);
    wp_enqueue_script('wow-script');

    wp_register_script('aos-script', get_template_directory_uri().'/assets/js/vendor/aos.js', array('jquery'), '1.1', true);
    wp_enqueue_script('aos-script');

    wp_register_script('particles-script', get_template_directory_uri().'/assets/js/vendor/particles.js', array('jquery'), '1.1', true);
    wp_enqueue_script('particles-script');

    wp_register_script('main-script', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.1', true);
    wp_enqueue_script('main-script');
}
add_action('wp_enqueue_scripts', 'add_scripts');
add_theme_support('menus');
new COT_Theme_Options();
function cot_get_theme_option($id = '')
{
    return COT_Theme_Options::get_theme_option($id);
}

add_action('wp_ajax_contact_form', 'contactForm');
add_action('wp_ajax_nopriv_contact_form', 'contactForm');
function contactForm()
{
    if (!wp_verify_nonce($_POST['nonce'], 'contact_form')) {
        wp_send_json_error('Formulaire invalide', 401);
        die();
    }
    $data = [];
    wp_parse_str($_POST['contact_form'], $data);
    $admin_email = get_option('admin_email');
    $headers[] ='Content-Type: text/html; charset=UTF-8';
    $headers[]='From: Chafik On Tech <'.$admin_email.'>';
    $headers[]= 'Reply-To:'.$data['contact-email'];
    $send_to = $admin_email;
    $message= '';
    foreach ($data as $key => $value) {
        $message.='<strong>'.$key.'</strong>:'.$value.' <br/>';
    }
    try {
        if (wp_mail($send_to, $data['subject'], $message, $headers)) {
            wp_send_json_success("Email sent");
        } else {
            wp_send_json_error('Email error');
        }
    } catch (\Exception $e) {
        wp_send_json_error($e->getMessage());
    }
}

add_action('phpmailer_init', 'custom_mailer');

function custom_mailer(PHPMailer $phpMailer)
{
    $phpMailer->setFrom('contact@chafikontech.com', 'Chafik On Tech');
    $phpMailer->addAddress('contact@chafikontech.com', 'Chafik On Tech');
    $phpMailer->Host="plesk.wetillix.com";
    $phpMailer->Port=587;
    $phpMailer->SMTPAuth=true;
    $phpMailer->SMTPSecure ='tls';
    $phpMailer->Username = 'contact@chafikontech.com';
    $phpMailer->Password = '_tYsx0O1dcwzh0Jf';
    $phpMailer->isSMTP();
}
