<?php
require 'core/Mahasiswa.php';
session_start();

$mahasiswa = new Mahasiswa();
$nim = $_GET['nim'];
$data = $mahasiswa->getDataByNIM($nim);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $program_studi = $_POST['program_studi'];
    $ipk = $_POST['ipk'];

    $result = $mahasiswa->update($nim, $nama, $tempat_lahir, $tanggal_lahir, $jurusan, $program_studi, $ipk);

    if ($result) {
        $_SESSION['success'] = "Mahasiswa bernama $nama diupdate";
        header("Location: index.php");
    } else {
        $_SESSION['error'] = $result;
    }
}

?>



<?php include "template/header.php"; ?>

<div class="container mt-5 py-5">
    <h3 class="text-center fw-semibold mb-4">Tambah Mahasiswa</h3>
    <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show mx-auto" role="alert" style="width: 500px;">
            <strong>Gagal!</strong> Cek kembali data yang anda masukan.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif ?>
    <div class="d-flex justify-content-center">
        <form action="" method="POST" style="width: 500px;" class="border px-3 py-4 rounded-1">
            <div class="mb-3">
                <label for="nim" class="form-label fw-medium">NIM <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded-1" id="nim" name="nim" required readonly value="<?= $data['nim']; ?>">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label fw-medium">Nama <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded-1" id="nama" name="nama" required value="<?= $data['nama']; ?>">
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tempat_lahir" class="form-label fw-medium">Tempat Lahir <span class="text-danger">*</span></label>
                    <input type="text" class="form-control rounded-1" id="tempat_lahir" name="tempat_lahir" required value="<?= $data['tempat_lahir']; ?>">
                </div>
                <div class="col">
                    <label for="tanggal_lahir" class="form-label fw-medium">Tanggal Lahir <span class="text-danger">*</span></label>
                    <input type="date" class="form-control rounded-1" id="tanggal_lahir" name="tanggal_lahir" required value="<?= $data['tanggal_lahir']; ?>">
                </div>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label fw-medium">Jurusan <span class="text-danger">*</span></label>
                <input type="text" class="form-control rounded-1" id="jurusan" name="jurusan" required value="<?= $data['jurusan']; ?>">
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="program_studi" class="form-label fw-medium">Program Studi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control rounded-1" id="program_studi" name="program_studi" required value="<?= $data['program_studi']; ?>">
                </div>
                <div class="col">
                    <label for="ipk" class="form-label fw-medium">IPK <span class="text-danger">*</span></label>
                    <input type="number" class="form-control rounded-1" id="ipk" name="ipk" step=".01" required value="<?= $data['ipk']; ?>">
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="index.php" class="btn btn-outline-secondary rounded-1" type="button">Batal</a>
                <button type="submit" class="btn btn-primary rounded-1">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php include "template/footer.php"; ?>