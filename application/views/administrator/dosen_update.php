<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Ubah Data Dosen
    </div>

    <?php foreach ($user as $dds) : ?>

        <form method="post" action="<?php echo base_url('administrator/dosen/update_aksi') ?>">

            <div class="form-group">
                <label>Nama Dosen</label>
                <input type="hidden" name="id_user" value="<?php echo $dds->id_user ?>">
                <input type="text" name="nama_dosen" class="form-control" value="<?php echo $dds->nama ?>">
            </div>

            <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip_dosen" class="form-control" value="<?php echo $dds->username ?>">
            </div>





            <button type="sumbit" class="btn btn-primary">Simpan</button>
            <?php echo anchor(
                'administrator/dosen',
                '<div class="btn btn-secondary ">Kembali</div>'
            ) ?>

        </form>

    <?php endforeach; ?>
</div>