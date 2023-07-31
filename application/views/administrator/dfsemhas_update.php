<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Ubah Data Mahasiswa
    </div>

    <?php foreach ($dfsemhas as $dfs) : ?>

        <form method="post" action="<?php echo base_url('administrator/dfsemhas/update_aksi') ?>">

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="hidden" name="id_semhas" value="<?php echo $dfs->id_semhas ?>">
                <input type="text" name="nama_mhs_semhas" class="form-control" value="<?php echo $dfs->nama_mhs_semhas ?>">
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $dfs->nim ?>">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi_semhas" class="form-control" value="<?php echo $dfs->prodi_semhas ?>">
            </div>

            <div class="form-group">
                <label>Judul Penelitian</label>
                <input type="text" name="judul_semhas" class="form-control" value="<?php echo $dfs->judul_semhas ?>">
            </div>

            <div class="form-group">
                <label>Ketua Komisi Pembimbing</label>
                <input type="text" name="dospem1_semhas" class="form-control" value="<?php echo $dfs->dospem1_semhas ?>">
            </div>

            <div class="form-group">
                <label>Anggota Komisi Pembimbing</label>
                <input type="text" name="dospem2_semhas" class="form-control" value="<?php echo $dfs->dospem2_semhas ?>">
            </div>

            <div class="form-group">
                <label>Dosen Penguji 1</label>
                <input type="text" name="dosenuji1_semhas" class="form-control" value="<?php echo $dfs->dosenuji1_semhas ?>">
            </div>

            <div class="form-group">
                <label>Dosen Penguji 2</label>
                <input type="text" name="dosenuji2_semhas" class="form-control" value="<?php echo $dfs->dosenuji2_semhas ?>">
            </div>

            <div class="form-group">
                <label>Dosen Penguji 3</label>
                <input type="text" name="dosenuji3_semhas" class="form-control" value="<?php echo $dfs->dosenuji3_semhas ?>">
            </div>

            <div class="form-group">
                <label>Komisi Seminar</label>
                <input type="text" name="komisi_semhas" class="form-control" value="<?php echo $dfs->komisi_semhas ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Seminar Hasil</label>
                <input type="text" name="tgl_semhas" class="form-control" value="<?php echo $dfs->tgl_semhas ?>">
            </div>

            <div class="form-group">
                <label>Waktu Seminar Hasil</label>
                <input type="text" name="waktu_semhas" class="form-control" value="<?php echo $dfs->waktu_semhas ?>">
            </div>

            <div class="form-group">
                <label>Tempat Seminar Hasil</label>
                <input type="text" name="tempat_semhas" class="form-control" value="<?php echo $dfs->tempat_semhas ?>">
            </div>

            <button type="sumbit" class="btn btn-primary">Tambah</button>
            <?php echo anchor(
                'administrator/dfsemhas',
                '<div class="btn btn-secondary ">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>