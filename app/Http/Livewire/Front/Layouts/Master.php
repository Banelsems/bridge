<?php

namespace App\Http\Livewire\Front\Layouts;

use Livewire\Component;

class Master extends Component
{
    public $activeTab;

    public function mount()
    {
        $this->activeTab = 'home';
    }
    
    public function setActiveTab($tab)
    {
        $this->activeTab = $tab;
    }
    public function render()
    {
        return view('livewire.front.layouts.master')->extends('livewire.front.layouts.master')->section('main-content');
    }
}