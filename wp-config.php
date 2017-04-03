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
define('AUTH_KEY',         'ue]#fL_y>!]^qE/yMOjs/EC9$MZ/*s_p9w;uHY$aq].r*]33x2pT{wfhwfM[.89A');
define('SECURE_AUTH_KEY',  '}.l5Q;Z<Sd{=1n+Mw&Z5qR_J4#<Fk]ozdAtbVx-# 8M~8D<O.@S{M+4a+1WE1&H(');
define('LOGGED_IN_KEY',    '/6zVn:#*EYLX8X>y?`Jk>3WlnIX$CoZlz4;NL^j#eo0W$6tbsYNvM#CW<=yyFK0F');
define('NONCE_KEY',        'I9{-oiT~FL:uUuU_5HMVU|lAb]<)K%N=vrpfUSimz!t(N7- {g8e/{9IgXr%0GM8');
define('AUTH_SALT',        'z!rPnr(?Jq)XP%oae}S=_{tg,UAH[i }bv/(9`s7i4>ELsNOop;j+S0GPf~:js4@');
define('SECURE_AUTH_SALT', '~xK.@-dpqfFT/:HcorAY3kikxk>1m0iD*cE[oQ-eOv?VjGJ>|x@3oKi%2H0Q0+rf');
define('LOGGED_IN_SALT',   'lN(^f.6sS{Hb{5$^;xbV~ZQKQp/b,c2(SYlS`cSu`Nxn}~e1N4{0QJ/yp84(!_A,');
define('NONCE_SALT',       'W.R$=xFt?J*=^s uSDI>e?XF@h=YU}HQ#ACPAUQ}tv@.T(=*@oOr[XXV.iDxR8k(');
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