<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa fa-edit"></i> Input Nilai Seminar Hasil
    </div>

    <?php foreach ($nilsemhas as $nsh) : ?>

        <form method="post" action="<?php echo base_url('administrator/nilsemhas/update_aksi') ?>">

            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><?php echo (isset($nsh->nama_mhs_semhas) ? $nsh->nama_mhs_semhas : ''); ?></td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td><?php echo (isset($nsh->nim) ? $nsh->nim : ''); ?></td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td><?php echo (isset($nsh->prodi_semhas) ? $nsh->prodi_semhas : ''); ?></td>
                </tr>

                <tr>
                    <td>Judul Penelitian</td>
                    <td><?php echo (isset($nsh->judul_semhas) ? $nsh->judul_semhas : ''); ?></td>
                </tr>
            </table>

            <div class="form-group">
                <label> <strong> Komponen Penilaian I </strong> </label>
                <p>Format Makalah</p>
                <p> <i> a. Tata-tulis: ukuran kertas, kerapihan, ketik, tata letak, jumlah halaman</i></p>
                <p> <i> b. Pengungkapan: sistematika tulisan, ketepatan dan kejelasan ungkapan, bahasa baku yang baik dan benar</i></p>
                <p> <i> <b> Bobot 10%</b></i></p>
                <input type="hidden" name="id_nilsemhas" value="<?php echo $nsh->id_nilsemhas ?>">
                <input type="number" name="nilsemhas_1" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsh->nilsemhas_1 ?>">
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian II </strong> </label>
                <p>Cara Penyajian</p>
                <p> <i> a. Sistematika penyajian dan isi</i></p>
                <p> <i> b. Alat bantu</i></p>
                <p> <i> c. Penggunaan bahasa tutur yang baku</i></p>
                <p> <i> d. Cara presentasi (sikap) </i></p>
                <p> <i> e. Ketepatan waktu</i></p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <input type="number" name="nilsemhas_2" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsh->nilsemhas_2 ?>">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian III </strong> </label>
                <p>Tanya Jawab</p>
                <p> <i> a. Kebenaran jawaban dan ketepatan jawaban</i></p>
                <p> <i> b. Cara menjawab</i></p>
                <p> <i> c. Keterbukaan penyaji dalam acara tanya jawab</i></p>
                <p> <i> <b> Bobot 60%</b></i></p>
                <input type="number" name="nilsemhas_3" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsh->nilsemhas_3 ?>">
            </div>


            <button type="sumbit" class="btn btn-primary" value="Update">Simpan Nilai</button>
            <?php echo anchor(
                'administrator/nilsemhas',
                '<div class="btn btn-secondary">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>