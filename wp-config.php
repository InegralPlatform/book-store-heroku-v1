<?php
// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'ijtzvp22fooi09iq' );
/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'jfr5a1p6jp5cw2iv' );
/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', 'bq5q3ov8hqrcsn3w' );
/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'izm96dhhnwr2ieg0.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );
/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );
/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );
/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PGQV;~%7@gHCOUY4sZ6Ut/K~%DZ0>@`xh [^9~c[(C`JGPh;Ukoy=ZB?|zlugr^Q' );
define( 'SECURE_AUTH_KEY',  'IlLJH|9Bef>MGmwe$Qb0J|&:yFJYNHvkBl^Ig{7>4Q>vGIoS?^l1LU`6r^<@h*}r' );
define( 'LOGGED_IN_KEY',    '[Y*D|e? Qf^v[>fds+yl#l|-UgF.c:BwaB?3XPiQ{kU1naXToc2HR5vN/>wXjFH1' );
define( 'NONCE_KEY',        'u-oeYIo^sy_Sa9vFQ:,I,XSY8K8wdG0)).t#O.H;n-cnEooRbDkW%[fy(@KwDU~&' );
define( 'AUTH_SALT',        'R#g2[QF9X.7v0f-_HR mOL={c;e=_Y2[gU>w>$9+n{g]M)2B<IoYA7NXY1yx%/Ef' );
define( 'SECURE_AUTH_SALT', '4N;PIW|RQuA~d&Q~mJDgtVG),3M78_?S,: yhHP.}]etJWM:V6F^~H>P_{5B5`uK' );
define( 'LOGGED_IN_SALT',   'Yu,JFp?nB=>F{M+4XzZgiCN@A]t*vNp|?qk]du=Vg0U*t0;i&qU{S,LpOCQrP6?G' );
define( 'NONCE_SALT',       'J4ikqLdL|27lZ,@c,gJc}3oS.B|Ld3;?Q c6+R0XC8>F6?MG5uZB&sD*3] @$c.h' );
/**#@-*/
/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';
/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */
/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
