<div>
    <div class="row">
        <div class="col">
            <div class="position-sticky top-0 top-navbar-bg px-2 pt-2 pb-0">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="hris-template-setup-tab" data-bs-toggle="tab"
                            data-bs-target="#hris-template-setup-tab-pane" type="button" role="tab"
                            aria-controls="hris-template-setup-tab-pane" aria-selected="true">HRIS Template Setup</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="hris-template-download-tab" data-bs-toggle="tab"
                            data-bs-target="#hris-template-download-tab-pane" type="button" role="tab"
                            aria-controls="hris-template-download-tab-pane" aria-selected="false">HRIS Template Download</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="data-transfer-workbench-tab" data-bs-toggle="tab" data-bs-target="#data-transfer-workbench-tab-pane"
                            type="button" role="tab" aria-controls="data-transfer-workbench-tab-pane" aria-selected="false">Data Transfer Workbench</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="change-employee-id-utility-tab" data-bs-toggle="tab" data-bs-target="#change-employee-id-utility-tab-pane"
                            type="button" role="tab" aria-controls="change-employee-id-utility-tab-pane" aria-selected="false">Change Employee ID Utility</button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="hris-template-setup-tab-pane" role="tabpanel"
                    aria-labelledby="hris-template-setup-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.data-management.hris-template-setup')
                    </div>
                </div>

                <div class="tab-pane fade" id="hris-template-download-tab-pane" role="tabpanel"
                    aria-labelledby="hris-template-download-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.data-management.hris-template-download')
                    </div>
                </div>

                <div class="tab-pane fade" id="data-transfer-workbench-tab-pane" role="tabpanel" aria-labelledby="data-transfer-workbench-tab"
                    tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.data-management.data-transfer-workbench')
                    </div>
                </div>

                <div class="tab-pane fade" id="change-employee-id-utility-tab-pane" role="tabpanel" aria-labelledby="change-employee-id-utility-tab"
                    tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.data-management.change-employee-id-utility')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
