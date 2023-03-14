@extends('layouts.app')
@section('content')
    <div id="main">
        <div id="contentContainer">
            <div class="hris-setup-container mb-2">
                <div class="row hris-setup-row px-0">
                    <div class="col-2 hris-setup-navbar-col px-0 overflow-auto" id="custom-scroll">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="insideNavs nav-link text-start active" id="v-pills-department-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-department" type="button" role="tab"
                                aria-controls="v-pills-department" aria-selected="true">Department</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-section-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-section" type="button" role="tab"
                                aria-controls="v-pills-section" aria-selected="true">Section</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-job-category-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-job-category" type="button" role="tab"
                                aria-controls="v-pills-job-category" aria-selected="true">Job Category</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-labor-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-labor" type="button" role="tab" aria-controls="v-pills-labor"
                                aria-selected="true">Labor</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-position-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-position" type="button" role="tab"
                                aria-controls="v-pills-position" aria-selected="true">Position</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-employee-batch-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-employee-batch" type="button" role="tab"
                                aria-controls="v-pills-employee-batch" aria-selected="true">Employee Batch</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-leave-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-leave-master-file" type="button" role="tab"
                                aria-controls="v-pills-leave-master-file" aria-selected="true">Leave Master File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-additional-earning-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-additional-earning" type="button" role="tab"
                                aria-controls="v-pills-additional-earning" aria-selected="true">Additional Earning</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-approver-setup-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-approver-setup" type="button" role="tab"
                                aria-controls="v-pills-approver-setup" aria-selected="true">Approver Setup</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-violation-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-violation-master-file" type="button" role="tab"
                                aria-controls="v-pills-violation-master-file" aria-selected="true">Violation Master
                                File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-sanction-type-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-sanction-type-master-file" type="button" role="tab"
                                aria-controls="v-pills-sanction-type-master-file" aria-selected="true">Sanction Type Master File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-violation-description-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-violation-description-master-file" type="button" role="tab"
                                aria-controls="v-pills-violation-description-master-file" aria-selected="true">Violation Description Master File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-issuer-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-issuer-master-file" type="button" role="tab"
                                aria-controls="v-pills-issuer-master-file" aria-selected="true">Issuer Master File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-requirements-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-requirements-master-file" type="button" role="tab"
                                aria-controls="v-pills-requirements-master-file" aria-selected="true">Requirements Master File</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-rate-reason-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-rate-reason" type="button" role="tab"
                                aria-controls="v-pills-rate-reason" aria-selected="true">Rate Reason</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-employment-status-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-employment-status" type="button" role="tab"
                                aria-controls="v-pills-employment-status" aria-selected="true">Employmet Status</button>

                            <button class="insideNavs nav-link text-start" id="v-pills-recurring-deduction-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-recurring-deduction" type="button" role="tab"
                                aria-controls="v-pills-recurring-deduction" aria-selected="true">Recurring Deduction</button>


                        </div>
                    </div>
                    <div class="col hris-setup-col overflow-auto" id="custom-scroll">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-department" role="tabpanel"
                                aria-labelledby="v-pills-department-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.department.department')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-section" role="tabpanel"
                                aria-labelledby="v-pills-section-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.section.section')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-job-category" role="tabpanel"
                                aria-labelledby="v-pills-job-category-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.job-category.job-category')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-labor" role="tabpanel"
                                aria-labelledby="v-pills-labor-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.labor.labor')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-position" role="tabpanel"
                                aria-labelledby="v-pills-position-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.position.position')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-employee-batch" role="tabpanel"
                                aria-labelledby="v-pills-employee-batch-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.employee-batch.employee-batch')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-leave-master-file" role="tabpanel"
                                aria-labelledby="v-pills-leave-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.leave-master-file.leave-master-file')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-additional-earning" role="tabpanel"
                                aria-labelledby="v-pills-additional-earning-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.additional-earning.additional-earning')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-approver-setup" role="tabpanel"
                                aria-labelledby="v-pills-approver-setup-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.approver-setup.approver-setup')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-violation-master-file" role="tabpanel"
                                aria-labelledby="v-pills-violation-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.violation-master-file.violation-master-file')
                                </div>
                            </div>
                            
                            <div class="tab-pane fade" id="v-pills-sanction-type-master-file" role="tabpanel"
                                aria-labelledby="v-pills-sanction-type-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.sanction-type-master-file.sanction-type-master-file')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-violation-description-master-file" role="tabpanel"
                                aria-labelledby="v-pills-violation-description-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.violation-description-master-file.violation-description-master-file')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-issuer-master-file" role="tabpanel"
                                aria-labelledby="v-pills-issuer-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.issuer-master-file.issuer-master-file')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-requirements-master-file" role="tabpanel"
                                aria-labelledby="v-pills-requirements-master-file-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.requirements-master-file.requirements-master-file')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-rate-reason" role="tabpanel"
                                aria-labelledby="v-pills-rate-reason-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.rate-reason.rate-reason')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-employment-status" role="tabpanel"
                                aria-labelledby="v-pills-employment-status-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.employment-status.employment-status')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-recurring-deduction" role="tabpanel"
                                aria-labelledby="v-pills-recurring-deduction-tab" tabindex="0">
                                <div class="px-2">
                                    @livewire('smartpay.hris-setup.recurring-deduction.recurring-deduction')
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
