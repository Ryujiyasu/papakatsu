<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'yasaibus2018' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']<_8|8]w;`6.FkW3-La=X^AJdTOnV3Fqz5RyE:PTlzAp~G+DrK|fi9~ykDe~IqnP' );
define( 'SECURE_AUTH_KEY',  'lG JM&:$W- os^Xb 74>7f_7^Ef]V_+.Uf#shFe?]5fq!4Y@}W W9~irUoDSuyiM' );
define( 'LOGGED_IN_KEY',    '8Rh8|I5A!qw)O;. f}>EguD;md/yGg{SZll/H?PM?HIBh.E n$fOeLYH~2kWB$cz' );
define( 'NONCE_KEY',        'UZOI?w$icr@exjx6 =R/q@,hQV<L*|YP]pQ?a/hyf18ORlRX3fK,bowINJy5L7;5' );
define( 'AUTH_SALT',        '@RAcrW#-MA>Js}+*$o[8?hn#q0~wiD+<3R%Qq`g*6J3DV|@}!&8UG`io(H8}OR0L' );
define( 'SECURE_AUTH_SALT', 'NDgd|]y]_rY>%xo%v.ETwXpA ivWD_uyQO?>GDa=@[5+S>6`]r3g4nXDa$kUfpR+' );
define( 'LOGGED_IN_SALT',   '>C[wAO1f/?71:k5-Q1A0DM`~!_gG+3,NOprKvXd5U[i~jf:x5+Dp9N Rb+w%iZlr' );
define( 'NONCE_SALT',       '}SzzsaY9G$NBi]o|fQiRS|/1b$$7]|Sfg5S,_VW<XhR<opi)uS#.B4]yCz5G{WY~' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
