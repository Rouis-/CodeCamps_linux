<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'wordopen');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'next');

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
define('AUTH_KEY',         'V:^Q4D jw0Mz..K8=.{UqFj.o+UOIE*SUl_W^M-y_5y[O|&>7}MXxHb7ntQQf7XK');
define('SECURE_AUTH_KEY',  '|J/=LVkzH-2gYd$A8FbGmbM=Q][FqV|#Jf|vX_vGS4pnJ`6MtBd7U{-Ld8?5u~(A');
define('LOGGED_IN_KEY',    'pNl`2CYJQQrStDUWT#S2`]Vi5%CcjvC]S)~bIR,pT<]D!miEN+zsEBee||6B2_NE');
define('NONCE_KEY',        '+8Pq{Ut<b|9@c?zV2hSg_=P{>A{}?B),*p3+:6fN]+8V`._i9m+tmv%srv1&rDE~');
define('AUTH_SALT',        '2q`NI*p no@g;a,Bpfx%6p-FC(0j;~NVZN_u7g-iK(-V;pq<,X$l,rs|%U^Dj,_@');
define('SECURE_AUTH_SALT', '0`:gurz+dZ1#g m`1]eF%Iijx?nZE$bf.b7+TCEm-(01AwB=KL=up+;KTJ4W{U%t');
define('LOGGED_IN_SALT',   '0?oite*(f1`!]3bUC 5ikI3;:9no:[O5IXq#ByC]9;@9!7SgP`,N%7{j;3wNM8G`');
define('NONCE_SALT',       'm|}e-DyZWCV>-8)7A`>h:{N;SE,Km>-~mP [!3.xOG$ptA`sXgYr+e*95!~k!$o@');
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