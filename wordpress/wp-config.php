<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wp_test' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cm9L^~hUm@?BO~7>zQ:4Mo 9@$/U]fd{3B~So43y9#UPBBmdfGMDIFWCi%Gg-+*Z' );
define( 'SECURE_AUTH_KEY',  '-M/y1t!ZHZ=WYGvDlh;jMilX2(O!W^vWTteYS_Ro)Dgf<PNaRf2x9.fbAg!PtT9T' );
define( 'LOGGED_IN_KEY',    '#C~8~^yROSazGSvFV#n6XL#hzE@o~P1t57F|5$mZB3m(l&;(M{728W[]7:0e?~*t' );
define( 'NONCE_KEY',        'nY]JDGWk*%e>[OvaE7V.5xSnLa j~&17:Q2!8z-{P|U e8?10,X|6t%;7`f.xKGi' );
define( 'AUTH_SALT',        's_l:deI]iy#9NEMKPyGSj;C*#zw qg!LbljF%Xpn.xaHk&]@H$TdV@H]4PS.2Z::' );
define( 'SECURE_AUTH_SALT', '&AjMKOY:M]X,sn?G0Gy<TB xqr3[tnAqY-@f14BOgzm)2W4a<GtXY6W8Ccps.>QO' );
define( 'LOGGED_IN_SALT',   't%nkO24E+<b| zmZD,sOmMImu3|~h^~T/)XSgtHfwTnc{/5/@Eo8)U z>W#wgk=:' );
define( 'NONCE_SALT',       'a>`VuZVNzU_F,khAO<1k>kTO/2MmL;#=v?!p_C68RjB:Z:oUg4-%O8-Q4:AZb}1=' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
