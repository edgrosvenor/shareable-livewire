<?php

namespace ShareableLivewire\Tests;

use Illuminate\Support\Facades\File;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use ShareableLivewire\ShareableLivewireServiceProvider;

class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            ShareableLivewireServiceProvider::class,
            LivewireServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('view.paths', [__DIR__.'/../resources/views']);
        $app['config']->set('app.key', 'base64:r0w0xC+mYYqjbZhHZ3uk1oH63VadA3RKrMW52OlIDzI=');
    }
}