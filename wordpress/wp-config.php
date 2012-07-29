<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!?]a?g<n0^7$YCPgI:Ab[P Y`1K/VKH^ UE{O~ZGR9q31;G|fIp]xG9J>#I684T*');
define('SECURE_AUTH_KEY',  '%_sn4;b`ED$WFK|l~:&+Er 9c0Q|E{6Bf wT_P|q|Qtu~KhZ)F#|`9-:Z`yb[9wy');
define('LOGGED_IN_KEY',    'QRX(~jyAgY)l%}b<O8`TVYn}2fC[w>T?Q1 O@#!A+(`>-Hrm{z}5.)-$6oWRWXe4');
define('NONCE_KEY',        '_=ZzTGsW<$gS(7PL{lV+WU^#[4H/J,=jq:=ghbwpXa:XwR z8d*,N8,mvrqI:dD;');
define('AUTH_SALT',        'vn>&h>Ql{F?,[3~@lrO+QE{!Z72ytHA(}@ 5K}ji-GcR;BBX?)yNjDyrRRt$A-xr');
define('SECURE_AUTH_SALT', 'DJ1AnzwZdJ+(Gu1a:@-0a}>cwx19sZ;+z^$0$%nrRDPY`F>i(eAf51e?e3H@zkl?');
define('LOGGED_IN_SALT',   'wci7Od%<C`q8t&bm;~L+Zu4j0i(X9-0r^xls6;D&-XadpCD,My+-8WW5ub5mw}r+');
define('NONCE_SALT',       'D3#KqnT7wdE29fw? mEp^;pSsR(HH>#_QjBm66Hfclz%}X*p+R+_`>SLJ}V`!6^[');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');