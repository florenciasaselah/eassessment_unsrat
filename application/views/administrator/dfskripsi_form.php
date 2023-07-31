<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Tambah Data Mahasiswa
    </div>

    <form method="post" action="<?php echo base_url('administrator/dfskripsi/input_aksi') ?>">
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mhs skripsi" placeholder="Masukkan Nama Mahasiswa" class="form-control">
            <?php echo form_error(
                'nama_mhs_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>NIM</label>
            <input type="text" name="nim" placeholder="Masukkan NIM" class="form-control">
            <?php echo form_error(
                'nim',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Program Studi</label>
            <input type="text" name="prodi_skripsi" placeholder="Masukkan Program Studi" class="form-control">
            <?php echo form_error(
                'prodi_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Judul Penelitian</label>
            <input type="text" name="judul_skripsi" placeholder="Masukkan Judul" class="form-control">
            <?php echo form_error(
                'judul_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Ketua Komisi Pembimbing</label>
            <input type="text" name="dospem1_skripsi" placeholder="Masukkan Nama Komisi Pembimbing" class="form-control">
            <?php echo form_error(
                'dospem1_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Anggota Komisi Pembimbing</label>
            <input type="text" name="dospem2_skripsi" placeholder="Masukkan Nama Komisi Pembimbing" class="form-control">
            <?php echo form_error(
                'dospem2_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Pengawas</label>
            <input type="text" name="pengawas" placeholder="Masukkan Nama Pengawas" class="form-control">
            <?php echo form_error(
                'pengawas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Anggota Komisi Ujian Skripsi</label>
            <input type="text" name="dosenuji1_skripsi" placeholder="Masukkan Nama Komisi Ujian" class="form-control">
            <?php echo form_error(
                'dosenuji1_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Anggota Komisi Ujian Skripsi</label>
            <input type="text" name="dosenuji2_skripsi" placeholder="Masukkan Nama Komisi Ujian" class="form-control">
            <?php echo form_error(
                'dosenuji2_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Anggota Komisi Ujian Skripsi</label>
            <input type="text" name="dosenuji3_skripsi" placeholder="Masukkan Nama Komisi Ujian" class="form-control">
            <?php echo form_error(
                'dosenuji3_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Tanggal Ujian Skripsi</label>
            <input type="date" name="tgl_skripsi" placeholder="Masukkan Tanggal" class="form-control">
            <?php echo form_error(
                'tgl_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Waktu Ujian Skripsi</label>
            <input type="time" name="waktu_skripsi" placeholder="Masukkan Waktu" class="form-control">
            <?php echo form_error(
                'waktu_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Tempat Ujian Skripsi</label>
            <input type="text" name="tempat_skripsi" placeholder="Masukkan Tempat" class="form-control">
            <?php echo form_error(
                'tempat_skripsi',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <button type="sumbit" class="btn btn-primary">Tambah</button>
        <?php echo anchor(
            'administrator/dfskripsi',
            '<div class="btn btn-secondary ">Kembali</div>'
        ) ?>
    </form>
</div>