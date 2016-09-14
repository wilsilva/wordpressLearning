<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'mydatabase_wp');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4_(1.+XBCS+bqCFF)V{pM:K6KQE<4xy#Ww=7C:!6<T~ [Ld/+8vp.M+-/uhD<BK:');
define('SECURE_AUTH_KEY',  'sW%RvZFXU<ONwJWY{?_L8g<CaNF-y!lbw:%K= viRLe1bOhJePs`>va]8(Qs8K c');
define('LOGGED_IN_KEY',    'Xod0p)nFcuRs|km?oK0,sNGDj1&4Q29t[I._u{fpr&$?S*3>JTgfka<LqvImCEEe');
define('NONCE_KEY',        'HT-r)&Hg@c[dK}{Z6yViMDdqWL}VyP!9<er n912u$FlwUZ-$uxbCaZ*fr8g.~9<');
define('AUTH_SALT',        '4w:$8L]; Rn3Epc=j/I(pk5A4~YQRIwsiYD]MV[E!~II~4+gHy(GU[Zm1;as/m]V');
define('SECURE_AUTH_SALT', '#8Q.)n)X| lJ}x=xyzr#<8s0SE)!i;|y@i+;Mr8/CUw)}s< C124Dk=W2}[J%KA&');
define('LOGGED_IN_SALT',   '>C$2W+&sgl1e_-(UB]M::q:<V`^TOUTX>5@JWa!#JEha%Hal~:Lx!eI?ZF%y`2JT');
define('NONCE_SALT',       'A:bR)mSGeO%xn3%=/a3nxaK-J4iTgx[?G{Qnx5oi+*_.sA|py*2YmfF4(v?>K:K%');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
