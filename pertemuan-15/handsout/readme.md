## Pengerjaan Tugas
1. Tugas 1 <br/>
   ![tugas 1](/pertemuan-15/handsout/doc/tugas1.png)
2. Tugas 2 <br/>
   ![tugas 2.1](/pertemuan-15/handsout/doc/tugas2-1.png) <br/>
   ![tugas 2.2](/pertemuan-15/handsout/doc/tugas2-2.png)
3. Tugas 3 <br/>
   ![tugas 2.2](/pertemuan-15/handsout/doc/tugas3.png)
4. Tugas 4 <br/>
   ![tugas 4](/pertemuan-15/handsout/doc/tugas4-1.png) <br/>
   ![tugas 4](/pertemuan-15/handsout/doc/tugas4-2.png)
5. Tugas 5 <br/>
   ![tugas 5.1](/pertemuan-15/handsout/doc/tugas5-1.png) <br/>
   ![tugas 5.2](/pertemuan-15/handsout/doc/tugas5-2.png)
6. Tugas 6 <br/>
   Kesimpulan : untuk melakukan binding parameter dapat secara langsung seperti
   ```bash
    $stmt->execute([
        'username' => $username,
        'email' => $email
        ]);
   ```
   atau dengan menggunakan fungsi bindBaram(), seperti
   ```bash
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
   ```