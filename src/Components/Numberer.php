<?php

namespace ShareableLivewire\Components;

use Livewire\Component;

class Numberer extends Component
{
    public $excrement = 'poop';
    public $count;

    public function mount()
    {
        $this->count = 0;
    }

    public function render()
    {
        return view('sl::numberer');
    }

    public function increment() {
        $this->count += 1;
    }

    public function decrement() {
        $this->count -= 1;
    }
}