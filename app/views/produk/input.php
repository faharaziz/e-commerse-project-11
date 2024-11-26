<h2>Input Produk</h2>

<form action="<?php echo URL; ?>/produk/simpan" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Kategori</td>
            <td>
                <select name="produk_id_kat" required>
                    <?php foreach ($data['listkategori']  as $kat): ?>
                        <option value="<?php echo $kat['kat_id']; ?>">
                            <?php echo $kat['kat_nama']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Kode Produk</td>
            <td><input type="text" name="produk_kode" maxlength="50" required></td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td><input type="text" name="produk_nama" maxlength="256" required></td>
        </tr>
        <tr>
            <td>Harga Produk</td>
            <td><input type="number" name="produk_hrg" required></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="produk_keterangan" rows="4" cols="50"></textarea></td>
        </tr>
        <tr>
            <td>Stok Produk</td>
            <td><input type="number" name="produk_stock" min="0" required></td>
        </tr>
        <tr>
            <td>Foto Produk</td>
            <td><input type="file" name="produk_photo" accept="image/*"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>