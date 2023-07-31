<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <h4> <strong>Nilai Seminar Hasil </strong> </h4>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <div class="navbar-form navbar-right mb-4">
        <?php echo form_open('administrator/lihat_nilsemhas/search', array('class' => 'form-inline')) ?>
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
        foreach ($nilsemhas as $nsh) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo (isset($nsh->nama_mhs_semhas) ? $nsh->nama_mhs_semhas : '') ?></td>
                <td><?php echo (isset($nsh->nim) ? $nsh->nim : '') ?></td>
                <td><?php echo (isset($nsh->prodi_semhas) ? $nsh->prodi_semhas : '') ?></td>
                <td><?php echo (isset($nsh->judul_semhas) ? $nsh->judul_semhas : '') ?></td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/lihat_nilsemhas/detail/' . (isset($nsh->id_nilsemhas) ? $nsh->id_nilsemhas : ''),
                        '<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>'
                    ) ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>