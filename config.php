<?php

/**
 * MySQL settings
 */
define('YOURLS_DB_USER', getenv('YOURLS_DB_USER'));
define('YOURLS_DB_PASS', getenv('YOURLS_DB_PASS'));
define('YOURLS_DB_NAME', getenv('YOURLS_DB_NAME') ?: 'yourls');
define('YOURLS_DB_HOST', getenv('YOURLS_DB_HOST') ?: 'localhost');
define('YOURLS_DB_PREFIX', getenv('YOURLS_DB_PREFIX') ?: 'yourls_');

/**
 * YOURLS installation URL. All lowercase and with no trailing slash. If you
 * define it to "http://sho.rt", don't use "http://www.sho.rt" in your browser
 * (and vice-versa).
 */
define('YOURLS_SITE', getenv('YOURLS_SITE'));

/** Server timezone GMT offset */
define('YOURLS_HOURS_OFFSET', getenv('YOURLS_HOURS_OFFSET') ?: 0);

/**
 * YOURLS language. Change this setting to use a translation file for your
 * language, instead of the default English. That translation file (a .mo
 * file) must be installed in the user/language directory. See
 * http://yourls.org/translations for more information.
 */
define('YOURLS_LANG', getenv('YOURLS_LANG'));

/** Don't require unique shotlinks. */
define('YOURLS_UNIQUE_URLS', false);

/**
 * A random secret hash used to encrypt cookies. You don't have to remember
 * it, make it long and complicated. Hint: copy from http://yourls.org/cookie
 */
define('YOURLS_COOKIEKEY', getenv('YOURLS_COOKIEKEY') ?: 'something random');

/** Debug mode */
define('YOURLS_DEBUG', getenv('YOURLS_DEBUG') === 'true');

/**
 * URL shortening method
 *
 *   36: generates all lowercase keywords (ie: 13jkm)
 *   62: generates mixed case keywords (ie: 13jKm or 13JKm)
 *
 * Stick to one setting. It's best not to change after you've started creating
 * links.
 */
define('YOURLS_URL_CONVERT', getenv('YOURLS_URL_CONVERT') ?: 32);

/** Usernames and passwords of users allowed to access the admin site. */
define('YOURLS_PRIVATE', true);
$yourls_user_passwords = [];

foreach (explode(',', getenv('YOURLS_USERS')) as $creds) {
  list($name, $pass) = explode(':', $creds);
  $yourls_user_passwords[$name] = $pass;
}

/** Living on the edge. Don't encrypt passwords. */
define('YOURLS_NO_HASH_PASSWORD', true);

/**
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = [];
