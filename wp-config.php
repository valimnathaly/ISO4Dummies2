<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_iso4dummies' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'lRJ7ZlWqHWH$vO2D21NNyPGR+g7okfJ(HvTNE#S}Uk/yUvCyT,1N=l8X,rKJ^^<<' );
define( 'SECURE_AUTH_KEY',  'i62[YqHwXhw /o56@c$y,{W_)3+^&%2z,kqNiEA g. T(dNlOp*kxIFk%;P|3tN+' );
define( 'LOGGED_IN_KEY',    '<zW^KM.2-wxcrk[f-,c-,HJSXwVZaC @cc+T&cD30oILmI2@a/AF4@)5!2!Tl 7Y' );
define( 'NONCE_KEY',        '[TqwHah46g5-Hhek*Km&5hx[Ru0J^{71iLa9r&mM&c/DdEcRVbwDGIyf8qKB w{E' );
define( 'AUTH_SALT',        'PXS?tt HRJ.eN,EwpO?V>_SpvPHybA-V,lbA}I++oDfU5CN& =JX,`EY9Jfy?l:^' );
define( 'SECURE_AUTH_SALT', '2fp-u Rp?KJ)Ne!I.}.c.KA0A*@`/ZgWN!|!yOwhYc&hi ovOEk*1DL1C.sOT?Zk' );
define( 'LOGGED_IN_SALT',   'nT?RnHEc+7]b(s-R%-N`?LHHldCvx@q`J_^nG<,X`]8QC<bjs>:.$`aA7|qf{LxU' );
define( 'NONCE_SALT',       'h|1e*??wN@#Ku<x={AP{h3 obhkagI-Q2E[<k^2@K( t*s=no#)v4ZTq?>l.]:ll' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
