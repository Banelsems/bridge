<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        return view('livewire.front.contact')->extends('livewire.front.layouts.master')->section('main-content');
    }
}