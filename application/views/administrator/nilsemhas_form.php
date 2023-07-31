<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Tambah Data Mahasiswa
    </div>

    <form method="post" action="<?php echo base_url('administrator/dfsemhas/input_aksi') ?>">
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama_mhs semhas" placeholder="Masukkan Nama Mahasiswa" class="form-control">
            <?php echo form_error(
                'nama_mhs_semhas',
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
            <input type="text" name="prodi_semhas" placeholder="Masukkan Program Studi" class="form-control">
            <?php echo form_error(
                'prodi_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Judul Penelitian</label>
            <input type="text" name="judul_semhas" placeholder="Masukkan Judul" class="form-control">
            <?php echo form_error(
                'judul_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Ketua Komisi Pembimbing</label>
            <input type="text" name="dospem1_semhas" placeholder="Masukkan Nama Komisi Pembimbing" class="form-control">
            <?php echo form_error(
                'dospem1_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Anggota Komisi Pembimbing</label>
            <input type="text" name="dospem2_semhas" placeholder="Masukkan Nama Komisi Pembimbing" class="form-control">
            <?php echo form_error(
                'dospem2_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Dosen Penguji 1</label>
            <input type="text" name="dosenuji1_semhas" placeholder="Masukkan Nama Dosen Penguji" class="form-control">
            <?php echo form_error(
                'dosenuji1_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Dosen Penguji 2</label>
            <input type="text" name="dosenuji2_semhas" placeholder="Masukkan Nama Dosen Penguji" class="form-control">
            <?php echo form_error(
                'dosenuji2_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Dosen Penguji 3</label>
            <input type="text" name="dosenuji3_semhas" placeholder="Masukkan Nama Dosen Penguji" class="form-control">
            <?php echo form_error(
                'dosenuji3_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>


        <div class="form-group">
            <label>Komisi Seminar</label>
            <input type="text" name="komisi_semhas" placeholder="Masukkan Nama Komisi Seminar" class="form-control">
            <?php echo form_error(
                'komisi_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Tanggal Seminar Hasil</label>
            <input type="date" name="tgl_semhas" placeholder="Masukkan Tanggal" class="form-control">
            <?php echo form_error(
                'tgl_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Waktu Seminar Hasil</label>
            <input type="time" name="waktu_semhas" placeholder="Masukkan Waktu" class="form-control">
            <?php echo form_error(
                'waktu_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <div class="form-group">
            <label>Tempat Seminar Hasil</label>
            <input type="text" name="tempat_semhas" placeholder="Masukkan Tempat" class="form-control">
            <?php echo form_error(
                'tempat_semhas',
                '<div class="text-danger small" ml-3>'
            ) ?>
        </div>

        <button type="sumbit" class="btn btn-primary">Tambah</button>
        <?php echo anchor(
            'administrator/dfsemhas',
            '<div class="btn btn-secondary ">Kembali</div>'
        ) ?>
    </form>
</div>