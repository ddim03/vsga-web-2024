<?php

require_once 'Database.php';

class Mahasiswa extends Database
{

    public function create($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk)
    {
        $stmt = $this->conn->prepare("INSERT INTO mahasiswa (nim, nama, tempat_lahir, tanggal_lahir, jurusan, program_studi, ipk) VALUES
       (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssd", $nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }

    public function read()
    {
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }

    public function update($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk)
    {
        $stmt = $this->conn->prepare("UPDATE mahasiswa SET nama = ?, tempat_lahir = ?, tanggal_lahir = ?, jurusan = ?, program_studi = ?, ipk = ? WHERE nim = ?");
        $stmt->bind_param("ssssssd", $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk, $nim);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }


    public function delete($nim)
    {
        $stmt = $this->conn->prepare("DELETE FROM mahasiswa WHERE nim = ?");
        $stmt->bind_param("s", $nim);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error: " . $stmt->error;
        }
    }

    public function getDataByNIM($nim)
    {
        $stmt = $this->conn->prepare("SELECT * FROM mahasiswa WHERE nim = ?");
        $stmt->bind_param("s", $nim);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function cari($nama)
    {
        $sql = "SELECT * FROM mahasiswa WHERE nama LIKE '%" . $nama . "%'";
        $result = $this->conn->query($sql);
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
}
