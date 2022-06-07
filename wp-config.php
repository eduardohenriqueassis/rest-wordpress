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
define( 'DB_NAME', 'origamid' );

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
define( 'AUTH_KEY',         'G%3]ww,F7NzOBV&0qTzzRxWInayghv~0F|?R$4>nAM8{bVe*^SiUycX@J&MYoMm.' );
define( 'SECURE_AUTH_KEY',  'J8wq@XGnuQC]I1 ~H[dv1oR>{aFQ!wdC+Y9KeP/xf=8zh4H5Ay:SDemmx8hF9&<)' );
define( 'LOGGED_IN_KEY',    'vaA(_9t:UWFFts>9%[p?E+6yQrykwg,EC{,FQCtcM/nLXKS`5Q9SMEg=8F?us-!t' );
define( 'NONCE_KEY',        'i6HfS^*I?Q]4 `86idkrD!~Sw{5h@Q8gO$Vo!t=wgq{(u1H|7AV;<uI)V5pBG5z1' );
define( 'AUTH_SALT',        'ElSYk5HN{]d(F!)coKXk+gc*KAp.gMvYckM/vEN=G?X:k9pN0{e!6.lUS>e(x!TD' );
define( 'SECURE_AUTH_SALT', '<lN^W#N-xDB<nw5!.Aa{4/qF=Up^~082|Ev=Y9B:@R3PM9c=.jN(MX3W:V=gvnf0' );
define( 'LOGGED_IN_SALT',   '!{%Ic^24M_.NB< A>XJfN2J0hq#H-*br#Sr/oo/{sw 1n]oF]_E<+haBqpntR$H6' );
define( 'NONCE_SALT',       'rqb2bz9aqGiAqOtQk(twxP>czo fb*3PgcC7.z<eu2xlq:x[]/oCge_RO@:dCeaO' );

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
