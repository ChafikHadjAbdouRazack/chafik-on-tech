<?php
/**
 * Theme Option Page
 */
function cot_theme_menu()
{
    add_theme_page('Chafik On Tech Theme Options', 'Chafik On Tech Theme Options', 'manage_options', 'cot_theme_options.php', 'cot_theme_page');
}
add_action('admin_menu', 'cot_theme_menu');
/**
 * Callback function to the cot_theme_page
 * Will display the theme options page
 */
function cot_theme_page() {?>
<div class="section panel">
    <h1>Theme Options</h1>
    <form action="options.php" enctype="multipart/form-data" method="POST">
        <?php
        settings_fields('cot_theme_options');
        do_settings_sections('cot_theme_options.php');
        ?>
        <p class="submit"><input type="submit" class="button-primary"
                value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    Created by <a href="#">Chafik HADJ ABDOU RAZACK</a>.
</div>
<?php }
/**
 * Register the settings to use on the theme options page
 */
add_action('admin_init', 'cot_register_settings');

function cot_register_settings()
{
    // Register the settings with Validation callback
    register_setting('cot_theme_options', 'cot_theme_options', 'cot_validate_settings');
    // Add settings section
    add_settings_section('cot_text_section', 'Text box Title', 'cot_display_section', 'cot_theme_options.php');
    // Create textbox field
    $field_args = array(
        'type'=>'text',
        'id'=>'cot_textbox',
        'name'=>'cot_textbox',
        'desc'=>'Example of textbox description',
        'std'=>'',
        'label_for'=>'cot_textbox',
        'class'=>'css_class'
    );
    add_settings_field('example_textbox', 'Example textbox', 'cot_display_setting', 'cot_theme_options.php', 'cot_text_section', $field_args);
}

function cot_display_section($section)
{
}

/**
 * Callback function to the register_settings function will pass through an input variable
 * You can then validate the values and the return variable will be the values stored in the database.
 */
function cot_validate_settings($input)
{
    foreach ($input as $k => $v) {
        $newinput[$k] = trim($v);
        // Check the input is a letter or a number
        if (!preg_match('/^[A-Z0-9 _]*$/i', $v)) {
            $newinput[$k] = '';
        }
    }
    return $newinput;
}

/**
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */
function cot_display_setting($args)
{
    extract($args);
    $option_name = 'cot_theme_options';
    $options = get_option($option_name);
    switch ($type) {
          case 'text':
              $options[$id] = stripslashes($options[$id]);
              $options[$id] = esc_attr($options[$id]);
              echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' />";
              echo ($desc != '') ? "<span class='description'>$desc</span>" : "";
          break;
    }
}
