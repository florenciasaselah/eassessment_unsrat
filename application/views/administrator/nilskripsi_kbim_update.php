<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa fa-edit"></i> Input Nilai Ujian Skripsi Untuk Komisi Pembimbing
    </div>

    <?php foreach ($nilskripsi_kbim as $nsb) : ?>

        <form method="post" action="<?php echo base_url('administrator/nilskripsi_kbim/update_aksi') ?>">

            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><?php echo $nsb->nama_mhs_skripsi; ?></td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td><?php echo $nsb->nim; ?></td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td><?php echo $nsb->prodi_skripsi; ?></td>
                </tr>

                <tr>
                    <td>Judul Penelitian</td>
                    <td><?php echo $nsb->judul_skripsi; ?></td>
                </tr>
            </table>

            <input type="hidden" name="nim" value="<?= $nsb->nim ?>">

            <div class="form-group">
                <label> <strong> Komponen Penilaian I </strong> </label>
                <p>Kedisiplinan</p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="hidden" name="id_nilskripsi_kbim" value="<?php echo $nsb->id_nilskripsi_kbim ?>">
                <input type="number" name="nilskripsi_kbim_1" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsb->nilskripsi_kbim_1 ?>">
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian II </strong> </label>
                <p>Kreativitas</p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kbim_2" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsb->nilskripsi_kbim_2 ?>">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian III </strong> </label>
                <p>Keberhasilan Tugas</p>
                <p> <i> <b> Bobot 40%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kbim_3" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsb->nilskripsi_kbim_3 ?>">
            </div>


            <button type="sumbit" class="btn btn-primary">Simpan Nilai</button>
            <?php echo anchor(
                'administrator/nilskripsi_kbim',
                '<div class="btn btn-secondary">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>