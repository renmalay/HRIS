<div>
    <div class="row">
        <div class="col">
            <div class="row pt-2">
                <div class="col">
                    <h4>Approver Master File</h4>
                </div>
            </div>
            <div class="row mb-3">
                <label for="approverCode" class="col-sm-2 col-form-label">Approver Code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="approverCode">
                </div>
            </div>
            <div class="row mb-3">
                <label for="approverDescription" class="col-sm-2 col-form-label">Approver Description</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="approverDescription">
                </div>
            </div>
            <div class="row mb-3">
                <label for="noOfApprover" class="col-sm-2 col-form-label">No. of Approver</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="noOfApprover">
                </div>
            </div>

            <hr class="border border-primary border-3 opacity-75">  

            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="listOfApprover-tab" data-bs-toggle="tab"
                        data-bs-target="#listOfApprover-tab-pane" type="button" role="tab"
                        aria-controls="listOfApprover-tab-pane" aria-selected="true">List of Approver</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="listOfCC-tab" data-bs-toggle="tab"
                        data-bs-target="#listOfCC-tab-pane" type="button" role="tab"
                        aria-controls="listOfCC-tab-pane" aria-selected="false">List of CC (SMS Module)</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="listOfApprover-tab-pane" role="tabpanel"
                    aria-labelledby="listOfApprover-tab" tabindex="0">
                    <div class="row">
                        <div class="row mt-2">
                            <div class="col">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>
                                                Stage Number
                                            </th>
                                            <th>
                                                Approver Name
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>
                                                <select class="form-select">
                                                    <option selected>--Select--</option>
                                                    <option>...</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>
                                                <select class="form-select">
                                                    <option selected>--Select--</option>
                                                    <option>...</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="listOfCC-tab-pane" role="tabpanel"
                    aria-labelledby="listOfCC-tab" tabindex="0">
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
                                            <th>Assigned By</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
