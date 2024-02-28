<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class Courses extends Component
{
    public function render()
    {
        return view('livewire.front.courses')->extends('livewire.front.layouts.master')->section('main-content');
    }
}