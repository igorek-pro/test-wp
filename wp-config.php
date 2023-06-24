<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'test-wp' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'test-wp' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_jc2+U=T/X(^H`3nHl9Wr0F7a_Mlo.okz7~)9}C}pY+Bga<oB)jvHm-zv>d`cl^,' );
define( 'SECURE_AUTH_KEY',  'bD>GuTIMtzx>qlB?!2.jKCSKF@{<~_x^@6gY?*Adnna-lJiE+!LU%Dm&J;f)nTNC' );
define( 'LOGGED_IN_KEY',    'a,W 0pT4D+3}TVezLSVLbTMJD54.$0oFOXrv=G{*TV8_5Kfqh<;x0GsEwLNno$z4' );
define( 'NONCE_KEY',        '{qx Q?ivhvld*z.WGF}jG=3)?M:L7-4nAz8@U<l]`Giiu3|U4KIWW#4?q<a+10 R' );
define( 'AUTH_SALT',        'xA*oqpGdBhH)nX9r- Bk}ItnN2GFkcqw85}C70}D9|Bu#dHQ9|AjZltJS2_?;jI`' );
define( 'SECURE_AUTH_SALT', '?:@I&{CTP+>hJ})?HD(rzNLow(9L^Gz#?YqF^!%brH).@CI6!^w6:2i2 /?~b1x0' );
define( 'LOGGED_IN_SALT',   'wZX/f$>BW9HN9vHl9ztY0qq3~u!c8?f>z8XO`8D{FcwRx`A@U*7.yW=p,n=_K/}K' );
define( 'NONCE_SALT',       'y>(j6!gFzSN/]{Xvr]0u_zSzu7>8]ce41Uh82|w77HCZSPd+tC4Dr1Ze*/(M`PX*' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
