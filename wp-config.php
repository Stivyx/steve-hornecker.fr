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
define('DB_NAME', 'portfolio-steve');

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
define('AUTH_KEY',         'H.9{t(q_%61oy_lmU*~TBIMn-UiiKmqVOXS}L!;(T_o$T&sdRkGBuWk+[CR=f3`3');
define('SECURE_AUTH_KEY',  '#98gNOI};:m><RQ4a3g<F=Q8A[,_iU;x)0Z7@0[G^9$H>gN~t>(vmKIU8rLya#=L');
define('LOGGED_IN_KEY',    'GK)A~GNjhdGy>l)F%),i*0*MrJjc2rE0r,N]oeX-suTH] %6XU=HC|~)D2#}m~Is');
define('NONCE_KEY',        'xJ20i6F^~-38o^{?r]6JA(TaQwiuT|ES(u*V6C;ZYP40T) p3q8e<M+{G:.i?kmM');
define('AUTH_SALT',        'u:D*mO0vIGf9.EvB@.8cg{GA^3*):UP*uY~&,nK]2.N%d&zAc:(OsNj,LB Y5Ggc');
define('SECURE_AUTH_SALT', '{A)xS3:F}CT/j@$AIa@yfs#Xa`rb#e&W5{NuN3#jCJf5Z#8tlkUHx.<V`A8[dSek');
define('LOGGED_IN_SALT',   'Or]<_Y#+oF9?r a@s{/z&HtSy<upm8~3#DKXS3bv-ELRo3j:~^|5FIJ)$IZbajXf');
define('NONCE_SALT',       ',.:EPqLxOY_0036+[@-QjWv>Z#H0(<Z`t%,~NK-&A]I<[XC4,% DR2^Xv@oq0tAb');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_portfolio_steve_2k17';

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