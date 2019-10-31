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
define( 'DB_NAME', 'wp5' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Q(>8=R&.W{inuR8+bJ`y{T-Q0e]O^T7^yR(-20}/Bn?P9)?-%{J68p5|??Cv*[l[' );
define( 'SECURE_AUTH_KEY',  '#@2&DhuGv>zTG8L.Au52s#np??9Z^-B:Hiorm$5+DjquM/Ek<fj1^lIN3uYLeuHa' );
define( 'LOGGED_IN_KEY',    'POs6wFeAf0D-f& %Rs=_lh5t=Wa#.rgOrE&Kel(#GXE_^+e|e>B6X-$:Tlc703`i' );
define( 'NONCE_KEY',        '6({l`[DN%*y*oPk2*3bw1zISr3@M=(F*s4w</ahp~]AbGY,B>6@`h^S_&itYR-EL' );
define( 'AUTH_SALT',        '.o2VxbdFCQifF`bEX`Cj5hVEYH{:[=nWb<uU{Y7WnU/dO.w8^yj~!u8%lk$A8t>k' );
define( 'SECURE_AUTH_SALT', ':ehS^t>z<4HZbq.lN=$wham/wk{<hs%J2xY484vCO=Y<X@u^bgg8X;yZRFYbd)0s' );
define( 'LOGGED_IN_SALT',   ' 81c|qOY3O[rk{n{;;wzjHt0!M02/t1`IGSdA29Na^cTl{=+`*jl2pQE_iXo#S&@' );
define( 'NONCE_SALT',       'Y#d8Cyq$&$XAy3$l[yuR={5H1aoh?+Yg2$2nuo&6VY:#$gZ}hr5kd5@S#I<_4XHT' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp5_';

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
