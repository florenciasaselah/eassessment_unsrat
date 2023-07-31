<div class="container-fluid">
    <div class="alert alert-dark" role="alert">
        <h4> <strong>Cetak Berita Acara </strong> </h4>
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

        <?php $no = 1;
        foreach ($berita_acara as $bac) : ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo isset($bac->nama_mhs_skripsi) ? $bac->nama_mhs_skripsi : '' ?></td>
                <td><?php echo isset($bac->nim) ? $bac->nim : '' ?></td>
                <td><?php echo isset($bac->prodi_skripsi) ? $bac->prodi_skripsi : '' ?></td>
                <td><?php echo isset($bac->judul_skripsi) ? $bac->judul_skripsi : '' ?></td>
                <td>
                    <?php echo anchor(
                        'administrator/berita_acara/cetak/' . (isset($bac->id_berita_acara) ? $bac->id_berita_acara : ''),
                        '<div class="btn btn-sm btn-primary"><i class="fas fa-print"></i></div>'
                    ) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>