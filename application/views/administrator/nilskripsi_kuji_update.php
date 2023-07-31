<div class="container-fluid">

    <div class="alert alert-dark" role="alert">
        <i class="fas fa fa-edit"></i> Input Nilai Ujian Skripsi Untuk Komisi Ujian
    </div>

    <?php foreach ($nilskripsi_kuji as $nsj) : ?>

        <form method="post" action="<?php echo base_url('administrator/nilskripsi_kuji/update_aksi') ?>">

            <table class="table table-hover table-bordered table-striped">
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td><?php echo $nsj->nama_mhs_skripsi; ?></td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td><?php echo $nsj->nim; ?></td>
                </tr>

                <tr>
                    <td>Program Studi</td>
                    <td><?php echo $nsj->prodi_skripsi; ?></td>
                </tr>

                <tr>
                    <td>Judul Penelitian</td>
                    <td><?php echo $nsj->judul_skripsi; ?></td>
                </tr>
            </table>


            <div class="center-text">
                <p> <b> PENILAIAN SKRIPSI </b></p>
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian I </strong> </label>
                <p>Format Makalah</p>
                <p> <i> a. Tata tulis : ukuran kertas,
                        kerapihan, ketik, tata letak, jumlah halaman
                    </i></p>
                <p> <i> b. Pengungkapan : sistematika
                        tulisan, ketetapan dan kejelasan ungkapan, bahasa baku yang baik dan benar
                    </i></p>
                <p> <i> <b> Bobot 10%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="hidden" name="id_nilskripsi_kuji" value="<?php echo $nsj->id_nilskripsi_kuji ?>">
                <input type="number" name="nilskripsi_kuji_1" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_1 ?>">
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian II </strong> </label>
                <p>Kreatifitas Gagasan</p>
                <p> <i> a. Komprehensif dan Keunikan</i></p>
                <p> <i> b. Struktur gagasan (gagasan
                        muncul didukung oleh argumentasi ilmiah)
                    </i></p>
                <p> <i> <b> Bobot 25%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kuji_2" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_2 ?>">
            </div>

            <input type="hidden" name="nim" value="<?= $nsj->nim ?>">

            <div class="form-group">
                <label> <strong> Komponen Penilaian III </strong> </label>
                <p>Topik yang dikemukakan</p>
                <p> <i> a. Sifat topik, rumusan judul dan
                        kesesuaian dengan ihwal bahasan
                    </i></p>
                <p> <i> b. Kejelasan uraian permasalahan</i></p>
                <p> <i> <b> Bobot 10%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="text" name="nilskripsi_kuji_3" placeholder="Masukkan Nilai dari 50-100" class="form-control">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian IV </strong> </label>
                <p>Data dan Sumber Informasi</p>
                <p> <i> a. Relevansi data dan informasi yang diacu dengan uraian tulisan</i></p>
                <p> <i> b. Keakuratan dan integritas data dan informasi</i></p>
                <p> <i> c. Kemampuan menghubungkan
                        berbagai data dan informasi
                    </i></p>
                <p> <i> <b> Bobot 25%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kuji_4" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_4 ?>">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian V </strong> </label>
                <p>Pembahasan, Kesimpulan dan Transfer Gagasan </p>
                <p> <i> a. Kemampuan menganalisis dan mensintesis serta merumuskan kesimpulan</i></p>
                <p> <i> b. Kemungkinan/prediksi transfer gagasan dan proses adopsi</i></p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kuji_5" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_5 ?>">
            </div>

            <div class="center-text">
                <p> <b> PENILAIAN UJIAN SKRIPSI </b></p>
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian I </strong> </label>
                <p>Cara Penyajian</p>
                <p> <i> a. Sistematika penyajian dan isi</i></p>
                <p> <i> b. Alat bantu</i></p>
                <p> <i> c. Penggunaan bahasa tutur yang baku</i></p>
                <p> <i> d. Cara presentasi (sikap) </i></p>
                <p> <i> e. Ketepatan waktu</i></p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kuji_6" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_6 ?>">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian II </strong> </label>
                <p>Tanya Jawab</p>
                <p> <i> a. Kebenaran jawaban dan ketepatan jawaban</i></p>
                <p> <i> b. Cara menjawab</i></p>
                <p> <i> c. Keterbukaan peserta dalam acara tanya jawab</i></p>
                <p> <i> <b> Bobot 70%</b></i></p>
                <p> <i> *Masukkan Nilai dari 50-100</i></p>
                <input type="number" name="nilskripsi_kuji_7" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="<?php echo $nsj->nilskripsi_kuji_7 ?>">
            </div>

            <button type="sumbit" class="btn btn-primary">Simpan Nilai</button>
            <?php echo anchor(
                'administrator/nilskripsi_kuji',
                '<div class="btn btn-secondary">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>