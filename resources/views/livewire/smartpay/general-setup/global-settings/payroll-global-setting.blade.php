<div>
    <div class="p-2">
        <div class="row">
            <div class="col">
                <div class="row pt-2">
                    <div class="col">
                        <h4>Taxshield Settings</h4>
                    </div>
                </div>
                <div class="row">
                    <span>*Note: Rate : ( - ) Rate</span>
                    <span>*Note: Contributions : ( - ) Contributions</span>
                </div>
                <div class="row mb-3">
                    <label for="taxshieldSwitch" class="col-sm-2 col-form-label">Taxshield Switch</label>
                    <div class="col-sm-10">
                        <select id="taxshieldSwitch" class="form-select">
                            <option selected>--Select--</option>
                            <option>...</option>
                        </select>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <h4>13th Month Pay Setup</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col px-5">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="underTime">
                            <label class="form-check-label" for="underTime">
                                Under Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="late">
                            <label class="form-check-label" for="late">
                                Late
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="absent">
                            <label class="form-check-label" for="absent">
                                Absent
                            </label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col">
                        <h4>Tax Ceiling</h4>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ceilingAmount" class="col-sm-2 col-form-label">Ceiling Amount</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ceilingAmount">
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col text-end">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
