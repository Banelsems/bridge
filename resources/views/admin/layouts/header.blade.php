<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ml-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="/" class="logo-link">
                    <img class="logo-dark logo-img" src="{{ asset('assets/logo/ADS-03.png') }}" srcset="{{ asset('assets/logo/ADS-03.png') }} 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    @can('access_vehicules')
                    <li class="dropdown">
                        {{-- <div class="mb-3 col">
                            <a class="btn btn-sm btn-primary record-booking-desktop" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                <em class="icon ni ni-plus"></em><span style="color: white !important">Nouvel enregistrement</span>
                            </a>
                        </div> --}}

                        {{-- <a href="{{ route('recordHistory.booking') }}" class="btn btn-sm btn-primary fetch-display-click record-booking-desktop" data="secure:true" url="{{ route('recordHistory.booking') }}" holder=".update-project-holder" modal="#update-project"><em class="icon ni ni-plus"></em><span> Nouveau Vehicle</span></a>
                        <a href="{{ route('recordHistory.booking') }}" class="btn btn-icon btn-sm btn-primary btn-round fetch-display-click record-booking-mobile" data="secure:true" url="{{ route('recordHistory.booking') }}" holder=".update-project-holder" modal="#update-project"><em class="icon ni ni-plus"></em></a> --}}
                    </li>
                    @endcan
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-verified">Test</div>
                                    <div class="user-name dropdown-indicator">Test</div>
                                    {{-- <div class="user-status user-status-verified">{{Auth()->user()->roles{0}->title}}</div>
                                    <div class="user-name dropdown-indicator">{{ Auth()->user()->first_name }}</div> --}}
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>test test</span>
                                        {{-- <span>{{ mb_substr(Auth()->user()->first_name, 0, 1, "UTF-8").mb_substr(Auth()->user()->first_name, 0, 1, "UTF-8") }}</span> --}}
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">test</span>
                                        <span class="sub-text">test</span>
                                        {{-- <span class="lead-text">{{ Auth()->user()->first_name }}</span>
                                        <span class="sub-text">{{ Auth()->user()->contact }}</span> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Paramètres du compte</span></a></li>
                                    <li><a href="#documentation" target="_blank"><em class="icon ni ni-help-alt"></em><span>Centre d'aide</span></a></li>
                                </ul>
                            </div>
                            @if(session()->has('admin')!=NULL)
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('adminLogout')}}"><em class="icon ni ni-signout"></em><span>Retourner à mon compte</span></a></li>
                                </ul>
                            </div>
                            @endif
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Déconnexion</span></a></li>
                                </ul>
                            </div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>