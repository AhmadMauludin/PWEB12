# Dari mana mulai ngodingna?

- Sebelum anda mulai mengkoding, pastikan basis data sudah dibuat sesuai dengan kebutuhan.
- Siapkan UML (Usecase, Class dan Activity Diagram) sebagai acuan pemodelan aplikasi yang akan dibuat.

## Mulai Mengkoding

### Menyiapkan Konfigurasi

1. **Siapkan Folder config** untuk penyimpanan file database.php (file tersebut digunakan sebagai konfigurasi penghubung antara aplikasi dengan database). sebenarnya file tersebut bebas disimpan dimana saja (selama masih di dalam folder aplikasi), namun nanti perlu disesuaikan bagaimana pemanggilan file tersebut ketika dibutuhkan.
2. Masuk ke folder config, lalu **buat file database.php**, didalamnya tuliskan kode seperti pada file [config/database.php](../config/database.php) di apk saya.
3. **Ubah nama database** pada baris ke 6 (Pada apk saya : dispekael) dengan nama database yang anda buat

```
    $database = "dispekael";
```

### Menyiapkan File Utama

1. Buat file **index.php**

   _file ini digunakan sebagai halaman utama dan yang pertama kali akan diakses ketika tidak ada permintaan file tertentu ketika memanggil direktori aplikasi pada localhost_

2. Buat file **login.php**

   _file ini adalah tampilan halaman login, digunakan untuk menginput data login pengguna_

3. Buat file **cek_login.php**

   _file ini digunakan pengecekan id & password login yang diinput pengguna, file ini juga yang mengarahkan user ke halaman index.php (jika login berhasil)_

4. Buat file **daftar.php**

   _file ini digunakan untuk mendaftarkan diri sebagai user, yang nantinya akan disimpan pada tabel user_

5. Buat file **proses-daftar.php**

   _file ini digunakan untuk proses penyimpanan data baru pada tabel user_

Isinya copy paste saja dari apk saya.

### Menu & Routes

Sebenarnya, tampilan halaman index.php hanyalah berisi footer saja, adapun menu dan isinya adalah pemanggilan dari file menu dan routes. pemanggilan kedua file tersebut ke dalam tampilan index.php disesuaikan dengan level pengguna yang login. jika yang login adalah Admin, maka menu dan routes yang ditampilkan adalah khusus untuk admin. dan jika yang login nya adalah pegawai maka menu dan routes yang ditampilkan juga adalah khusus untuk pegawai. (Silahkan pelajari isi setiap file pada folder menu dan routes)
