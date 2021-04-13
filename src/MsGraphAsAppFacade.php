<?php

namespace Blackfyre\MsGraphAsApp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Blackfyre\MsGraphAsApp\Skeleton\SkeletonClass
 */
class MsGraphAsAppFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ms-graph-as-app';
    }
}
