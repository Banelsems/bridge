<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        return view('livewire.front.about')->extends('livewire.front.layouts.master')->section('main-content');
    }
}