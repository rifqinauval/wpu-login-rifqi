<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


  <div class="row">
    <div class="col-lg">
      <?php if (validation_errors()) : ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php endif; ?>

      <?= $this->session->flashdata('message'); ?>

      <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Tambah Produk</a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Merek</th>
            <th scope="col">Tipe</th>
            <th scope="col">Ukuran</th>
            <th scope="col">Jenis</th>
            <th scope="col">Warna</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($produk as $pr) : ?>
            <tr>
              <th scope="row"><?= $i; ?></th>
              <td><?= $pr['merek']; ?></td>
              <td><?= $pr['tipe']; ?></td>
              <td><?= $pr['ukuran']; ?></td>
              <td><?= $pr['jenis']; ?></td>
              <td><?= $pr['warna']; ?></td>
              <td><?= $pr['harga']; ?></td>
              <td>
                <a href="<?= base_url(); ?>admin/ubah/<?= $pr['id']; ?>" class="badge badge-success">edit</a>
                <a href="<?= base_url(); ?>admin/hapus/<?= $pr['id']; ?>" class="badge badge-danger" onclick="return confirm('Apakah anda yakin ingin menghapus produk ini ?')">delete</a>
              </td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>
        </tbody>
      </table>

    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->

<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Masukkan Produk Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/data_produk'); ?>" method="post">
        <div class="modal-body">

          <div class="form-group">
            <input type="text" class="form-control" id="merek" name="merek" placeholder="Merek Produk">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Tipe Produk">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran Produk">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis Produk">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="warna" name="warna" placeholder="Warna Produk">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Produk">
          </div>



        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">ADD</button>
        </div>
      </form>
    </div>
  </div>
</div>