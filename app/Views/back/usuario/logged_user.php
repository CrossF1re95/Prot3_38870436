<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata('msg')):?>
                <div> 
                    <?= session()->getFlashdata('msg'); ?>
                </div>
            <?php endif;?>
            <br><br>
            <?php if(session()->profile_id == 1): ?>
                <div>
                    <img class="center" height="100px" width="100px" src="assets/img/admin.png">
                </div>
            <?php elseif(session()->profile_id == 2): ?>
            <div>
                <img class="center" height="100px" width="100px" src="assets/img/cliente.png">
            </div>
            <?php endif;?>
        </div>
    </div>            
</div>
