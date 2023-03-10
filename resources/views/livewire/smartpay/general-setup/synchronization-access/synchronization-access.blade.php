<div>
    <div class="row">
        <div class="col">
            <div class="position-sticky top-0 top-navbar-bg px-2 pt-2 pb-0">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="email-sync-setup-tab" data-bs-toggle="tab"
                            data-bs-target="#email-sync-setup-tab-pane" type="button" role="tab"
                            aria-controls="email-sync-setup-tab-pane" aria-selected="true">Email Sync Setup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="sms-sync-setup-tab" data-bs-toggle="tab"
                            data-bs-target="#sms-sync-setup-tab-pane" type="button" role="tab"
                            aria-controls="sms-sync-setup-tab-pane" aria-selected="false">SMS Sync Setup</button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="email-sync-setup-tab-pane" role="tabpanel"
                    aria-labelledby="email-sync-setup-tab" tabindex="0">
                    <div class="row main-bg">
                        @livewire('smartpay.general-setup.synchronization-access.email-sync-setup')
                    </div>
                </div>

                <div class="tab-pane fade" id="sms-sync-setup-tab-pane" role="tabpanel"
                    aria-labelledby="sms-sync-setup-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.synchronization-access.sms-sync-setup')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
