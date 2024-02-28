<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="/" class="logo-link nk-sidebar-logo">
                <img class="logo-dark logo-img" src="{{ asset('assets/logo/ADS-03.png') }}"
                    srcset="{{ asset('assets/logo/ADS-03.png') }} 2x" alt="logo-dark">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Aperçu général</h6>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item">
                        <a href="{{ route('dashboard') }}" class="nk-menu-link overview">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Aperçu général</span>
                        </a>
                    </li><!-- .nk-menu-item -->


                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Application</h6>
                    </li><!-- .nk-menu-item -->
                    {{-- @can('access_customers')  --}}
                    <li class="nk-menu-item">
                        <a href="{{ route('customers.list') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                            <span class="nk-menu-text">Clients</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    {{-- @endcan --}}
                    @can('access_vehicules')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-note-add-fill"></em></span>
                                <span class="nk-menu-text">Enregistrement</span>
                                @can('access_customers')
                                    <span
                                        class="nk-menu-badge badge-danger">{{ auth()->user()->pending_tasks + auth()->user()->expected_parts + auth()->user()->unpaid_parts }} </span>
                                @endcan
                            </a>
                            <ul class="nk-menu-sub">
                                @can('access_vehicules')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link" data-toggle="modal"
                                            data-target=".bd-example-modal-lg">
                                            <span class="nk-menu-text">Nouveau</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                @endcan

                                <li class="nk-menu-item">
                                    <a href="{{ route('recordHistories') }}" class="nk-menu-link"><span
                                            class="nk-menu-text">liste</span></a>
                                </li>
                                @can('access_tasks')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('jobs') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Traveaux</span>
                                            <span class="nk-menu-badge badge-danger">{{ auth()->user()->pending_tasks }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('access_tasks')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('tasks') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Tâches</span>
                                            <span class="nk-menu-badge badge-danger">{{ auth()->user()->pending_tasks }}</span>
                                        </a>
                                    </li>
                                @endcan
                                @can('access_expenses')
                                <li class="nk-menu-item ">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-text">Pièces </span>
                                        @can('access_customers')
                                            <span
                                                class="nk-menu-badge badge-danger">{{ auth()->user()->pending_tasks + auth()->user()->expected_parts + auth()->user()->unpaid_parts }}</span>
                                        @endcan
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('expenses.index', ['title' => 'Pièces attendues', 'status' => 'Pending', 'paid' => null]) }}"
                                                class="nk-menu-link">
                                                <span class="nk-menu-text">Attendues</span>
                                                <span
                                                    class="nk-menu-badge badge-danger">{{ auth()->user()->expected_parts }}</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('expenses.index', ['title' => 'Pièces impayées', 'status' => 'Ordered', 'paid' => 'No']) }}"
                                                class="nk-menu-link">
                                                <span class="nk-menu-text">Impayées</span>
                                                <span class="nk-menu-badge badge-danger">{{ auth()->user()->unpaid_parts }}</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('expenses.index', ['title' => 'Pièces payées non livrées', 'status' => 'Ordered', 'paid' => 'Yes']) }}"
                                                class="nk-menu-link">
                                                <span class="nk-menu-text">Non livrées</span>
                                                <span class="nk-menu-badge badge-danger">{{ auth()->user()->unpaid_parts }}</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('expenses.index', ['title' => 'Pièces livrées', 'status' => 'Delivered', 'paid' => 'Yes']) }}"
                                                class="nk-menu-link">
                                                <span class="nk-menu-text">livrées</span>
                                                <span class="nk-menu-badge badge-danger">{{ auth()->user()->unpaid_parts }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                @endcan

                                @if (auth()->user()->entity->insurance == 'Enabled')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Compagnie
                                                d'assurance.</span></a>
                                    </li>
                                @endif
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    @endcan

                    @can('access_accounting')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-sign-bgp-alt"></em></span>
                                <span class="nk-menu-text">Comptabilité</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @can('access_quotes')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Devis</span></a>
                                    </li>
                                @endcan
                                @can('access_invoices')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Factures</span></a>
                                    </li>
                                @endcan
                                @can('access_record_history_payments')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Paiements</span></a>
                                    </li>
                                @endcan
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    @endcan
                    @can('access_customers')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-clipboad-check-fill"></em></span>
                                <span class="nk-menu-text">Inventory</span>
                                @if (auth()->user()->entity->parts_to_inventory == 'Enabled')
                                    <span
                                        class="nk-menu-badge badge-danger">{{ auth()->user()->receiveables + auth()->user()->issueables }}</span>
                                @endif
                            </a>
                            <ul class="nk-menu-sub">
                                @can('access_inventories')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('stores') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Magasin</span></a>
                                    </li>
                                @endcan
                                @can('access_inventories')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('parts') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Stocks</span></a>
                                    </li>
                                @endcan
                                @can('access_inventories')
                                    <li class="nk-menu-item">
                                        <a href="{{ route('servicepackages') }}" class="nk-menu-link"><span
                                                class="nk-menu-text">Forfaits</span></a>
                                    </li>
                                @endcan
                                @if (auth()->user()->entity->parts_to_inventory == 'Enabled')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-text">Reçus</span>
                                            <span
                                                class="nk-menu-badge badge-danger">{{ auth()->user()->receiveables }}</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link">
                                            <span class="nk-menu-text">Problématiques</span>
                                            <span
                                                class="nk-menu-badge badge-danger">{{ auth()->user()->issueables }}</span>
                                        </a>
                                    </li>
                                @endif
                                @can('access_suppliers')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">
                                                Fournisseurs</span></a>
                                    </li>
                                @endcan
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    @endcan
                    @can('access_marketing')
                        <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-chat-circle-fill"></em></span>
                                <span class="nk-menu-text">Marketing</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    @endcan
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Management</h6>
                    </li><!-- .nk-menu-heading -->
                    {{-- @can('access_role')  --}}
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                            <span class="nk-menu-text">Administration</span>
                        </a>
                        <ul class="nk-menu-sub">

                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link">
                                    <span class="nk-menu-text">Départements</span>
                                </a>
                            </li>

                            <li class="nk-menu-item">
                                <a href="{{ route('roles.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Rôles</span>
                                </a>
                            </li>

                            @can('access_role')
                                <li class="nk-menu-item">
                                    <a href="{{ route('roles.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-lock-alt-fill"></em></span>
                                        <span class="nk-menu-text">Rôles</span>
                                    </a>
                                </li>
                            @endcan

                            @can('access_ permission')
                                <li class="nk-menu-item">
                                    <a href="{{ route('permissions.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-lock-alt-fill"></em></span>
                                        <span class="nk-menu-text">Permissions</span>
                                    </a>
                                </li>
                            @endcan

                            @can('access_customers')
                                <li class="nk-menu-item">
                                    <a href="{{ route('users.index') }}" class="nk-menu-link">
                                        <span class="nk-menu-text">Utiliusateur</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            @endcan

                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                    {{-- @endcan --}}
                    @can('access_supadmin')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon"><em class="icon ni ni-star-fill"></em></span>
                                <span class="nk-menu-text">Super Admin</span>
                            </a>
                            <ul class="nk-menu-sub">
                                @can('access_supadmin')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Aperçu
                                                général</span></a>
                                    </li>
                                @endcan
                                @can('access_entities')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span
                                                class="nk-menu-text">Entreprise</span></a>
                                    </li>
                                @endcan
                                @can('access_plans')
                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Prix
                                                Plans</span></a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Paiements
                                                Plans</span></a>
                                    </li>
                                @endcan
                            </ul><!-- .nk-menu-sub -->
                        </li><!-- .nk-menu-item -->
                    @endcan

                    @can('access_customers')
                        <li class="nk-menu-item">
                            <a href="#" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-sign-cc-alt2"></em></span>
                                <span class="nk-menu-text">Facturation</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    @endcan
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting-fill"></em></span>
                            <span class="nk-menu-text">Paramètres</span>
                        </a>
                        <ul class="nk-menu-sub">
                            {{-- @can('access_supadmin')  --}}
                            <li class="nk-menu-item">
                                <a href="{{ route('setting.recordquizvehicle') }}" class="nk-menu-link"><span
                                        class="nk-menu-text">QuizRecVehicule</span></a>
                            </li>
                            {{-- @endcan
                            @can('access_entities')  --}}
                            {{-- <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">Entreprise</span></a>
                            </li> --}}
                            {{-- @endcan
                            @can('access_plans')  --}}
                            {{-- <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">Prix Plans</span></a>
                            </li> --}}

                            {{-- <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">Paiements Plans</span></a>
                            </li> --}}
                            {{-- @endcan --}}
                        </ul><!-- .nk-menu-sub -->
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
