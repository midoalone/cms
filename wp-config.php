<?php // Modified for Arabic by Rasheed Bydousi

/** إعدادات برنامج ووردبريس المعرب **/

// ** إعدادات قاعدة البيانات - ينمكنك الحصول على هذه المعلومات من مستضيفك ** //
/** اسم قاعدة بيانات ووردبريس */
define('DB_NAME', 'cms');

/** اسم المستخدم لقاعدة البيانات */
define('DB_USER', 'root');

/** كلمة المرور لقاعدة البيانات */
define('DB_PASSWORD', '');

/** عنوان خادم قاعدة البيانات */
define('DB_HOST', 'localhost');

/** ترميز قاعدة البيانات */
define('DB_CHARSET', 'utf8');

/** مقارنات قاعدة الببيانات (Collation). 
* إذا كنت غير متأكّد أتركها فارغة */
define('DB_COLLATE', '');

/**#@+
 * مفاتيح الأمان.
 * استخدم الرابط التالي لتوليد المفتايح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 * @منذ 2.6.0
 */
define('AUTH_KEY',         '-3GJE^xpAX*`#o6?L&m[*SFH|:~]!i+@UheB|U*zo4Ncgfgme7}-&ZsE#9pWZ+8H');
define('SECURE_AUTH_KEY',  'xPP+N]?MeDTu=wzy6,oINOZk;vtiz9k6V~6BE9LF+tR}.SV]CsCCk0*s$`  u6 S');
define('LOGGED_IN_KEY',    '+vohY)ppQV#eO4qED?HMGms7&wv7>u~WyrlPV.+$|oN8<ZGpqfK9p^/9-(-#SqPD');
define('NONCE_KEY',        'EA.E#8eCjl/aJT dTP~@8UFG86h`z$([|n7Crv#5+h#d92X8?fH|}moqoHzA8op;');
define('AUTH_SALT',        ',,`?cFn9]PeNe/U|x_f 5yQ&]|-s`b{_]GrjARu1C00|EbZR@Ua@eP3,`+gTUoN]');
define('SECURE_AUTH_SALT', '/$H!tc.e7./YA!@h*]AOu[g>T]!5B-RV-k/==5]eyN$W;gFK;_{p{E$|(0?X-X%t');
define('LOGGED_IN_SALT',   ';mmtMax?T.06;-nT{s|HPVVOS|aN*kv{:_v?jJKPhFVLQTL0JTNDa~kb%=qD);hk');
define('NONCE_SALT',       'Mc^sj4&RZ8:#Zl7aT2vX*T-z*Qu6|fxfINA-T_GHBIGm$(#RWMmXjlWq9d-!m GY');


/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 * تستطيع تركيب أكثر من مدونة على نفس قاعدة البيانات إذا أعطيت لكل قاعدة بادئة جداول مختلفة
 * استخدم فقط حروف, أرقام وخطوط سفلية!
 */
$table_prefix  = 'wp_';

/**
 * اللغة الافتراضية المستخدمة في هذه النسخة هي العربية
 * إذا أردت أن تكون لوحة التحكم في مدونتك بالانجليزية قم بحذف الحرفين أدناه وهي الحروف ar
 */
define('WPLANG', 'ar');

/**
 * للمطورين: نظام تشخيص الأخطاء
 * قم بتغيير flase إلى true لتمكين عرض الملاحظات أثناء التطوير
 */
define('WP_DEBUG', false);

/* هذا هو المطلوب! توقف عن التعديل. نتمنى لك التوفيق في موقعك! */

/** المسار المطلق لمجلد ووردبريس. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
