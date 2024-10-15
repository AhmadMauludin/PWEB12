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

File routes disini berfungsi sebagai perutean fitur yang dimiliki oleh pengguna. untuk membuatnya, pastikan setiap pengguna sudah ditentukan terlebih dahulu hak akses atas fitur apa saja yang diperbolehkan untuknya. silahkan lihat file routes yang saya buat lalu sesuaikan isinya berdasarkan kebutuhan aplikasi yang kalian buat.

### Mempersiapkan folder pengelolaan data / Class

Dalam pengelolaan sebuah data/class, biasanya fitur / halaman yang diperlukan adalah sebagai berikut

1. tampil.php (v) --> termasuk fitur pencarian data di dalamnya.
2. detail.php (v)
3. tambah.php (v)
4. simpan.php (p)
5. edit.php (v)
6. update.php (p)
7. hapus.php (p)
8. print.php (v)
9. kirim.php (v)

**Ket :**

- **v** : view, merupakan file yang nantinya menghasilkan tampilan dalam aplikasi.
- **p** : process, merupakan file yang hanya proses saja yang nantinya tidak memunculkan tampilan dalam aplikasinya.

dari ke 9 file tersebut, ada beberapa file yang saling membutuhkan (tidak berdiri sendiri) yaitu tambah.php dengan simpan.php serta edit.php dengan update.php, adapun selain itu, maka mereka berdiri sendiri.

**Antara kedua file yang saling membutuhkan**
diantara kedua file yang saling membutuhkan tersebut memiliki fungsi masing - masing, misal pada pasangan file tambah.php dan simpan.php:

file tambah.php berfungsi sebagai tampilan formulir yang dapat menyimpan inputan sementara dari pengguna, selanjutnya (saat penggguna mengklik **simpan**) data yang sudah diinput dikirim ke file simpan.php, dan oleh file simpan.php file tersebut diproses agar disimpan ke dalam basisdata.

**tambah.php -> simpan.php -> database**

begitu pula pada file edit.php berfungsi sebagai tampilan formulir yang dapat menyimpan inputan sementara dari pengguna, selanjutnya (saat penggguna mengklik **ubah**) data yang sudah diinput dikirim ke file update.php, dan oleh file update.php file tersebut diproses agar disimpan ke dalam basisdata.

namun berbeda dari file tambah, file edit terlebih dahulu mengambil data dari database mengenai baris yang akan diubah, data tersebut berdasarkan parameter / kriteria (id) yang diminta saat pengguna memilih data (pada halaman tampil data) yang akan dieksekusi (ubah, detail, hapus, kirim, print). itu sebabnya menu aksi selalu berada dipinggir barisan data (agar dapat sekaligus memilih id dari data yang akan dieksekusi oleh aksi), sedangkan fitur tambah data hanya membutuhkan satu tombol dan selalu terpisah (karena tambah data tidak memerlukan id dari data yang sudah ada). untuk lebih memahaminya, silahkan baca & teliti lebih lanjut setiap file fitur pengelolaan data pada aplikasi yang saya buat (saran : gunakan / pelajari fitur kelola data pada folder users / seminar)
