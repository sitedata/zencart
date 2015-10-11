<?php
/**
 * Default autoloader namespace configuration
 *
 * @package initSystem
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version  $Id: New in v1.6.0 $
 */
define('NAMESPACE_LISTINGBOX', 'ZenCart\ListingBox');
define('NAMESPACE_PAGINATOR', 'ZenCart\Paginator');
define('NAMESPACE_QUERYBUILDER', 'ZenCart\QueryBuilder');
define('NAMESPACE_REQUEST', 'ZenCart\Request');
define('NAMESPACE_DASHBOARDWIDGETS', 'ZenCart\DashboardWidget');
define('NAMESPACE_CONTROLLERS', 'ZenCart\Controllers');
define('NAMESPACE_SERVICES', 'ZenCart\Services');
define('NAMESPACE_AJAXDISPATCH', 'ZenCart\AjaxDispatch');
define('NAMESPACE_LEAD', 'ZenCart\Lead');
define('NAMESPACE_VIEW', 'ZenCart\View');

define('URL_SERVICES', 'zencart/Services/src/');
define('URL_CONTROLLERS', 'zencart/Controllers/src/');
define('URL_AJAXDISPATCH', 'zencart/AjaxDispatch/src/');
define('URL_DASHBOARDWIDGETS', 'zencart/DashboardWidget/src/');
define('URL_LISTINGBOX', 'zencart/listingBox/src/');
define('URL_PAGINATOR', 'zencart/Paginator/src/');
define('URL_QUERYBUILDER', 'zencart/QueryBuilder/src/');
define('URL_REQUEST', 'zencart/Request/src/');
define('URL_LEAD', 'zencart/Lead/src/');
define('URL_VIEW', 'zencart/View/src/');

/**
 * An array of namespace => basedir configurations
 */
return array(
    '\Aura\Web' => DIR_CATALOG_LIBRARY . 'aura/web/src',
    NAMESPACE_SERVICES => DIR_CATALOG_LIBRARY . URL_SERVICES,
    NAMESPACE_CONTROLLERS => DIR_CATALOG_LIBRARY . URL_CONTROLLERS,
    NAMESPACE_AJAXDISPATCH => DIR_CATALOG_LIBRARY . URL_AJAXDISPATCH,
    NAMESPACE_DASHBOARDWIDGETS => DIR_CATALOG_LIBRARY . URL_DASHBOARDWIDGETS,
    NAMESPACE_LISTINGBOX => DIR_CATALOG_LIBRARY. URL_LISTINGBOX,
    NAMESPACE_PAGINATOR => DIR_CATALOG_LIBRARY. URL_PAGINATOR,
    NAMESPACE_QUERYBUILDER => DIR_CATALOG_LIBRARY. URL_QUERYBUILDER,
    NAMESPACE_REQUEST => DIR_CATALOG_LIBRARY. URL_REQUEST,
    NAMESPACE_LEAD => DIR_CATALOG_LIBRARY. URL_LEAD,
    NAMESPACE_VIEW => DIR_CATALOG_LIBRARY. URL_VIEW,
);
