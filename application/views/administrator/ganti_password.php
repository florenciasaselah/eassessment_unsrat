<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Ganti Password
    </div>

    <form method="post" action="<?php echo base_url('administrator/auth/ganti_password_aksi') ?>">
        <div class="form-group">
            <label>Password Baru</label>
            <div class="input-group">
                <input type="password" name="pass_baru" id="pass_baru" placeholder="Masukkan Password Baru" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text show-hide-password" data-target="pass_baru">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <?php echo form_error('pass_baru', '<div class="text-danger small ml-3">', '</div>') ?>
        </div>

        <div class="form-group">
            <label>Ulangi Password</label>
            <div class="input-group">
                <input type="password" name="ulang_pass" id="ulang_pass" placeholder="Ulangi Password Baru" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text show-hide-password" data-target="ulang_pass">
                        <i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            <?php echo form_error('ulang_pass', '<div class="text-danger small ml-3">', '</div>') ?>
        </div>

        <button type="submit" class="btn btn-primary">Ganti Password</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(".show-hide-password").on('click', function(event) {
        event.preventDefault();
        var target = $("#" + $(this).data("target"));
        if (target.attr("type") == "text") {
            target.attr('type', 'password');
            $(this).find('i').addClass("fa-eye-slash");
            $(this).find('i').removeClass("fa-eye");
        } else if (target.attr("type") == "password") {
            target.attr('type', 'text');
            $(this).find('i').removeClass("fa-eye-slash");
            $(this).find('i').addClass("fa-eye");
        }
    });
</script>