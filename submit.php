<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $kontak = $_POST['kontak'];
  $gambar = $_FILES['gambar'];

  $gambarName = time() . '-' . basename($gambar['name']);
  $uploadPath = 'assets/images/' . $gambarName;

  if (move_uploaded_file($gambar['tmp_name'], $uploadPath)) {
    $dataBaru = [
      "nama" => $nama,
      "deskripsi" => $deskripsi,
      "gambar" => $gambarName,
      "kontak" => $kontak
    ];

    $file = 'data/umkm.json';
    $dataLama = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
    $dataLama[] = $dataBaru;
    file_put_contents($file, json_encode($dataLama, JSON_PRETTY_PRINT));

    header("Location: index.html");
    exit();
  } else {
    echo "Gagal mengunggah gambar.";
  }
} else {
  echo "Metode tidak diizinkan.";
}
