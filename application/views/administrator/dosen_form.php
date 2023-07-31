<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Tambah Data Dosen
    </div>

    <form method="post" action="<?php echo base_url('administrator/dosen/input_aksi') ?>">
        <div class="form-group">
            <label>Nama Dosen</label>
            <input type="text" name="nama" placeholder="Masukkan Nama Dosen" class="form-control">
            <?php echo form_error(
                'nama',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>NIP</label>
            <input type="text" name="username" placeholder="Masukkan NIP" class="form-control">
            <?php echo form_error(
                'username',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control">
                <div class="input-group-append">
                    <span class="input-group-text" id="togglePassword">
                        <i class="fa fa-eye-slash"></i>
                    </span>
                </div>
            </div>
            <?php echo form_error(
                'md5(password)',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control">
                <option value="dosen">Dosen</option>
                <option value="admin">Admin</option>
            </select>
            <?php echo form_error('level', '<div class="text-danger small" ml-3>') ?>
        </div>



        <button type="submit" class="btn btn-primary">Tambah</button>
        <?php echo anchor(
            'administrator/dosen',
            '<div class="btn btn-secondary ">Kembali</div>'
        ) ?>
    </form>
</div>

<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>