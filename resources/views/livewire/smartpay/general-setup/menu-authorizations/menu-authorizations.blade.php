<div>
    <div class="row">
        <div class="col">
            <div class="position-sticky top-0 top-navbar-bg px-2 pt-2 pb-0">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="user-austhorizations-tab" data-bs-toggle="tab"
                            data-bs-target="#user-austhorizations-tab-pane" type="button" role="tab"
                            aria-controls="user-austhorizations-tab-pane" aria-selected="true">User Authorizations</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="group-authorizations-tab" data-bs-toggle="tab"
                            data-bs-target="#group-authorizations-tab-pane" type="button" role="tab"
                            aria-controls="group-authorizations-tab-pane" aria-selected="false">Group Authorizations</button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="user-austhorizations-tab-pane" role="tabpanel"
                    aria-labelledby="user-austhorizations-tab" tabindex="0">
                    <div class="row main-bg">
                        @livewire('smartpay.general-setup.menu-authorizations.user-authorizations')
                    </div>
                </div>

                <div class="tab-pane fade" id="group-authorizations-tab-pane" role="tabpanel"
                    aria-labelledby="group-authorizations-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.menu-authorizations.group-authorizations')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
