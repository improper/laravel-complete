<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Who extends Component
{
    public string $name;

    public function mount()
    {
        if(!$this->propertyIsSet('name')) {
            $this->name = Auth::guest() ? 'Guest' : Auth::user()->name;
        }
    }

    public function render()
    {
        return view('livewire.who');
    }

    private function propertyIsSet(string $property) {
        $rp = new \ReflectionProperty(get_class($this), $property);
        return $rp->isInitialized($this);
    }
}
