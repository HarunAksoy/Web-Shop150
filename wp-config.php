WordPress

Die Datei wp-config.php ist nicht beschreibbar.

Sie können die Datei wp-config.php manuell erstellen und den nachfolgenden Text dort einfügen.

<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es
 * auf der {@link http://codex.wordpress.org/Editing_wp-config.php wp-config.php editieren}
 * Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt,
 * wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von
 * wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define( 'DB_NAME', 'WebshopDB' );

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define( 'DB_USER', 'omvadmin' );

/** Ersetze password_here mit deinem MySQL-Passwort */
define( 'DB_PASSWORD', 'gibbiX12345' );

/** Ersetze localhost mit der MySQL-Serveradresse */
define( 'DB_HOST', 'localhost' );

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define( 'DB_CHARSET', 'utf8mb4' );

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase.
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern,
 * alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define( 'AUTH_KEY',         'TA5rbV|6.!v.OhwWol<YX%^0d{X;2aR&4c#h5$%@Hu;L9D1Z/$T6]SwZyWEH*WC}' );
define( 'SECURE_AUTH_KEY',  '$d|u%@QxFT$KIvqQ9.L5e<@Ewzf!AeAGPx^A(fLFus0*`L0`Z1LxqZ&o>vewXR$n' );
define( 'LOGGED_IN_KEY',    'oMt/KY*?`!FUepBX .jfiVj/yDc Q^Nru0(c_*(U%@[S[2+F$]+{DL5IK }NZX$&' );
define( 'NONCE_KEY',        '+YUoBd#:(RZxPeT]cUKZiU!brW>e%V8[uU0$#6F;lyV36>|fJklnN:F3RSo[hFL9' );
define( 'AUTH_SALT',        '[m msUOJLqS(M>=dU)BL:ioWiB>Ca^=&Bcay[z4([%T:+|Eu~}Zita-lE.&A^3)R' );
define( 'SECURE_AUTH_SALT', 'V(i]bxx}cd}ZP0XD^@X6Tz^h J$3Vs5]ceXre,@47LEX^K6{9&_$(Z5S5j8@yX[T' );
define( 'LOGGED_IN_SALT',   '`S/7|BkcZ.M$s|1 )BsO@pIbC.rU.?g0Av70i]90 v*n/}DXs~,o%VSwH`8^5iSU' );
define( 'NONCE_SALT',       'STpJV~FT!4*SJQj+>lar1/xsQH@P#|>%iA0Z=N:f?FO`kmE8Im8QH3L>{JEu#syn' );

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

Nachdem Sie das erledigt haben, klicken Sie auf „Installation durchführen“.

Installation durchführen
