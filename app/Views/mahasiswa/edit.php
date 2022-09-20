<form class="mx-5" action="/mahasiswa/store" method="post">
  <div class="form-group">
    <label for="npm">NPM Mahasiswa</label>
    <input type="number" class="form-control" id="npm" name="npm" value="<?= $npm ?>" readonly>
  </div>
  <div class="form-group">
    <label for="nama">Nama Mahasiswa</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat Mahasiswa</label>
    <textarea class="form-control" id="alamat" rows="3" name="alamat"><?= $alamat ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>