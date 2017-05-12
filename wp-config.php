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
define('DB_NAME', 'echopixels');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'wEsL(yeiDu*/L6gL7KS6@[H|Ax6Bno5vT4`lAZ|XA!C;6rI s *erI:9ZuGPKK<a');
define('SECURE_AUTH_KEY',  'HtfC2-]a]~]*%@0[<2A~0mFT_GJOU,o1D_c da>p&u.}xHVj:U/&>L>Uw(QA,Hdp');
define('LOGGED_IN_KEY',    'PeRCe[$P.w~7[w_-,KggZWD[qds&_ksszss= zlYgW*.O^Y-IT)c$3T.(Oh,s`<2');
define('NONCE_KEY',        '(Rim2N{+s%ap}*W!}Fm@ %_b#k2gVLd|k[J/5%EVohV#ng`[i_R,V0eX?T6Ti}j=');
define('AUTH_SALT',        'IGZt@im{X0X(a8o7B5KmAD]a<.ooc5W|Zi*D*$nx8K2df|/pg/XJFRq$wxLVmr1Z');
define('SECURE_AUTH_SALT', '3|`JW&dy)T0sLxf`3$(391)=_g4kCr?mA*3#qg+[-oKIFR4@|<08~oKbv]j@j/+_');
define('LOGGED_IN_SALT',   'P;H#V%2<fyR?,asTzt=5`jQcu/mE7~pCDH{2K0-f d5<lq}A5j*@U=lyM7e!2P0x');
define('NONCE_SALT',       'gHFz:A$qP%C._Cg-<}v#6xMUMRQ_lN^iQB>GUQZ0%i@T3(-s[e$3zXa^}vMqq=s)');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ep_';

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