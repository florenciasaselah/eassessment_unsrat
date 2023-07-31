<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <h4> <strong>Kelola Ujian Skripsi </strong> </h4>
    </div>

    <div class="navbar-form navbar-left mb-4">
        <?php echo form_open('administrator/dfskripsi/search', array('class' => 'form-inline')) ?>
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="Search">
            <div class="input-group-append">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fas fa-search fa-sm"></i></button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>
    <?php echo anchor('administrator/dfskripsi/input', '<button class="btn btn-sm btn-primary mb-3">
        <i class="fas fa-plus fa-sm"></i> Tambah Mahasiswa</button>') ?>


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
        foreach ($dfskripsi as $dfs) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo $dfs->nama_mhs_skripsi ?></td>
                <td><?php echo $dfs->nim ?></td>
                <td><?php echo $dfs->prodi_skripsi ?></td>
                <td><?php echo $dfs->judul_skripsi ?></td>
                <td width="20px"><?php echo anchor('administrator/dfskripsi/detail/'
                                        . $dfs->id_skripsi, '<div class="btn btn-sm btn-info">
                <i class="fa fa-eye"></i></div>') ?> </td>
                <td width="20px"><?php echo anchor('administrator/dfskripsi/update/'
                                        . $dfs->id_skripsi, '<div class="btn btn-sm btn-primary">
                <i class="fa fa-edit"></i></div>') ?> </td>
                <td width="20px" onclick="javascript: return confirm('Anda yakin ingin menghapus?')">
                    <?php echo anchor(
                        'administrator/dfskripsi/delete/' . $dfs->id_skripsi,
                        '<div class="btn btn-sm btn-danger">
                <i class="fa fa-trash"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>