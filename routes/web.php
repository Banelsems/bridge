<?php

use App\Http\Livewire\Front\Home;
use App\Http\Livewire\Front\About;
use App\Http\Livewire\Front\Blog;
use App\Http\Livewire\Front\Contact;
use App\Http\Livewire\Front\Courses;
use App\Http\Livewire\Front\Faqs;
use App\Http\Livewire\Front\Teachers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/home', 301); 

Route::get('/home', Home::class)->name('home');

Route::get('/about', About::class)->name('about');

Route::get('/courses', Courses::class)->name('courses');

Route::get('/teachers', Teachers::class)->name('teachers');

Route::get('/blog', Blog::class)->name('blog');

Route::get('/faqs', Faqs::class)->name('faqs');

Route::get('/contact', Contact::class)->name('contact');