<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah UMKM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container py-5">
    <h2>Tambah UMKM</h2>
    <form action="submit.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Nama UMKM</label>
        <input type="text" name="nama" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" required></textarea>
      </div>
      <div class="mb-3">
        <label class="form-label">Gambar</label>
        <input type="file" name="gambar" class="form-control" required>
      </div>
      <div class="mb-3">
        <label class="form-label">Kontak</label>
        <input type="text" name="kontak" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="index.html" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</body>
</html>
