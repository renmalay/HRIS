<div>
    <div class="p-2">
        <div class="row">
            <div class="col">
                <div class="row pt-2">
                    <div class="col">
                        <h4>Night Diff Settings</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="fromTime" class="col-sm-2 col-form-label">From Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="fromTime">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="toTime" class="col-sm-2 col-form-label">To Time</label>
                    <div class="col-sm-10">
                        <input type="time" class="form-control" id="toTime">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <h4>Leave Credit Management</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-5">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="leaveCreditManagementRadio"
                                id="individual">
                            <label class="form-check-label" for="individual">
                                Individual
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="leaveCreditManagementRadio"
                                id="total">
                            <label class="form-check-label" for="total">
                                Total
                            </label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <h4>Biometrics ID Setting</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="biometricSwitch" class="col-sm-2 col-form-label">Biometric Switch</label>
                    <div class="col-sm-10">
                        <select id="biometricSwitch" class="form-select">
                            <option selected>--Select--</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col text-end">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>

                <hr class="border border-primary border-3 opacity-75">

                <div class="row">
                    <div class="col">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="button" class="btn btn-primary">Add</button>
                            <button type="button" class="btn btn-danger">Reset</button>
                          </div>
                    </div>
                    <div class="col-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-responsive">
                            <thead>
                                <tr>
                                    <th>
                                        SMS Number
                                    </th>
                                    <th>
                                        SMS Description
                                    </th>
                                    <th>
                                        Switch ON/OFF
                                    </th>
                                    <th>
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            </tbody> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
