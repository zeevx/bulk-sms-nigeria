<?php

namespace Zeevx\BulkSmsNigeria;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zeevx\BulkSmsNigeria\Skeleton\SkeletonClass
 */
class BulkSmsNigeriaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bulk-sms-nigeria';
    }
}
