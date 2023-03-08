@extends('layouts.app')
@section('content')
    <div id="main">
        <div id="contentContainer">
            <div class="hris-setup-container mb-2">
                <div>
                    <h1>HRIS Setup</h1>
                </div>
                <div class="row hris-setup-row px-0">
                    <div class="col-2 hris-setup-navbar-col px-0 overflow-auto">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <button class="nav-link text-start active" id="v-pills-department-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-department" type="button" role="tab"
                                aria-controls="v-pills-department" aria-selected="true">Department</button>

                            <button class="nav-link text-start" id="v-pills-section-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-section" type="button" role="tab"
                                aria-controls="v-pills-section" aria-selected="true">Section</button>

                            <button class="nav-link text-start" id="v-pills-job-category-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-job-category" type="button" role="tab"
                                aria-controls="v-pills-job-category" aria-selected="true">Job Category</button>

                            <button class="nav-link text-start" id="v-pills-labor-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-labor" type="button" role="tab" aria-controls="v-pills-labor"
                                aria-selected="true">Labor</button>

                            <button class="nav-link text-start" id="v-pills-position-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-position" type="button" role="tab"
                                aria-controls="v-pills-position" aria-selected="true">Position</button>

                            <button class="nav-link text-start" id="v-pills-employee-batch-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-employee-batch" type="button" role="tab"
                                aria-controls="v-pills-employee-batch" aria-selected="true">Employee Batch</button>

                            <button class="nav-link text-start" id="v-pills-leave-master-file-tab" data-bs-toggle="pill"
                                data-bs-target="#v-pills-leave-master-file" type="button" role="tab"
                                aria-controls="v-pills-leave-master-file" aria-selected="true">Leave Master File</button>


                        </div>
                    </div>
                    <div class="col hris-setup-col overflow-auto">
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="v-pills-department" role="tabpanel"
                                aria-labelledby="v-pills-department-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.department.department')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-section" role="tabpanel"
                                aria-labelledby="v-pills-section-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.section.section')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-job-category" role="tabpanel"
                                aria-labelledby="v-pills-job-category-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.job-category.job-category')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-labor" role="tabpanel"
                                aria-labelledby="v-pills-labor-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.labor.labor')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-position" role="tabpanel"
                                aria-labelledby="v-pills-position-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.position.position')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-employee-batch" role="tabpanel"
                                aria-labelledby="v-pills-employee-batch-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.employee-batch.employee-batch')
                                </div>
                            </div>

                            <div class="tab-pane fade show active" id="v-pills-leave-master-file" role="tabpanel"
                                aria-labelledby="v-pills-leave-master-file-tab" tabindex="0">
                                <div class="p-2">
                                    @livewire('smartpay.hris-setup.leave-master-file.leave-master-file')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
