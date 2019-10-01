<?php

namespace ShareableLivewire\Tests;

use Livewire\Livewire;
use ShareableLivewire\Components\Numberer;

class NumbererTest extends TestCase
{
    /** @test */
    public function is_livewire_alive()
    {
        $numberer = Livewire::test(Numberer::class);

        $this->assertEquals('poop', $numberer->excrement);
        $this->assertEquals(0, $numberer->count);
        $numberer->increment();
        $this->assertEquals(1, $numberer->count);
        $numberer->decrement();
        $this->assertEquals(0, $numberer->count);

    }


}
