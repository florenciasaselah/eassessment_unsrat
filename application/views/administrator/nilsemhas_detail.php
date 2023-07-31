<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa-eye"></i> Data Mahasiswa
    </div>

    <table class="table table-hover table-bordered table-striped">

        <?php foreach ($detail as $dt) : ?>

            <tr>
                <td>Nama Mahasiswa</td>
                <td><?php echo (isset($dt->nama_mhs_semhas) ? $dt->nama_mhs_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><?php echo (isset($dt->nim) ? $dt->nim : ''); ?></td>
            </tr>

            <tr>
                <td>Program Studi</td>
                <td><?php echo (isset($dt->prodi_semhas) ? $dt->prodi_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Judul Penelitian</td>
                <td><?php echo (isset($dt->judul_semhas) ? $dt->judul_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Ketua Komisi Pembimbing</td>
                <td><?php echo (isset($dt->dospem1_semhas) ? $dt->dospem1_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Anggota Komisi Pembimbing</td>
                <td><?php echo (isset($dt->dospem2_semhas) ? $dt->dospem2_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Dosen Penguji 1</td>
                <td><?php echo (isset($dt->dosenuji1_semhas) ? $dt->dosenuji1_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Dosen Penguji 2</td>
                <td><?php echo (isset($dt->dosenuji2_semhas) ? $dt->dosenuji2_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Dosen Penguji 3</td>
                <td><?php echo (isset($dt->dosenuji3_semhas) ? $dt->dosenuji3_semhas : ''); ?></td>
            </tr>


            <tr>
                <td>Komisi Seminar</td>
                <td><?php echo (isset($dt->komisi_semhas) ? $dt->komisi_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Tanggal Seminar Hasil</td>
                <td><?php echo (isset($dt->tgl_semhas) ? $dt->tgl_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Waktu Seminar Hasil</td>
                <td><?php echo (isset($dt->waktu_semhas) ? $dt->waktu_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Tempat</td>
                <td><?php echo (isset($dt->tempat_semhas) ? $dt->tempat_semhas : ''); ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor(
        'administrator/nilsemhas',
        '<div class="btn btn-secondary">Kembali</div>'
    ) ?>
</div>