<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'philinbiomed');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'b24/sfi+C+_R,p+FqNwSL:a2!i`-/qK)rYMeqFq$wsCMrU?U6)eNxPsL#G|v_]<{');
define('SECURE_AUTH_KEY',  ' m7pq}x_jrXd_/AS# r97z>a6@gwK#-Ur}&yl&TGKUH|NpjmkYV=R>)hyiU$XF-_');
define('LOGGED_IN_KEY',    'EpKhP?8Q6oz% NI/QR}ITX){?2[|yG3:X|IBI*ltaYEG0{fe&hTe*%X%PppitWVk');
define('NONCE_KEY',        'gCR_9>}&v?+d;[o XRzS~<<)4YFGKz_)T)};*9EAT4LeDp&W:bA@w.ZDP9N)I2jN');
define('AUTH_SALT',        'h+Yq]pyq5=IlLZ-L}PV$ H/SvT<ORl+@vPME0,83GfZW=w p03d4s[4|oE{)RCoV');
define('SECURE_AUTH_SALT', 'as2PYEXBT1%@rR,VUq|8fvryet6+YF68MHf~|- 6=VRzVuz(yJ~o8lKB24YRwS`;');
define('LOGGED_IN_SALT',   'P~s}Zr1u3l*!0E5<=Dp?BGE5Qt!&s)[BQiga:wSJIsoBbg-ga8-T2gh8bKJ}vv0t');
define('NONCE_SALT',       'guXK`U<XCl=L}D/k)?gNM2`<1bBkU<wAU!Z}!Ej|4 3%7}/JIkV#2S>r=[8V~8V}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');