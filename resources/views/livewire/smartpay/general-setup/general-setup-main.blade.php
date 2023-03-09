@extends('layouts.app')
@section('content')
    <div id="main">
        <div id="contentContainer">
            <div class="general-setup-container mb-2">
                <div class="row general-setup-row px-0">
                    <div class="col-2 general-setup-navbar-col px-0 overflow-auto" id="custom-scroll">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link text-start active" id="v-pills-global-settings-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-global-settings" type="button" role="tab"
                                aria-controls="v-pills-global-settings" aria-selected="true">Global
                                Settings</button>

                            <button class="nav-link text-start" id="v-pills-location-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-location" type="button" role="tab"
                                aria-controls="v-pills-location" aria-selected="false">Location</button>

                            <button class="nav-link text-start" id="v-pills-house-bank-accounts-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-house-bank-accounts" type="button" role="tab"
                                aria-controls="v-pills-house-bank-accounts" aria-selected="false">House
                                Bank Accounts</button>

                            <button class="nav-link text-start" id="v-pills-bank-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-bank" type="button" role="tab" aria-controls="v-pills-bank"
                                aria-selected="false">Bank</button>

                            <button class="nav-link text-start" id="v-pills-holiday-setup-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-holiday-setup" type="button" role="tab"
                                aria-controls="v-pills-holiday-setup" aria-selected="false">Holiday Setup</button>

                            <button class="nav-link text-start" id="v-pills-user-restriction-access-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-user-restriction-access" type="button"
                                role="tab" aria-controls="v-pills-user-restriction-access" aria-selected="false">User
                                Restriction Access</button>

                            <button class="nav-link text-start" id="v-pills-menu-authorizations-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-menu-authorizations" type="button" role="tab"
                                aria-controls="v-pills-menu-authorizations" aria-selected="false">Menu
                                Authorizations</button>

                            <button class="nav-link text-start" id="v-pills-synchronization-access-tab"
                                data-bs-toggle="pill" data-bs-target="#v-pills-synchronization-access" type="button"
                                role="tab" aria-controls="v-pills-synchronization-access"
                                aria-selected="false">Synchronization Access</button>

                            <button class="nav-link text-start" id="v-pills-data-management-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-data-management" type="button" role="tab"
                                aria-controls="v-pills-data-management" aria-selected="false">Data Management</button>

                            <button class="nav-link text-start" id="v-pills-users-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-users" type="button" role="tab" aria-controls="v-pills-users"
                                aria-selected="false">Users</button>
                        </div>
                    </div>
                    <div class="col general-setup-col overflow-auto" id="custom-scroll">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-global-settings" role="tabpanel"
                                aria-labelledby="v-pills-global-settings-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.global-settings.global-settings')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-location" role="tabpanel"
                                aria-labelledby="v-pills-location-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.location.location')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-house-bank-accounts" role="tabpanel"
                                aria-labelledby="v-pills-house-bank-accounts-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.house-bank-accounts.house-bank-accounts')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-bank" role="tabpanel"
                                aria-labelledby="v-pills-bank-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.bank.bank')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-holiday-setup" role="tabpanel"
                                aria-labelledby="v-pills-holiday-setup-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.holiday-setup.holiday-setup')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-user-restriction-access" role="tabpanel"
                                aria-labelledby="v-pills-user-restriction-access-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.user-restriction-access.user-restriction-access')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-menu-authorizations" role="tabpanel"
                                aria-labelledby="v-pills-menu-authorizations-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.menu-authorizations.menu-authorizations')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-synchronization-access" role="tabpanel"
                                aria-labelledby="v-pills-synchronization-access-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.synchronization-access.synchronization-access')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-data-management" role="tabpanel"
                                aria-labelledby="v-pills-data-management-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.data-management.data-management')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-users" role="tabpanel"
                                aria-labelledby="v-pills-users-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.general-setup.users.users')
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
@endsection
