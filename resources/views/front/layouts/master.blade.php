<!DOCTYPE html>
<meta charset="UTF-8">
<html style="background-color:#F0F6FF" lang="fr" class="light-style customizer-hide" dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-no-customizer">
<script src="https://kit.fontawesome.com/8ef4bbb010.js" crossorigin="anonymous"></script>

@include('front.layouts.head')


<body>

    <div>
        <!-- start cssload-loader -->
        <div class="preloader">
            <div class="loader">
                <svg class="spinner" viewBox="0 0 50 50">
                    <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5">
                    </circle>
                </svg>
            </div>
        </div>
        <!-- end cssload-loader -->
        @include('front.layouts.header')
    
    
        <!-- Main Content -->
        @stack('css')
    
        @yield('main-content')
    
        {{-- <div class="">
            @if($activeTab === 'home')
                @livewire('front.home', key('home'))
            @elseif($activeTab === 'about')
                @livewire('front.about.', key('about'))
            @elseif($activeTab === 'courses')
                @livewire('front.courses.', key('courses'))
            @elseif($activeTab === 'teachers')
                @livewire('front.teachers.', key('teachers'))
            @elseif($activeTab === 'blog')
                @livewire('front.blog.', key('blog'))
            @elseif($activeTab === 'faqs')
                @livewire('front.faqs.', key('faqs'))
            @elseif($activeTab === 'contact')
                @livewire('front.contact.', key('contact'))
            @endif
        </div> --}}
    
        <!-- End of Main Content -->
        @include("admin.layouts.bridgeFooter")
        @include('front.layouts.footer')
        @stack('scripts')
    
        @livewireScripts
    </div>
    

    {{-- @livewire('front.layouts.master') --}}
</body>

</html>
