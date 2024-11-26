<h2>Edit Kategori</h2>

<form action="<?php echo URL; ?>/kategori/update" method="post">
    <input type="hidden" name="kat_id" value="<?php echo $data['row']['kat_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="kat_nama" value="<?php echo $data['row']['kat_nama']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="kat_keterangan" id="" cols="30" rows="10"><?php echo $data['row']['kat_keterangan']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>