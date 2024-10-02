<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Codeigniter 4 CRUD App Example - Obat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?= $this->extend('admin/layout/template') ?>

    <?= $this->Section('content') ?>
    <style>
      .content-container {
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
        }
    </style>
  </head>
  <body>

  

  <div class="container-md mt-4 p-4 rounded">
    <div class="content-container">
        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/obat-form') ?>" class="btn btn-success mb-2">Tambah Obat</a>
        </div>
        <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
          }
        ?>
      <div class="mt-3">
        <table class="table table-striped table-hover" id="obat-list">
          <thead>
              <tr>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Tanggal Kadaluarsa</th>
                <th>Harga Obat</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php if($obat): ?>
              <?php foreach($obat as $item): ?>
              <tr>
                <td><?php echo $item['kodeobat']; ?></td>
                <td><?php echo $item['namaobat']; ?></td>
                <td><?php echo $item['tanggalkadaluarsa']; ?></td>
                <td><?php echo $item['hargaobat']; ?></td>
                <td>
                <a href="<?php echo base_url('edit-obat-view/'.$item['kodeobat']);?>" class="btn btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                  <a href="<?php echo base_url('delete-obat/'.$item['kodeobat']);?>" class="btn btn-sm">
                  <i class="fas fa-trash-alt"></i>
                </a>
                  </td>
              </tr>
            <?php endforeach; ?>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
      $(document).ready( function () {
        $('#obat-list').DataTable();
    } );
  </script>
  </body>

  <?= $this->endSection(); ?>
</html>
