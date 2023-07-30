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
define( 'DB_NAME', 'planty' );

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
define( 'AUTH_KEY',         'NdP4m%:IvIg*ry|jFhQvz, 8yhBMNs-z}m1l^3aC1s{1)B:&~zO^3E;F-+Y7,&K/' );
define( 'SECURE_AUTH_KEY',  'f]1l OBX-,w^JC[cc8HIrPEK<^4H3!* 2|R5q~Ev0l^A)sV!e-]s[f%9nZU)/l,i' );
define( 'LOGGED_IN_KEY',    '3r8)i5@+_jqMn_iO+3/y)fNEFQG-WZgnEJc/o7MNow,>c8RLc4T,BeG?0?uCk]P<' );
define( 'NONCE_KEY',        'MAxHXzFrp9]@}|K+)O0fHT6Xqx@OL<SR>;?^Xz%=qFkGc.4+AU<X9:{uLcGc?nxs' );
define( 'AUTH_SALT',        'ccU7f*Pcp[RoH4P{oal7]sy,=HpDZ6AfUw/5;!9lfZ9<~y8~yEg>VnPdR?CKhK&/' );
define( 'SECURE_AUTH_SALT', '|EZBuX7vNu7#g4:KszS`~8RS=8=!qrVyv8&;v[hF?P}XF!AYrGB0CEaM<(y6c`w*' );
define( 'LOGGED_IN_SALT',   'R~VTmkX9`s,ieY`FRI9GHc-sr.;%.V1)twD~N8}[v`iF^<}}`[wPY(Ar+]UG>L$D' );
define( 'NONCE_SALT',       'LQAdBj1VEw0%a-zt7{6!wRTdEf;B2%lR]D{l%L wdv_9M=,8=hjkiBmJ8]+O4pZ=' );
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
