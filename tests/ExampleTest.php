<?php

namespace Zeevx\BulkSmsNigeria\Tests;

use Orchestra\Testbench\TestCase;
use Zeevx\BulkSmsNigeria\BulkSmsNigeriaServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [BulkSmsNigeriaServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
