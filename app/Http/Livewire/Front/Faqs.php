<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Faqs extends Component
{
    public function render()
    {
        return view('livewire.front.faqs')->extends('livewire.front.layouts.master')->section('main-content');
    }
}