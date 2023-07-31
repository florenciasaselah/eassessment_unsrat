<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-solid fa-bars"></i> Ubah Data Mahasiswa
    </div>
</div>

<?php foreach ($dfsemhas as $dfs) : ?>

    <form method="post" action="<?php echo base_url('administrator/nilsemhas/update_aksi') ?>">

        <table class="table table-hover table-bordered table-striped">
            <tr>
                <td>Nama Mahasiswa</td>
                <td><?php echo (isset($dfs->nama_mhs_semhas) ? $dfs->nama_mhs_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td><?php echo (isset($dfs->nim) ? $dfs->nim : ''); ?></td>
            </tr>

            <tr>
                <td>Program Studi</td>
                <td><?php echo (isset($dfs->prodi_semhas) ? $dfs->prodi_semhas : ''); ?></td>
            </tr>

            <tr>
                <td>Judul Penelitian</td>
                <td><?php echo (isset($dfs->judul_semhas) ? $dfs->judul_semhas : ''); ?></td>
            </tr>
        </table>
    <?php endforeach; ?>