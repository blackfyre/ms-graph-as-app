<?php

namespace Blackfyre\MsGraphAsApp\Tests;

use Orchestra\Testbench\TestCase;
use Blackfyre\MsGraphAsApp\MsGraphAsAppServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [MsGraphAsAppServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
