<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cities' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'pM$;3Irn5[<8#XXq%zi}k{|Mj`w`~5h=4fJGK<(OQ*_2~sDNadc`-/V:WA(vyV7l' );
define( 'SECURE_AUTH_KEY',  'B#vpbRC.c^Ml(|DkRD1&`qcyhV_=zE+f+O55K)Fl;:$_1U9p-r YspZ6|H8OAW1U' );
define( 'LOGGED_IN_KEY',    'jDAKNBm0e[QA;Y2uv:F1e.(&-<_bCx31Rcf *Le=x(Ms5uYmK?.8FK<Ov,XAVf z' );
define( 'NONCE_KEY',        'f&w]5.!+ops8<Swq9Q2ZMf%s:dgCXEh_|zAJk0*8w`Cf3M5Xqp#S]>(6:ZTyqWpc' );
define( 'AUTH_SALT',        'ma6 ;We#A,K:5_hC`~Cb#BQktTv*>MPB9/}RQ- Rii$aX=q:&7UYYSn!t^@F@1{A' );
define( 'SECURE_AUTH_SALT', 'S!{=P-~Csfxq37VxGbD8vTMyBN9/?jU7m/F+y1x$1NoDy#}$M <Y?L[1^PUR@?<*' );
define( 'LOGGED_IN_SALT',   'Nq=RyeL<iekEdtm1+C|GoZ5KHZrijf7+uP=P}ji_=e{|O-F:8Ig~NhA(LsonuQ$9' );
define( 'NONCE_SALT',       ' HI0U2}Q], JrQ!(jC@z-]g[qk;U#d69,(J%byT!W`=Td`(Cd:tuX(ei/WXW6oH$' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
