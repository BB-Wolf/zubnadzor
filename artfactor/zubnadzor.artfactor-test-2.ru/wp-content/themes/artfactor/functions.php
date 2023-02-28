<?php
if (function_exists('add_theme_support')) {
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
}

register_nav_menus(array(
    'top'    => 'Главное меню',
    'bottom'    => 'Нижнее меню',
    'service'    => 'Меню услуг',
));


add_action('wp_enqueue_scripts', 'add_styles');
function add_styles()
{
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
}


add_action('wp_enqueue_scripts', 'addJs');
function addJs()
{
    wp_enqueue_script('aos.js', get_template_directory_uri() . '/js/aos.js');
}


add_action('admin_init', 'eg_settings_api_init');

function eg_settings_api_init()
{

    // Добавляем блок опций на базовую страницу "Чтение"
    add_settings_section(
        'eg_setting_section', // секция
        'Контактные данные',
        'eg_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код.
    add_settings_field(
        'contact_email',
        'Почта для контактов',
        'eg_setting_callback_function', // можно указать ''
        'general', // страница
        'eg_setting_section' // секция
    );
    add_settings_field(
        'contact_phone',
        'Телефон в шапке',
        'eg_setting_callback_function2',
        'general', // страница
        'eg_setting_section' // секция
    );

    // Регистрируем опции, чтобы они сохранялись при отправке
    // $_POST параметров и чтобы callback функции опций выводили их значение.
    register_setting('general', 'contact_email');
    register_setting('general', 'contact_phone');
}

function eg_setting_section_callback_function()
{
    echo '<p>Контактные данные для вывода в шапке</p>';
}

/**
 * Callback функции выводящие HTML код опций.
 *
 * Создаем checkbox и text input теги.
 *
 * @return void
 */
function eg_setting_callback_function()
{
?>
    <input name="contact_email" type="text" value="<?= esc_attr(get_option('contact_email')) ?>" class="code" />
<?php
}

function eg_setting_callback_function2()
{
?>
    <input name="contact_phone" type="text" value="<?= esc_attr(get_option('contact_phone')) ?>" class="code2" />
<?php
}



add_filter('single_template', function ($single_template) {

    $parent     = '3'; //Здесь вставляем id категории(рубрики) для которой хотите изменить шаблон у детальной страницы записи
    $categories = get_categories('child_of=' . $parent);
    $cat_names  = wp_list_pluck($categories, 'name');

    if (has_category('movies') || has_category($cat_names)) {
        $single_template = dirname(__FILE__) . '/single-template.php'; // название файла шаблона
    }
    return $single_template;
}, PHP_INT_MAX, 2);
