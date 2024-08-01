## Pertanyaan
1. Apa perbedaan pada metode oop dan prosedural ? <br/>
   **Jawaban** :
   - Modularitas: OOP lebih modular karena menggunakan kelas, sementara prosedural lebih linier dan tidak terstruktur.
   - Data dan Fungsi: OOP menggabungkan data dan fungsi dalam objek, sedangkan prosedural memisahkannya.
   - Keamanan Data: OOP memiliki enkapsulasi untuk melindungi data, sementara prosedural tidak.
   - Reusability: OOP memungkinkan penggunaan ulang kode dengan pewarisan dan polimorfisme, sedangkan prosedural kurang fleksibel dalam hal ini.

## Soal
1. Buatlah sebuah program untuk mengisi data baru pada table partisipant dengan menggunakan metode oop dan prosedural <br/>
   **Jawaban** : <br/>
   Procedural
   ```bash
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dbpro";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO participants (name, email) VALUES ('dwi', 'dwi@gmail.com'),";

        if (mysqli_query($conn, $sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        mysqli_close($conn)
   ``` 
   OOP
   ```bash
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dboo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";

        $sql = "INSERT INTO participants (name, email) VALUES ('dwi', 'dwi@gmail.com')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
   ``` 
2. Tampilkan kode untuk membuat data secara urut dari abjad A-Z <br/>
   **Jawaban** :
   ```bash
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dboo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "Connected successfully";

        $sql = "SELECT * FROM participants ORDER BY name ASC";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . " - Nama: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
   ```