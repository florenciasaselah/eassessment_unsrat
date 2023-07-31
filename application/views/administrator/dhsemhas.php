<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <h4> <strong>Daftar Hadir Seminar Hasil </strong> </h4>
    </div>

    <div class="navbar-form navbar-left mb-4">
        <?php echo form_open('administrator/dhsemhas/search', array('class' => 'form-inline')) ?>
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search fa-sm"></i></button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>




    <table class="table table-bordered table-striped table-hovered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Program Studi</th>
            <th>Judul</th>
            <th colspan="3">AKSI</th>
        </tr>

        <?php
        $no = 1;
        foreach ($dfsemhas as $dfs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $dfs->nama_mhs_semhas ?></td>
                <td><?php echo $dfs->nim ?></td>
                <td><?php echo $dfs->prodi_semhas ?></td>
                <td><?php echo $dfs->judul_semhas ?></td>
                <td width="20px"><?php echo anchor('administrator/dhsemhas/update/'
                                        . $dfs->id_semhas, '<div class="btn btn-sm btn-primary">
                                        <i class="fas fa-regular fa-pen-nib"></i></div>') ?> </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>