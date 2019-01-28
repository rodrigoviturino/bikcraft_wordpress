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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpdb_bikcraft');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'bikcraft');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'admin');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lUlAX#a:!.+qLO8W87SKAmO[b-*B^$}(iZ|zb)t` 0+TjVDPlLcCO]fWh.%tUlgu');
define('SECURE_AUTH_KEY',  's<]`F#v7{I6mEpAo/TXTC;T3#Y]K0<3uigS6@z*XES~$ngYDq U4}Bg>_AmQu#aC');
define('LOGGED_IN_KEY',    '1l_zE:p)Ve>CPpUgKx+noq&#ifMxWI zF?+hP<LKW1}YMG$0uE_>RXHx_k(B{c G');
define('NONCE_KEY',        'RIu+G5Gh4lx^`)=J?_+nG1UF1JC7lTOH,v_8i7_d7[,U3ucWqly1$M2U@T$EniM!');
define('AUTH_SALT',        'I:.3m#IQ6l5~G?m%4Y$W)H4+m>(b?p!ih>?QSoc6TummB5S~i4|099]6Vuzl-JGN');
define('SECURE_AUTH_SALT', 'rd-6zLg,G2;kB[#Bg>k9$3m0C_8uH:f9MHe~Nn8+SR-Z#kmBpzH9$hzi~rE3/8f)');
define('LOGGED_IN_SALT',   '>r LR}JrW>C7%&8^VeYvd9-L.{}RL)GNa}/}.K!*;vOa3NVl-dhQM]|27FH2.+7!');
define('NONCE_SALT',       'T+ksc,uH`(^^n]ad}u;#$GJ~C=!i2`7bb){&Kg;jS,I$`{fYLWV,&o>I|59h@hR8');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
