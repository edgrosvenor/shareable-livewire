<?php

namespace ShareableLivewire;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use ShareableLivewire\Components\Numberer;


class ShareableLivewireServiceProvider extends ServiceProvider
{

    protected $manifestPath;

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sl');
        Livewire::component('sl::numberer', Numberer::class);
    }

    public function register()
    {


    }
}
