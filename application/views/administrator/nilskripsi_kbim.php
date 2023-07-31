<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <h4> <strong>Penilaian Ujian Skripsi Oleh Komisi Pembimbing </strong> </h4>
    </div>

    <?php echo $this->session->flashdata('pesan'); ?>

    <div class="navbar-form navbar-right mb-4">
        <?php echo form_open('administrator/nilskripsi_kbim/search', array('class' => 'form-inline')) ?>
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
        foreach ($nilskripsi_kbim as $nsb) : ?>
            <tr>
                <td width="20px"><?php echo $no++ ?></td>
                <td><?php echo (isset($nsb->nama_mhs_skripsi) ? $nsb->nama_mhs_skripsi : '') ?></td>
                <td><?php echo (isset($nsb->nim) ? $nsb->nim : '') ?></td>
                <td><?php echo (isset($nsb->prodi_skripsi) ? $nsb->prodi_skripsi : '') ?></td>
                <td><?php echo (isset($nsb->judul_skripsi) ? $nsb->judul_skripsi : '') ?></td>
                <td width="20px">
                    <?php echo anchor(
                        'administrator/nilskripsi_kbim/detail/' . (isset($nsb->id_nilskripsi_kbim) ? $nsb->id_nilskripsi_kbim : ''),
                        '<div class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></div>'
                    ) ?>
                </td>

                <td width="20px">
                    <?php echo anchor(
                        'administrator/nilskripsi_kbim/update/' . (isset($nsb->id_nilskripsi_kbim) ? $nsb->id_nilskripsi_kbim : ''),
                        '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'
                    ) ?>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>