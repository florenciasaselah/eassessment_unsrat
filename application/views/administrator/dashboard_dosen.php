<div class="container-fluid">
    <?php
    // Mendapatkan hari dalam bahasa Indonesia
    function getDayName($dayNumber)
    {
        $dayNames = array(
            'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
        );
        return $dayNames[$dayNumber];
    }

    // Mendapatkan bulan dalam bahasa Indonesia
    function getMonthName($monthNumber)
    {
        $monthNames = array(
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        );
        return $monthNames[$monthNumber - 1];
    }

    // Mendapatkan tanggal, bulan, dan tahun saat ini
    $dayNumber = date('w'); // Mendapatkan nomor hari (0: Minggu, 1: Senin, dst.)
    $dayName = getDayName($dayNumber); // Mendapatkan nama hari dalam bahasa Indonesia
    $date = date('d'); // Mendapatkan tanggal (01-31)
    $monthNumber = date('n'); // Mendapatkan nomor bulan (1-12)
    $monthName = getMonthName($monthNumber); // Mendapatkan nama bulan dalam bahasa Indonesia
    $year = date('Y'); // Mendapatkan tahun (contoh: 2023)

    // Menampilkan hari dan tanggal
    echo  $dayName . ', ' . $date . ' ' . $monthName . ' ' . $year;
    ?>

    <div class="alert alert-success" role="alert">
        <h3> <strong>Beranda </strong> </h3>
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Halo, <p><strong> <?php echo $this->session->userdata('nama'); ?> </strong>!</h4>
        <p> Selamat Datang di Website <strong>e-Assessment</strong> Untuk Penilaian Tugas Akhir
            Mahasiswa Jurusan Matematika, Universitas Sam Ratulangi Manado.
            Anda Login sebagai <strong> Dosen</strong> </p>
        <hr>


    </div>
</div>