<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <h4> <strong>Jadwal Ujian Skripsi </strong> </h4>
    </div>


    <?php echo $this->session->flashdata('pesan'); ?>



    <table class="table table-bordered table-striped table-hovered">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Nama</th>
            <th>Prodi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($dfskripsi as $dfs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $dfs->tgl_skripsi ?></td>
                <td><?php echo $dfs->waktu_skripsi ?></td>
                <td><?php echo $dfs->nama_mhs_skripsi ?></td>
                <td><?php echo $dfs->prodi_skripsi ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>