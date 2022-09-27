<?= $this->extend('templates/template') ?>

<?= $this->section('content') ?>

  <a href="/mahasiswa/create"><button type="button" class="btn btn-primary mx-5 mb-3">Tambah</button></a>
  <table class="table mx-5 w-auto">
    <thead>
      <tr>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Created At</th>
        <th scope="col">Updated At</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $nomor = 1;
      foreach($mahasiswa as $mhs){
      ?>
      <tr>
        <td><?= $mhs['npm'] ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['alamat'] ?></td>
        <td><?= $mhs['deskripsi'] ?></td>
        <td><?= $mhs['created_at'] ?></td>
        <td><?= $mhs['updated_at'] ?></td>
        <td>
          <form action="/mahasiswa/delete/<?= $mhs['id'] ?>" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Hapus</button>
          </form>

          <form action="/mahasiswa/edit/<?= $mhs['id'] ?>" method="get">
            <input type="hidden" name="_method" value="UPDATE">
            <button type="submit" class="btn btn-warning">Edit</button>
          </form>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

<?= $this->endSection() ?>