<div>
    <div class="p-2">
        <div class="row">
            <div class="col">
                <div class="row mb-3 pt-2">
                    <label for="serverName" class="col-sm-2 col-form-label">Server Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="serverName">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="port" class="col-sm-2 col-form-label">Port</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="port">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="connectionSecurity" class="col-sm-2 col-form-label">Connection Security</label>
                    <div class="col-sm-10">
                        <select id="connectionSecurity" class="form-select">
                            <option selected>--None--</option>
                            <option>test 1</option>
                            <option>test 2</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="authenticationMethod" class="col-sm-2 col-form-label">Authentication Method</label>
                    <div class="col-sm-10">
                        <select id="authenticationMethod" class="form-select">
                            <option selected>--None--</option>
                            <option>test 1</option>
                            <option>test 2</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="username">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="interval" class="col-sm-2 col-form-label">Interval</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="interval" value="0.00">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="lastSyncID" class="col-sm-2 col-form-label">Last Sync ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastSyncID">
                    </div>
                </div>
                
                <hr>

                <div class="row">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary">Test</button>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary">Install Service</button>
                    </div>
                    <div class="col text-center">
                        <button type="button" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
