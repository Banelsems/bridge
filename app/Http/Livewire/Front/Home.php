<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.front.home')->extends('front.layouts.master')->section('main-content');
    }
}