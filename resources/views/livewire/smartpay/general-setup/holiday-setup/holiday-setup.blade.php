<div>
    <div class="row">
        <div class="col">
            <div class="row pt-2">
                <div class="col">
                    <h4>Holiday Setup</h4>
                </div>
            </div>
            <div class="row mb-3">
                <label for="holidayYear" class="col-sm-2 col-form-label">Holiday Year</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="holidayYear">
                </div>
            </div>
            <div class="row mb-3">
                <label for="holidayDescription" class="col-sm-2 col-form-label">Holiday Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="holidayDescription">
                </div>
            </div>
            <div class="row">
                <div class="col text-end">
                    <button type="button" class="btn btn-primary">Submit</button>
                </div>
            </div>

            <hr class="border border-primary border-3 opacity-75">  

            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="holiday-tab" data-bs-toggle="tab"
                        data-bs-target="#holiday-tab-pane" type="button" role="tab"
                        aria-controls="holiday-tab-pane" aria-selected="true">Holiday</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="holidayPerLocation-tab" data-bs-toggle="tab"
                        data-bs-target="#holidayPerLocation-tab-pane" type="button" role="tab"
                        aria-controls="holidayPerLocation-tab-pane" aria-selected="false">Holiday Per Location</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="holiday-tab-pane" role="tabpanel"
                    aria-labelledby="holiday-tab" tabindex="0">
                    <div class="row">
                        <div class="row pt-2">
                            <div class="col">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-secondary">Reset</button>
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            <th>
                                                Days From
                                            </th>
                                            <th>
                                                Deactive
                                            </th>
                                            <th>
                                                Tagging
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="holidayPerLocation-tab-pane" role="tabpanel"
                    aria-labelledby="holidayPerLocation-tab" tabindex="0">
                    <div class="row">
                        <div class="row pt-2">
                            <div class="col">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    <button type="button" class="btn btn-primary">Add</button>
                                    <button type="button" class="btn btn-danger">Reset</button>
                                  </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>
                                                Location
                                            </th>
                                            <th>
                                                Date
                                            </th>
                                            <th>
                                                Description
                                            </th>
                                            <th>
                                                Days From
                                            </th>
                                            <th>
                                                Deactive
                                            </th>
                                            <th>
                                                Tagging
                                            </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
    </div>
</div>

