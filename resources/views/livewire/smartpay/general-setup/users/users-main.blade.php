<div>
    <div class="row">
        <div class="col">
            <div class="position-sticky top-0 top-navbar-bg px-2 pt-2 pb-0">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="userGroups-tab" data-bs-toggle="tab"
                            data-bs-target="#userGroups-tab-pane" type="button" role="tab"
                            aria-controls="userGroups-tab-pane" aria-selected="true">User Groups</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="users-tab" data-bs-toggle="tab"
                            data-bs-target="#users-tab-pane" type="button" role="tab"
                            aria-controls="users-tab-pane" aria-selected="false">Users</button>
                    </li>
                </ul>
            </div>
            
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="userGroups-tab-pane" role="tabpanel"
                    aria-labelledby="userGroups-tab" tabindex="0">
                    <div class="row main-bg">
                        @livewire('smartpay.general-setup.users.user-groups')
                    </div>
                </div>

                <div class="tab-pane fade" id="users-tab-pane" role="tabpanel"
                    aria-labelledby="users-tab" tabindex="0">
                    <div class="row">
                        @livewire('smartpay.general-setup.users.users')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
