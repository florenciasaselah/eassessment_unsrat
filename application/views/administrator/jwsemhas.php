<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <h4> <strong>Jadwal Seminar Hasil </strong> </h4>
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
        foreach ($dfsemhas as $dfs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $dfs->tgl_semhas ?></td>
                <td><?php echo $dfs->waktu_semhas ?></td>
                <td><?php echo $dfs->nama_mhs_semhas ?></td>
                <td><?php echo $dfs->prodi_semhas ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>