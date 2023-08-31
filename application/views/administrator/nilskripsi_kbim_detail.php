<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa-eye"></i> Data Mahasiswa
    </div>

    <table class="table table-hover table-bordered table-striped">

        <?php foreach ($detail as $dt) : ?>

            <tr>
                <td>Nama Mahasiswa</td>
                <td><?php echo $dt->nama_mhs_skripsi; ?></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><?php echo $dt->nim; ?></td>
            </tr>

            <tr>
                <td>Program Studi</td>
                <td><?php echo $dt->prodi_skripsi; ?></td>
            </tr>

            <tr>
                <td>Judul Penelitian</td>
                <td><?php echo $dt->judul_skripsi; ?></td>
            </tr>

            <tr>
                <td>Ketua Komisi Pembimbing</td>
                <td><?php echo $dt->dospem1_skripsi; ?></td>
            </tr>

            <tr>
                <td>Anggota Komisi Pembimbing</td>
                <td><?php echo $dt->dospem2_skripsi; ?></td>
            </tr>

            <tr>
                <td>Pengawas</td>
                <td><?php echo $dt->pengawas; ?></td>
            </tr>

            <tr>
                <td>Anggota Komisi Ujian Skripsi</td>
                <td><?php echo $dt->dosenuji1_skripsi; ?></td>
            </tr>

            <tr>
                <td>Anggota Komisi Ujian Skripsi</td>
                <td><?php echo $dt->dosenuji2_skripsi; ?></td>
            </tr>

            <tr>
                <td>Anggota Komisi Ujian Skripsi</td>
                <td><?php echo $dt->dosenuji3_skripsi; ?></td>
            </tr>

            <tr>
                <td>Tanggal Ujian Skripsi</td>
                <td><?php echo $dt->tgl_skripsi; ?></td>
            </tr>

            <tr>
                <td>Waktu Ujian Skripsi</td>
                <td><?php echo $dt->waktu_skripsi; ?></td>
            </tr>

            <tr>
                <td>Tempat Ujian Skripsi</td>
                <td><?php echo $dt->tempat_skripsi; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor(
        'administrator/nilskripsi_kbim',
        '<div class="btn btn-secondary">Kembali</div>'
    ) ?>
</div>