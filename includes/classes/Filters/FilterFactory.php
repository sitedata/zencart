<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: $
 */

namespace Zencart\Filters;

class FilterFactory
{

    public function make($filterDefinition)
    {
        $filterName = ucfirst($filterDefinition['type']) . 'Filter';
        $className = __NAMESPACE__ . '\\'.  $filterName;
        $filter = new $className;
        return $filter;
    }
}
