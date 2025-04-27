<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="box" style="background: #ffd0e6;">
            <h3><i class="glyphicon glyphicon-plus"></i>&nbsp;Tambahkan Pengguna Baru</h3>
            <form action="index.php?controller=user&action=store" method="POST">
                <label for="Nama">Nama</label>
                <input type="text" id="Nama" name="Nama" class="form-control"><br>
                <label for="Alamat">Alamat</label>
                <textarea rows="3" name="Alamat" class="form-control"></textarea><br>
                <label for="Kontak">Kontak</label>
                <input type="text" id="Kontak" name="Kontak" class="form-control"><br>
                <br>
                <input type="submit" name="addnew" class="btn btn-success" value="Tambahkan">
            </form>
        </div>
    </div>
</div>
