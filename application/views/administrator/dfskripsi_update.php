<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Ubah Data Mahasiswa
    </div>

    <?php foreach ($dfskripsi as $dfs) : ?>

        <form method="post" action="<?php echo base_url('administrator/dfskripsi/update_aksi') ?>">

            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input type="hidden" name="id_skripsi" value="<?php echo $dfs->id_skripsi ?>">
                <input type="text" name="nama_mhs_skripsi" class="form-control" value="<?php echo $dfs->nama_mhs_skripsi ?>">
            </div>

            <div class="form-group">
                <label>NIM</label>
                <input type="text" name="nim" class="form-control" value="<?php echo $dfs->nim ?>">
            </div>

            <div class="form-group">
                <label>Program Studi</label>
                <input type="text" name="prodi_skripsi" class="form-control" value="<?php echo $dfs->prodi_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Judul Penelitian</label>
                <input type="text" name="judul_skripsi" class="form-control" value="<?php echo $dfs->judul_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Ketua Komisi Pembimbing</label>
                <input type="text" name="dospem1_skripsi" class="form-control" value="<?php echo $dfs->dospem1_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Anggota Komisi Pembimbing</label>
                <input type="text" name="dospem2_skripsi" class="form-control" value="<?php echo $dfs->dospem2_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Pengawas</label>
                <input type="text" name="pengawas" class="form-control" value="<?php echo $dfs->pengawas ?>">
            </div>

            <div class="form-group">
                <label>Anggota Komisi Ujian Skripsi</label>
                <input type="text" name="dosenuji1_skripsi" class="form-control" value="<?php echo $dfs->dosenuji1_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Anggota Komisi Ujian Skripsi</label>
                <input type="text" name="dosenuji2_skripsi" class="form-control" value="<?php echo $dfs->dosenuji2_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Anggota Komisi Ujian Skripsi</label>
                <input type="text" name="dosenuji3_skripsi" class="form-control" value="<?php echo $dfs->dosenuji3_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Tanggal Ujian Skripsi</label>
                <input type="text" name="tgl_skripsi" class="form-control" value="<?php echo $dfs->tgl_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Waktu Ujian Skripsi</label>
                <input type="text" name="waktu_skripsi" class="form-control" value="<?php echo $dfs->waktu_skripsi ?>">
            </div>

            <div class="form-group">
                <label>Tempat Ujian Skripsi</label>
                <input type="text" name="tempat_skripsi" class="form-control" value="<?php echo $dfs->tempat_skripsi ?>">
            </div>

            <button type="sumbit" class="btn btn-primary">Tambah</button>
            <?php echo anchor(
                'administrator/dfskripsi',
                '<div class="btn btn-secondary ">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>