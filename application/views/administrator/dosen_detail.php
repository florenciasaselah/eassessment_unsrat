<div class="container-fluid">

    <div class="alert alert-success" role="alert">
        <i class="fas fa-eye"></i> Data Dosen
    </div>

    <table class="table table-hover table-bordered table-striped">

        <?php foreach ($detail as $dt) : ?>

            <tr>
                <td>Nama Dosen</td>
                <td><?php echo $dt->nama; ?></td>
            </tr>

            <tr>
                <td>NIP</td>
                <td><?php echo $dt->username; ?></td>
            </tr>

        <?php endforeach; ?>
    </table>

    <?php echo anchor(
        'administrator/dosen',
        '<div class="btn btn-secondary">Kembali</div>'
    ) ?>
</div>