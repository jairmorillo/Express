<?php
/**
 * Core Administration API
 *
 * @package WordPress
 * @subpackage Administration
 * @since 2.3.0
 */

if ( ! defined('WP_ADMIN') ) {
	/*
	 * This file is being included from a file other than wp-admin/admin.php, so
	 * some setup was skipped. Make sure the admin message catalog is loaded since
	 * load_default_textdomain() will not have done so in this context.
	 */
	load_textdomain( 'default', WP_LANG_DIR . '/admin-' . get_locale() . '.mo' );
}

/** WordPress Administration Hooks */
require_once(ABSPATH . 'manager/includes/admin-filters.php');

/** WordPress Bookmark Administration API */
require_once(ABSPATH . 'manager/includes/bookmark.php');

/** WordPress Comment Administration API */
require_once(ABSPATH . 'manager/includes/comment.php');

/** WordPress Administration File API */
require_once(ABSPATH . 'manager/includes/file.php');

/** WordPress Image Administration API */
require_once(ABSPATH . 'manager/includes/image.php');

/** WordPress Media Administration API */
require_once(ABSPATH . 'manager/includes/media.php');

/** WordPress Import Administration API */
require_once(ABSPATH . 'manager/includes/import.php');

/** WordPress Misc Administration API */
require_once(ABSPATH . 'manager/includes/misc.php');

/** WordPress Options Administration API */
require_once(ABSPATH . 'manager/includes/options.php');

/** WordPress Plugin Administration API */
require_once(ABSPATH . 'manager/includes/plugin.php');

/** WordPress Post Administration API */
require_once(ABSPATH . 'manager/includes/post.php');

/** WordPress Administration Screen API */
require_once(ABSPATH . 'manager/includes/class-wp-screen.php');
require_once(ABSPATH . 'manager/includes/screen.php');

/** WordPress Taxonomy Administration API */
require_once(ABSPATH . 'manager/includes/taxonomy.php');

/** WordPress Template Administration API */
require_once(ABSPATH . 'manager/includes/template.php');

/** WordPress List Table Administration API and base class */
require_once(ABSPATH . 'manager/includes/class-wp-list-table.php');
require_once(ABSPATH . 'manager/includes/class-wp-list-table-compat.php');
require_once(ABSPATH . 'manager/includes/list-table.php');

/** WordPress Theme Administration API */
require_once(ABSPATH . 'manager/includes/theme.php');

/** WordPress User Administration API */
require_once(ABSPATH . 'manager/includes/user.php');

/** WordPress Site Icon API */
require_once(ABSPATH . 'manager/includes/class-wp-site-icon.php');

/** WordPress Update Administration API */
require_once(ABSPATH . 'manager/includes/update.php');

/** WordPress Deprecated Administration API */
require_once(ABSPATH . 'manager/includes/deprecated.php');

/** WordPress Multisite support API */
if ( is_multisite() ) {
	require_once(ABSPATH . 'manager/includes/ms-admin-filters.php');
	require_once(ABSPATH . 'manager/includes/ms.php');
	require_once(ABSPATH . 'manager/includes/ms-deprecated.php');
}
