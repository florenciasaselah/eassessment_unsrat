<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Form Masuk Halaman Berita Acara Ujian Skripsi
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <form method="post" action="<?php echo base_url ('administrator/berita_acara/berita_acara_aksi') ?>">

        <div class="form_group">
            <label>NIM</label>
            <input type="text" name="nim_mhs_skripsi" placeholder="Masukkan NIM" class="form-control">
            <?php echo form_error('nim_mhs_skripsi', '<div class="text-danger small ml-3">','</div>')
            ?>
        </div>

        <button type="sumbit" class="btn btn-primary">Cari</button>

    </form>

</div>