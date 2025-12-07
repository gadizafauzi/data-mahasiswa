<div class="container mt-4">
    <div class="p-5 mb-4 bg-light rounded-3 shadow-sm">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Sistem Akademik Kampus</h1>
            <p class="col-md-8 fs-5 mt-3">
                Manajemen Data Mahasiswa • Informasi Akademik • Dashboard CRUD
            </p>
            <a href="index.php?p=create" class="btn btn-primary btn-lg mt-2">
                Tambah Data Mahasiswa
            </a>
        </div>
    </div>

    <div id="carouselExample" class="carousel slide mb-4 shadow-sm" data-bs-ride="carousel">
        <div class="carousel-inner rounded">

            <div class="carousel-item active">
                <img src="https://picsum.photos/900/400?random=1" class="d-block w-100" alt="kampus1">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                    <h5>Sistem Akademik </h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://picsum.photos/900/400?random=2" class="d-block w-100" alt="kampus2">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                    <h5>Manajemen Data Mahasiswa</h5>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://picsum.photos/900/400?random=3" class="d-block w-100" alt="kampus3">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-2">
                    <h5>Informasi Akademik Terintegrasi</h5>
                </div>
            </div>

        </div>

        <!-- Button Next Prev -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- 3 Info Cards -->
    <div class="row text-center">
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <img src="https://picsum.photos/400/250?random=4" class="card-img-top rounded">
                <h5 class="mt-3">Tambah Data Mahasiswa</h5>
                <p>Masukkan data mahasiswa baru ke dalam database akademik.</p>
                <a href="index.php?p=create" class="btn btn-outline-primary">Tambah</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <img src="https://picsum.photos/400/250?random=5" class="card-img-top rounded">
                <h5 class="mt-3">Data Mahasiswa</h5>
                <p>Kelola, perbarui, atau hapus data mahasiswa secara cepat.</p>
                <a href="index.php?p=mahasiswa" class="btn btn-outline-primary">Lihat Data</a>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card shadow-sm p-3">
                <img src="https://picsum.photos/400/250?random=6" class="card-img-top rounded">
                <h5 class="mt-3">Informasi Akademik</h5>
                <p>Halaman untuk informasi akademik kampus, jadwal, dan pengumuman.</p>
                <a href="Informasi/index.html" class="btn btn-outline-primary">Buka Portal</a>
            </div>
        </div>
    </div>
</div>
