## Pertanyaan
1. Apa perbedaan penggunaan MYSQLi dan PDO? <br/>
   **Jawaban** : <br>
   MYSQLi (MySQL Improved Extension):
   - Database Support: MYSQLi hanya mendukung database MySQL.
   - API: Menyediakan API berbasis prosedural dan berorientasi objek.
   - Fitur: Mendukung prepared statements, multiple statements, dan transaksi.
   - Kecepatan: Biasanya lebih cepat untuk operasi MySQL karena dioptimalkan khusus untuk MySQL.
   - Penggunaan: Lebih mudah digunakan jika aplikasi hanya menggunakan MySQL karena fitur-fitur spesifik MySQL tersedia secara langsung.
  
   PDO (PHP Data Objects):
   - Database Support: Mendukung banyak database selain MySQL, seperti PostgreSQL, SQLite, MSSQL, dan lainnya.
   - API: Hanya menyediakan API berorientasi objek.
   - Fitur: Mendukung prepared statements dan transaksi.
   - Kecepatan: Sedikit lebih lambat untuk operasi MySQL karena harus mendukung berbagai jenis database.
   - Penggunaan: Lebih fleksibel dan portabel karena mendukung banyak jenis database. Lebih cocok jika aplikasi mungkin perlu berganti database di masa depan.
2. Menurut Anda, jika membandingkan MYSQLi dan PDO, manakah yang akan anda
pilih?berikan alasannya. <br>
  **Jawaban** : <br/>
  Saya memilih PDO karena mendukung banyak jenis database, dan PDO mendukung API berorientasi objek yang biasanya lebih mudah dikelola dan lebih modular.
