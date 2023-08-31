<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="container-fluid">

    <!-- Tambahkan peringatan di sini -->
    <div class="alert alert-danger" role="alert">
        <i class="icon fas fa-exclamation-triangle"></i>
        <strong>PERHATIAN!</strong> Harap mengisi nilai dengan benar. Pengisian nilai hanya bisa dilakukan sekali untuk setiap mahasiswa!
    </div>

    <div class="alert alert-dark" role="alert">
        <i class="fas fa fa-edit"></i> Input Nilai Ujian Skripsi Untuk Komisi Pembimbing
    </div>

    <?php foreach ($nilskripsi_kbim as $nsb) : ?>

        <form method="post" action="<?php echo base_url('administrator/nilskripsi_kbim/update_aksi') ?>" id="captcha-form">

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
                <input type="hidden" name="id_nilskripsi_kbim" value="<?php echo $nsb->id_nilskripsi_kbim ?>">
                <input type="number" name="nilskripsi_kbim_1" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="">
            </div>


            <div class="form-group">
                <label> <strong> Komponen Penilaian II </strong> </label>
                <p>Kreativitas</p>
                <p> <i> <b> Bobot 30%</b></i></p>
                <input type="number" name="nilskripsi_kbim_2" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="">
            </div>

            <div class="form-group">
                <label> <strong> Komponen Penilaian III </strong> </label>
                <p>Keberhasilan Tugas</p>
                <p> <i> <b> Bobot 40%</b></i></p>
                <input type="number" name="nilskripsi_kbim_3" placeholder="Masukkan Nilai dari 50-100" class="form-control" min="50" max="100" value="">
            </div>


            <div class="form-group">
                <label><strong>Verifikasi Captcha</strong></label>
                <p>Silakan hitung hasil dari penjumlahan di bawah ini:</p>
                <p><span id="captcha-question"></span></p>
                <input type="hidden" id="captcha-sum">
                <input type="number" id="captcha-answer" class="form-control" required>
            </div>
            <div class="g-recaptcha" data-sitekey="6Lf9nq4nAAAAAOaMkxKFCi3j1YizgSEbj55TTUVF"></div>

            <button type="sumbit" class="btn btn-primary" value="Update">Simpan Nilai</button>
            <?php echo anchor(
                'administrator/nilsemhas',
                '<div class="btn btn-secondary">Kembali</div>'
            ) ?>
        </form>

    <?php endforeach; ?>
</div>

<script>
    // Generate nomor random
    var num1 = Math.floor(Math.random() * 10) + 1;
    var num2 = Math.floor(Math.random() * 10) + 1;
    var sum = num1 + num2;

    // Set the captcha question text
    document.getElementById("captcha-question").textContent = num1 + " + " + num2 + " = ?";

    // Store the captcha sum in a hidden field
    document.getElementById("captcha-sum").value = sum;

    // Validate captcha on form submission
    var captchaForm = document.getElementById("captcha-form");
    captchaForm.addEventListener("submit", function(event) {
        var userAnswer = parseInt(document.getElementById("captcha-answer").value);
        var captchaSum = parseInt(document.getElementById("captcha-sum").value);
        if (userAnswer !== captchaSum) {
            event.preventDefault(); // Prevent form submission
            alert("Perhitungan Captcha Salah! Silahkan coba lagi.");
        }
    });
</script>