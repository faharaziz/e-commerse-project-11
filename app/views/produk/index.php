<h2>Produk</h2>

<a href="<?php echo URL; ?>/produk/input" class="btn">Input Produk</a>

<table>
      <tr>
            <th>NO</th>
            <th>KATEGORI</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>EDIT</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['produk_id']; ?></td>
                  <td><?php echo $row['ktgr']; ?></td>
                  <td><?php echo $row['produk_kode']; ?></td>
                  <td><?php echo $row['produk_nama']; ?></td>
                  <td><?php echo $row['produk_hrg']; ?></td>
                  <td><a href="" class="btn">Edit</a></td>
            </tr>
      <?php } ?>

</table>