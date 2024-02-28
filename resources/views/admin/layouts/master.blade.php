<!DOCTYPE html >
<meta charset="UTF-8">
<html style="background-color:#F0F6FF" lang="fr" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
data-template="vertical-menu-template-no-customizer">
<script src="https://kit.fontawesome.com/8ef4bbb010.js" crossorigin="anonymous"></script>

@include('hospital.layouts.head')


<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('hospital.layouts.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('hospital.layouts.header')
                <!-- main header @e -->
                <!-- content @s -->
                {{-- @include('hospital.layouts.toastr') --}}
                <!-- ======= Header ======= -->

                <!-- Main Content -->
                @stack('css')
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('main-content')
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End of Main Content -->
                @include('hospital.layouts.footer')
                @stack('scripts')

            </div>
        </div>
    </div> 
    @livewireScripts
   
</body>

</html>
