<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  // Alamat email penerima
  $to = "dewamahendraa23@gmail.com";

  // Subjek email
  $subject = "Pesan dari $nama melalui formulir kontak";

  // Pesan email
  $message = "
  Nama: $nama\n
  Email: $email\n
  Pesan:\n\n$pesan
  ";

  // Headers email
  $headers = "From: $email\n";
  $headers .= "Reply-To: $email\n";

  // Kirim email
  mail($to, $subject, $message, $headers);

  // Pesan sukses
  echo "<p>Pesan Anda telah berhasil dikirim. Terima kasih telah menghubungi kami.</p>";
}
?>
