<?php

namespace Sadeghpm\LaravelFormBuilder\Tests;

use Orchestra\Testbench\TestCase;
use Sadeghpm\LaravelFormBuilder\LaravelFormBuilderServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelFormBuilderServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
