<?php

namespace SuryaJD\DnsBan;

use Illuminate\Support\Facades\Facade;

/**
 * @see \SuryaJD\DnsBan\Skeleton\SkeletonClass
 */
class DnsBanFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dns-ban';
    }
}
