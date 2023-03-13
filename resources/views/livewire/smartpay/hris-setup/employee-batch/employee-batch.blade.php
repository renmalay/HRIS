<div>
    <div class="row">
        <div class="col">
            <div class="row pt-2">
                <div class="col">
                    <h4>Employee Batch Setup</h4>
                </div>
            </div>
            <div class="row mb-3">
                <label for="code" class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="code">
                </div>
            </div>
            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name">
                </div>
            </div>
            <div class="row mb-3">
                <label for="batchName" class="col-sm-2 col-form-label">Batch Group</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" id="batchName">
                </div>
            </div>

            <hr>

            {{-- <div class="row">
                <div class="col">
                    <h4>GL Accounts</h4>
                </div>
            </div>
            <div class="row mb-3">
                <label for="basicPay" class="col-sm-2 col-form-label">Basic Pay</label>
                <div class="col-sm-6">
                    <select class="form-select" id="basicPay">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="overtime" class="col-sm-2 col-form-label">Overtime</label>
                <div class="col-sm-6">
                    <select class="form-select" id="overtime">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="adjustment" class="col-sm-2 col-form-label">Adjustment</label>
                <div class="col-sm-6">
                    <select class="form-select" id="adjustment">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="refund" class="col-sm-2 col-form-label">Refund</label>
                <div class="col-sm-6">
                    <select class="form-select" id="refund">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="netPay" class="col-sm-2 col-form-label">Net Pay</label>
                <div class="col-sm-6">
                    <select class="form-select" id="netPay">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sssDebit" class="col-sm-2 col-form-label">SSS Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="sssDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gsisDebit" class="col-sm-2 col-form-label">GSIS Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="gsisDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gsisEccDebit" class="col-sm-2 col-form-label">GSIS ECC Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="gsisEccDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="philhealthDebit" class="col-sm-2 col-form-label">Philhealth Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="philhealthDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hdmfDebit" class="col-sm-2 col-form-label">HDMF Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="hdmfDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="wtaxDebit" class="col-sm-2 col-form-label">WTAX Debit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="wtaxDebit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="sssCredit" class="col-sm-2 col-form-label">SSS Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="sssCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gsisCredit" class="col-sm-2 col-form-label">GSIS Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="gsisCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="gsisEccCredit" class="col-sm-2 col-form-label">GSIS ECC Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="gsisEccCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="philhealthCredit" class="col-sm-2 col-form-label">Philhealth Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="philhealthCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="hdmfCredit" class="col-sm-2 col-form-label">HDMF Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="hdmfCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="row mb-3">
                <label for="wtaxCredit" class="col-sm-2 col-form-label">WTAX Credit</label>
                <div class="col-sm-6">
                    <select class="form-select" id="wtaxCredit">
                        <option selected>--Select--</option>
                        <option value="">Test 1</option>
                        <option value="">Test 2</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control" id="">
                </div>
            </div> --}}
            <div class="row">
                <div class="col text-end">
                    <button type="button" class="btn btn-primary">New</button>
                </div>
            </div>
        </div>
    </div>
</div>
