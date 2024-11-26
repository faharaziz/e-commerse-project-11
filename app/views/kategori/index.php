<h2>Kategori</h2>

<a href="<?php echo URL; ?>/kategori/input" class="btn">Input Kategori</a>

<table>
      <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KETERANGAN</th>
            <th>EDIT</th>
      </tr>

      <?php foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $row['kat_id']; ?></td>
                  <td><?php echo $row['kat_nama']; ?></td>
                  <td><?php echo $row['kat_keterangan']; ?></td>
                  <td><a href="<?php echo URL; ?>/kategori/edit/<?php echo $row['kat_id']; ?>" class="btn">Edit</a></td>
            </tr>
      <?php } ?>

</table>