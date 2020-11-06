<?php

namespace SuryaJD\DnsBan\Tests;

use Orchestra\Testbench\TestCase;
use SuryaJD\DnsBan\DnsBanServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [DnsBanServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
