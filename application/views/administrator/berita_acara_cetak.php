<?php
require_once(APPPATH . 'libraries/fpdf.php');

// Membuat objek PDF
$pdf = new FPDF();
$pdf->AddPage();

// Menambahkan logo dan teks di bagian atas halaman
$pdf->Image(base_url('assets/img/mipa.png'), 7, 12, 25, 0); // Ganti dengan path sesuai dengan lokasi logo
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 6, 'KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI', 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'UNIVERSITAS SAM RATULANGI MANADO', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'JURUSAN MATEMATIKA', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'Alamat Jl. Kampus Unsrat Bahu-Manado 95115', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'No. Telp. Kajur: 081111110710 (Deiby), Sekjur: 08975292236 (Yohanes)', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'Website : www.fmipa-unsrat.com  Email : fmipaunsrat@yahoo.com', 0, 1, 'C');
$pdf->Ln();

// Menambahkan garis tebal panjang
$pdf->SetLineWidth(1);
$pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth() - 10, $pdf->GetY());
$pdf->Ln();

// teks berita acara
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(0, 9, 'BERITA ACARA UJIAN SARJANA KOMPUTER (S.Kom)', 0, 1, 'C');

// teks berita acara
$pdf->SetFont('Arial', '', 12);
foreach ($berita_acara as $bac) {
    $tgl_skripsi = isset($bac->tgl_skripsi) ? date('d F Y', strtotime($bac->tgl_skripsi)) : '';
    $pdf->MultiCell(0, 5, "Pada hari ini $tgl_skripsi telah dilaksanakan Ujian Sarjana untuk melengkapi persyaratan guna memperoleh gelar Sarjana Komputer (S.Kom) terhadap mahasiswa :", 0, 'J');
}


// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// Menambahkan data mahasiswa ke berita acara
$pdf->SetFont('Arial', 'B', 12);
foreach ($berita_acara as $bac) {
    $pdf->MultiCell(0, 5, '                 Nama Mahasiswa   : ' . (isset($bac->nama_mhs_skripsi) ? $bac->nama_mhs_skripsi : ''), 0, 'C');
    $pdf->MultiCell(0, 5, 'NIM                         : ' . (isset($bac->nim) ? $bac->nim : ''), 0, 'C');
    $pdf->MultiCell(0, 5, '         Program Studi         : ' . (isset($bac->prodi_skripsi) ? $bac->prodi_skripsi : ''), 0, 'C');
}
// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');


// teks berita acara
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 5, 'Dalam pelaksanaan tugas akhir hingga Ujian Sarjana mahasiswa yang bersangkutan telah memperoleh nilai dengan rincian sebagai berikut :', 0, 'J');

/// Menghitung nilai total
$nilai_seminar_hasil = isset($nilai['nilai_seminar_hasil']) ? $nilai['nilai_seminar_hasil'] : 0;
$nilai_penelitian = isset($nilai['nilai_penelitian']) ? $nilai['nilai_penelitian'] : 0;
$nilai_ujian = isset($nilai['nilai_ujian']) ? $nilai['nilai_ujian'] : 0;
$nilai_skripsi = isset($nilai['nilai_skripsi']) ? $nilai['nilai_skripsi'] : 0;

$nilai_total = (3 * $nilai_penelitian + 1 * $nilai_seminar_hasil + 1 * $nilai_skripsi + 1 * $nilai_ujian) / 6;

// Menentukan huruf mutu
if ($nilai_total >= 80) {
    $huruf_mutu = 'A';
} elseif ($nilai_total >= 76 && $nilai_total <= 79) {
    $huruf_mutu = 'B+';
} elseif ($nilai_total >= 70 && $nilai_total <= 75) {
    $huruf_mutu = 'B';
} elseif ($nilai_total >= 65 && $nilai_total <= 69) {
    $huruf_mutu = 'C+';
} elseif ($nilai_total >= 60 && $nilai_total <= 64) {
    $huruf_mutu = 'C';
} else {
    $huruf_mutu = 'Tidak Diketahui';
}

// Menambahkan nilai mahasiswa ke berita acara
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 5, '1.           Nilai Seminar Hasil          : ' . $nilai_seminar_hasil, 0, 'L');
$pdf->MultiCell(0, 5, '2.           Nilai Penelitian                : ' . $nilai_penelitian, 0, 'L');
$pdf->MultiCell(0, 5, '3.           Nilai Ujian Skripsi            : ' . $nilai_ujian, 0, 'L');
$pdf->MultiCell(0, 5, '4.           Nilai Skripsi                     : ' . $nilai_skripsi, 0, 'L');

// Teks berita acara
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 5, 'Dan sesuai dengan peraturan akademik FMIPA UNSRAT, mahasiswa yang bersangkutan dinyatakan :', 0, 'J');
if ($nilai_total > 70) {
    $pdf->MultiCell(0, 4, 'LULUS', 0, 'C');
} else {
    $pdf->MultiCell(0, 4, 'TIDAK LULUS', 0, 'C');
}
$pdf->MultiCell(0, 5, 'Dengan nilai [' . $nilai_total . '], huruf mutu [' . $huruf_mutu . '].', 0, 'C');

// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');


// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');


// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'Komisi Ujian                                             :', 0, 'L');

// Menambahkan data dosen ke berita acara
$pdf->SetFont('Arial', '', 12);
foreach ($berita_acara as $bac) {
    $pdf->MultiCell(0, 5, 'Penanggung Jawab                                   : Dr. Gerald H. Tamuntuan, S.Si, M.Si', 0, 'L');
    $pdf->MultiCell(0, 5, 'Pengarah                                                   : Dr. Winsy Ch.D. Weku, S.Si, M.Si, M.Cs', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Akademik & Kerjasama)', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     Dr. Nelson Nainggolan, M.Si', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Administrasi Umum & Keuangan)', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     Dr. Rooije R.H. Rumende, S.Si, M.Kes', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Kemahasiswaan & Alumni)', 0, 'J');
    $pdf->MultiCell(0, 5, 'Pengawas                                                  : ' . (isset($bac->pengawas) ? $bac->pengawas : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Ketua (Pembimbing Utama)                       : ' . (isset($bac->dospem1_skripsi) ? $bac->dospem1_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Sekretaris (Pembimbing Pendamping)       : ' . (isset($bac->dospem2_skripsi) ? $bac->dospem2_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Anggota                                                      : ' . (isset($bac->dosenuji1_skripsi) ? $bac->dosenuji1_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, '                                                                    ' . (isset($bac->dosenuji2_skripsi) ? $bac->dosenuji2_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, '                                                                    ' . (isset($bac->dosenuji3_skripsi) ? $bac->dosenuji3_skripsi : ''), 0, 'L');
}

// teks berita acara
$pdf->SetFont('Arial', 'B', 16);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'Pimpinan                             ', 0, 'J');
$pdf->MultiCell(0, 5, 'Jurusan Matematika                             ', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 16);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'Dr. Deiby T. Salaki, M.Si                             ', 0, 'J');
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'NIP. 1972117 200112 2 001                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');




// Menambahkan logo dan teks di bagian atas halaman
$pdf->Image(base_url('assets/img/mipa1.png'), 7, 12, 25, 0);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 6, 'KEMENTERIAN PENDIDIKAN, KEBUDAYAAN, RISET DAN TEKNOLOGI', 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'UNIVERSITAS SAM RATULANGI MANADO', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'FAKULTAS MATEMATIKA DAN ILMU PENGETAHUAN ALAM', 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 5, 'JURUSAN MATEMATIKA', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'Alamat Jl. Kampus Unsrat Bahu-Manado 95115', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'No. Telp. Kajur: 081111110710 (Deiby), Sekjur: 08975292236 (Yohanes)', 0, 1, 'C');
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(0, 4, 'Website : www.fmipa-unsrat.com  Email : fmipaunsrat@yahoo.com', 0, 1, 'C');
$pdf->Ln();

// Menambahkan garis tebal panjang
$pdf->SetLineWidth(1);
$pdf->Line(10, $pdf->GetY(), $pdf->GetPageWidth() - 10, $pdf->GetY());
$pdf->Ln();

// teks berita acara
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(0, 9, 'LAMPIRAN BERITA ACARA UJIAN SARJANA KOMPUTER (S.Kom)', 0, 1, 'C');

// teks berita acara
$pdf->SetFont('Arial', '', 12);
foreach ($berita_acara as $bac) {
    $tgl_skripsi = isset($bac->tgl_skripsi) ? date('d F Y', strtotime($bac->tgl_skripsi)) : '';
    $pdf->MultiCell(0, 5, "Pada hari ini $tgl_skripsi telah dilaksanakan Ujian Sarjana untuk melengkapi persyaratan guna memperoleh gelar Sarjana Komputer (S.Kom) terhadap mahasiswa :", 0, 'J');
}


// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// Menambahkan data mahasiswa ke berita acara
$pdf->SetFont('Arial', 'B', 12);
foreach ($berita_acara as $bac) {
    $pdf->MultiCell(0, 5, '                 Nama Mahasiswa   : ' . (isset($bac->nama_mhs_skripsi) ? $bac->nama_mhs_skripsi : ''), 0, 'C');
    $pdf->MultiCell(0, 5, 'NIM                         : ' . (isset($bac->nim) ? $bac->nim : ''), 0, 'C');
    $pdf->MultiCell(0, 5, '         Program Studi         : ' . (isset($bac->prodi_skripsi) ? $bac->prodi_skripsi : ''), 0, 'C');
}
// teks berita acara
$pdf->SetFont('Arial', 'B', 9);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

$status_lulus = ($nilai_total > 70) ? 'LULUS' : 'TIDAK LULUS';
// teks berita acara
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(0, 5, 'Dan mahasiswa yang bersangkutan sudah dinyatakan ' . $status_lulus . ' dalam ujian tersebut dengan ketentuan sebagai berikut.', 0, 'J');
$pdf->MultiCell(0, 5, '1. Skripsi harus diperbaiki sesuai usul/saran dari Komisi Ujian', 0, 'J');
$pdf->MultiCell(0, 5, '2. Skripsi yang sudah diperbaiki dan ditanda tangani oleh Komisi Pembimbing harus dimasukkan selambat-lambatnya 2 (dua bulan setelah Ujian Sarjana dan apabila sampai tanggal tersebut tidak dipenuhi maka ujian dinyatakan batal dan karena itu harus diulangi.', 0, 'J');
$pdf->MultiCell(0, 5, '3. Penyerahan skripsi yang telah diperbaiki menjadi syarat untuk bersangkutan diusulkan ke Yudisium Sarjana', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');


/// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'Komisi Ujian                                             :', 0, 'L');

// Menambahkan data dosen ke berita acara
$pdf->SetFont('Arial', '', 12);
foreach ($berita_acara as $bac) {
    $pdf->MultiCell(0, 5, 'Penanggung Jawab                                   : Dr. Gerald H. Tamuntuan, S.Si, M.Si', 0, 'L');
    $pdf->MultiCell(0, 5, 'Pengarah                                                   : Dr. Winsy Ch.D. Weku, S.Si, M.Si, M.Cs', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Akademik & Kerjasama)', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     Dr. Nelson Nainggolan, M.Si', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Administrasi Umum & Keuangan)', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     Dr. Rooije R.H. Rumende, S.Si, M.Kes', 0, 'J');
    $pdf->MultiCell(0, 5, '                                                                     (Wakil Dekan Bidang Kemahasiswaan & Alumni)', 0, 'J');
    $pdf->MultiCell(0, 5, 'Pengawas                                                  : ' . (isset($bac->pengawas) ? $bac->pengawas : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Ketua (Pembimbing Utama)                       : ' . (isset($bac->dospem1_skripsi) ? $bac->dospem1_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Sekretaris (Pembimbing Pendamping)       : ' . (isset($bac->dospem2_skripsi) ? $bac->dospem2_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, 'Anggota                                                      : ' . (isset($bac->dosenuji1_skripsi) ? $bac->dosenuji1_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, '                                                                    ' . (isset($bac->dosenuji2_skripsi) ? $bac->dosenuji2_skripsi : ''), 0, 'L');
    $pdf->MultiCell(0, 5, '                                                                    ' . (isset($bac->dosenuji3_skripsi) ? $bac->dosenuji3_skripsi : ''), 0, 'L');
}
// teks berita acara
$pdf->SetFont('Arial', 'B', 16);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 2, 'Pimpinan                             ', 0, 'R');
$pdf->MultiCell(0, 2, 'Mahasiswa                             ', 0, 'L');
$pdf->MultiCell(0, 2, 'Jurusan Matematika                             ', 0, 'R');
$pdf->MultiCell(0, 2, 'Yang bersangkutan                             ', 0, 'L');

// teks berita acara
$pdf->SetFont('Arial', 'B', 16);
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');
$pdf->MultiCell(0, 5, '                             ', 0, 'J');

// teks berita acara
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 2, 'Dr. Deiby T. Salaki, M.Si                             ', 0, 'R');
$pdf->SetFont('Arial', 'B', 12);
$pdf->MultiCell(0, 5, 'NIP. 1972117 200112 2 001                             ', 0, 'R');
$pdf->SetFont('Arial', 'B', 12);
foreach ($berita_acara as $bac) {
    $pdf->MultiCell(0, 2, '' . (isset($bac->nama_mhs_skripsi) ? $bac->nama_mhs_skripsi : ''), 0, 'L');
}



// Menutup objek PDF
$pdf->Output();
