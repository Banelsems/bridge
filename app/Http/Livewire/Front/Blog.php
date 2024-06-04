<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Blog extends Component
{
    public function render()
    {
        return view('livewire.front.blog')->extends('front.layouts.master')->section('main-content');
    }
}