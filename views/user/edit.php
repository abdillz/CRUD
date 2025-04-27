<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box" style="background: #ffd0e6;">
            <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Edit Data Pengguna</h3>
            <form action="index.php?controller=user&action=update&id=<?= $user['User_ID'] ?>" method="POST">
                <input type="hidden" value="<?= $user['User_ID'] ?>" name="userid">
                <label for="Nama">Nama</label>
                <input type="text" id="Nama" name="Nama" value="<?= $user['Nama'] ?>" class="form-control"><br>
                <label for="Alamat">Alamat</label>
                <textarea rows="4" name="Alamat" class="form-control"><?= $user['Alamat'] ?></textarea><br>
                <label for="Kontak">Kontak</label>
                <input type="text" id="Kontak" name="Kontak" value="<?= $user['Kontak'] ?>" class="form-control"><br>
                <br>
                <input type="submit" name="update" class="btn btn-success" value="Update">
            </form>
        </div>
    </div>
</div>