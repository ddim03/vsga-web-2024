<?php
require 'core/Mahasiswa.php';
session_start();

$mahasiswa = new Mahasiswa();
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $result = $mahasiswa->cari($nama);
} else {
    $result = $mahasiswa->read();
}
?>


<?php include "template/header.php"; ?>

<div class="container pt-5 py-2">
    <h3 class="fw-semibold text-center">Halaman Mahasiswa</h3>
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="alert alert-success alert-dismissible fade show mx-auto" role="alert">
            <strong>Berhasil!</strong> <?= $_SESSION['success'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['success']); ?>
    <?php endif ?>
    <div class="d-flex justify-content-between align-items-center mt-3">
        <form action="" method="POST" class="input-group mb-3 w-25">
            <input type="text" class="form-control" name="nama" placeholder="Cari nama mahasiswa..." value="<?= $nama ?? '' ?>">
            <button class="btn btn-sm btn-outline-primary d-flex align-items-center" type="submit">
                <span class="material-symbols-outlined fs-5">
                    search
                </span>
            </button>
        </form>
        <a href="create.php" class="btn btn-sm btn-success d-flex align-items-center gap-1 rounded-1" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff">
                <path d="M444-288h72v-156h156v-72H516v-156h-72v156H288v72h156v156Zm36.28 192Q401-96 331-126t-122.5-82.5Q156-261 126-330.96t-30-149.5Q96-560 126-629.5q30-69.5 82.5-122T330.96-834q69.96-30 149.5-30t149.04 30q69.5 30 122 82.5T834-629.28q30 69.73 30 149Q864-401 834-331t-82.5 122.5Q699-156 629.28-126q-69.73 30-149 30Zm-.28-72q130 0 221-91t91-221q0-130-91-221t-221-91q-130 0-221 91t-91 221q0 130 91 221t221 91Zm0-312Z" />
            </svg>
            Tambah
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="table table-bordered align-middle">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>Program Studi</th>
                    <th>IPK</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($result as $row) : ?>
                    <tr>
                        <td class="text-center"><?= $no ?></td>
                        <td><?= $row['nim'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td class="text-center"><?= $row['tempat_lahir'] ?></td>
                        <td class="text-center"><?= $row['tanggal_lahir'] ?></td>
                        <td><?= $row['jurusan'] ?></td>
                        <td><?= $row['program_studi'] ?></td>
                        <td><?= $row['ipk'] ?></td>
                        <td class="text-center">
                            <div class="d-flex justify-content-center gap-2">
                                <a href="update.php?nim=<?= $row['nim']; ?>" class="btn btn-sm btn-warning mb-md-2" role="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000">
                                        <path d="M216-216h51l375-375-51-51-375 375v51Zm-72 72v-153l498-498q11-11 23.84-16 12.83-5 27-5 14.16 0 27.16 5t24 16l51 51q11 11 16 24t5 26.54q0 14.45-5.02 27.54T795-642L297-144H144Zm600-549-51-51 51 51Zm-127.95 76.95L591-642l51 51-25.95-25.05Z" />
                                    </svg>
                                    Edit
                                </a>
                                <a href="delete.php?nim=<?php echo $row['nim']; ?>" class="btn btn-sm btn-danger mb-md-2" role="button" onclick="confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#ffffff">
                                        <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                    </svg>
                                    Hapus
                                </a>
                            </div>
                        </td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php include "template/footer.php"; ?>