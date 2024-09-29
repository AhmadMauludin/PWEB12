# Panduan Penggunaan Git dan Github

1. Pertama, buka www.github.com pada web browser
2. Lalu, daftar (sign up) menggunakan email yang anda miliki
3. lalu login (sign in) menggunakan akun github yang sudah didaftarkan sebelumnya
4. Jika tidak punya, anda boleh menngunakan akun github milik saya

   Akun :
   username : ahmadmaldin
   email : ahmad.mauludin247@guru.smk.belajar.id
   password : SaheelaMeera69

5. **Buat repositori baru**, beri nama sesuai nama projek (saran : menggunakan nama dinas).
6. **Install aplikasi git** yang dapat anda download di situs resminya https://git-scm.com/ lalu instal.
7. Setelah git terinstall, **Buka file manager**, arahkan ke Folder **htdocs**.
8. Buka terminal git dengan cara **klik kanan > open gitbash here**
9. **Inisiasikan username** github, caranya ketikan

```
git config --global user.name "ahmadmaldin"
```

10. **Inisiasikan useremail** github, caranya ketikan

```
git config --global user.email ahmad.mauludin247@guru.smk.belajar.id
```

11. Cek hasil confignya, caranya ketik

```
git config —list
```

12. Baca teks yang muncul, Jika username dan emailnya sudah sesuai, maka tandanya git anda sudah tertaut dengan github.
13. Unduh atau clone repositori github ke komputer, caranya ketik

```
git clone https://github.com/username/namarepositori.git namarepositori
```

14. Lalu lihat pada file manager, maka akan ada folder repositori yang sebelumnya dikloning. Lalu masuk ke folder tersebut.
15. Close terminal gitbash nya, lalu buka lagi. (Jika tidak mau diclose, bisa ketik `cd namafolderrepositori` maka terminal akan berpindah ke dalam repositori tersebut).

Selanjutnya silahkan gunakan kode berikut untuk penggunaan git

- **Perbarui repository** yang telah diunduh ke dalam komputer menggunakan perintah `git pull` contoh:

```
git pull origin main
```

- **Mengunggah Perubahan**

Jangan lupa untuk melakukan pull terlebih dahulu sebelum melakukan push.

- **Tambah file baru atau ubah file**

```
git add <nama file>
```

- **Tambah beberapa file baru atau ubah beberapa file sekaligus**

```
git add .
```

- **Konfirmasi penambahan atau perubahan file**

```
git commit -m "<pesan commit>"
```

- **Ubah dan konfirmasi modifikasi beberapa file sekaligus**

```
git commit -a -m "<pesan commit>"
```

- **Kirim perubahan ke dalam repository**

```
git push origin main
```

atau

```
git push -u origin main
```

Setelah melakukan push pertama kali, terkadang akan muncul popup dari browser untuk melakukan login ke dalam akun github melalui browser, maka lakukan login dengan menggunakan email/username dan password github yang sudah anda inisiasikan sebelumnya. juga terkadang github meminta kode konfirmasi yang terdiri dari 6 digit angka yang dikirim oleh github ke email yang digunakan akun github tersebut. (jika menggunakan email saya, silahkan tanyakan kepada saya)
