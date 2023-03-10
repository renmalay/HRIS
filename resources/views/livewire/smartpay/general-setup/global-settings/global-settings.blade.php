<div>
    <div class="row">
        <div class="col">
            <div class="position-sticky top-0 top-navbar-bg px-2 pt-2 pb-0">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="company-info-tab" data-bs-toggle="tab"
                            data-bs-target="#company-info-tab-pane" type="button" role="tab"
                            aria-controls="company-info-tab-pane" aria-selected="true">Company Info</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="payroll-global-setting-tab" data-bs-toggle="tab"
                            data-bs-target="#payroll-global-setting-tab-pane" type="button" role="tab"
                            aria-controls="payroll-global-setting-tab-pane" aria-selected="false">Payroll GLobal
                            Setting</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="timekeeping-global-setting-tab" data-bs-toggle="tab" data-bs-target="#timekeeping-global-setting-tab-pane"
                            type="button" role="tab" aria-controls="timekeeping-global-setting-tab-pane" aria-selected="false">TimeKeeping
                            Global Setting</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kiosk-and-employee-setting-tab" data-bs-toggle="tab" data-bs-target="#kiosk-and-employee-setting-tab-pane"
                            type="button" role="tab" aria-controls="kiosk-and-employee-setting-tab-pane" aria-selected="false">Kiosk &
                            Employee Setting</button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="company-info-tab-pane" role="tabpanel"
                    aria-labelledby="company-info-tab" tabindex="0">
                    <div class="row main-bg">
                        @livewire('smartpay.general-setup.global-settings.company-info')
                    </div>
                </div>

                <div class="tab-pane fade" id="payroll-global-setting-tab-pane" role="tabpanel"
                    aria-labelledby="payroll-global-setting-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.global-settings.payroll-global-setting')
                    </div>
                </div>

                <div class="tab-pane fade" id="timekeeping-global-setting-tab-pane" role="tabpanel" aria-labelledby="timekeeping-global-setting-tab"
                    tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.global-settings.timekeeping-global-setting')
                    </div>
                </div>

                <div class="tab-pane fade" id="kiosk-and-employee-setting-tab-pane" role="tabpanel" aria-labelledby="kiosk-and-employee-setting-tab"
                    tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.global-settings.kiosk-and-employee-setting')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
