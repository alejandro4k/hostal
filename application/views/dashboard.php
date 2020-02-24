<div class="row" id="navHorizontal">
    <div class="col-3" >
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                aria-controls="v-pills-home" aria-selected="true"><i class="far fa-booth-curtain"></i> 
                <i class="fas fa-hotel"></i>
                Home</a>
            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                aria-controls="v-pills-profile" aria-selected="false">
                <i class="fas fa-address-book"></i>
                Habitaciones</a>
            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                aria-controls="v-pills-messages" aria-selected="false">Messages</a>
            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                aria-controls="v-pills-settings" aria-selected="false">Settings</a>
            <a class="nav-link" href="<?= base_url('login/logout') ?>" role="tab" aria-controls="v-pills-settings"
                aria-selected="false">
                <i class="fas fa-sign-out-alt"></i>
                Cerrar Sesion</a>
        </div>
    </div>
    <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                ...
                
                
                </div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...
            </div>
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...
            </div>
        </div>
    </div>
</div>

