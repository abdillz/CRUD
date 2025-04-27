<h2>Daftar Seluruh Pengguna</h2>
<table class="table table-bordered table-striped">
    <tr>
        <th style="border: 1px solid black; text-align: center; background: #fd82b1">Nama</th>
        <th style="border: 1px solid black; text-align: center; background: #fd82b1">Alamat</th>
        <th style="border: 1px solid black; text-align: center; background: #fd82b1">Kontak</th>
        <th style="border: 1px solid black; text-align: center; background: #fd82b1" width="70px">Delete</th>
        <th style="border: 1px solid black; text-align: center; background: #fd82b1" width="70px">Edit</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td style='border: 1px solid black;'><?= $user['Nama'] ?></td>
        <td style='border: 1px solid black;'><?= $user['Alamat'] ?></td>
        <td style='border: 1px solid black;'><?= $user['Kontak'] ?></td>
        <td style='border: 1px solid black;'>
            <form action="index.php?controller=user&action=destroy&id=<?= $user['User_ID'] ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                <input type="hidden" name="userid" value="<?= $user['User_ID'] ?>">
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </td>
        <td style='border: 1px solid black;'>
            <a href="index.php?controller=user&action=edit&id=<?= $user['User_ID'] ?>" class="btn btn-info">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>