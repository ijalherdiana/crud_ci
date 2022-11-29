<title><?= $title; ?></title>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
<link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

<body>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Mahasiswa</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
                    <li class="breadcrumb-item active">List Data Mahasiswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Data Mahasiswa</h5>

                            <!-- General Form Elements -->
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fas fa-plus"></i> Tambah Data Mahasiswa</button>
                            <table class="table  my-3  ">
                                <tr class="table-primary   ">
                                    <th>NO</th>
                                    <th>NAMA MAHASISWA</th>
                                    <th>NIM</th>
                                    <th>TANGGAL LAHIR</th>
                                    <th>JURUSAN</th>
                                    <th class="text-center" colspan="3">AKSI</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <td>
                                        <?= $no++ ?>
                                    </td>
                                    <td><?= $mhs->nama ?></td>
                                    <td><?= $mhs->nim ?></td>
                                    <td><?= $mhs->tgl_lahir ?></td>
                                    <td><?= $mhs->jurusan ?></td>
                                    <td><?= anchor('mahasiswa/detail/' . $mhs->id, ' <div class="btn btn-outline-success btn-sm">DETAIL</div>') ?>
                                    </td>
                                    <td onclick="javascript: return confirm('Anda yakin ingin menghapus') ">
                                        <?= anchor('mahasiswa/hapus/' . $mhs->id, '<div class="btn btn-outline-danger btn-sm">HAPUS</i></div>') ?>
                                    </td>
                                    <td><?= anchor('mahasiswa/edit/' . $mhs->id, '<div class="btn btn-outline-primary btn-sm">EDIT</i></div>') ?>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h4 class="modal-title fs-5" id="exampleModalLabel">Form Input Data
                                            Mahasiswa</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div><br>
                                    <div class="modal-body">
                                        <?= form_open_multipart('mahasiswa/tambah_aksi'); ?>
                                        <div class="form-group">
                                            <label>Nama Mahasiswa</label>
                                            <input type="text" name="nama" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label>NIM</label>
                                            <input type="text" name="nim" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" name="tgl_lahir" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <select name="jurusan" class="form-control">
                                                <option>--Pilih Jurusan--</option>
                                                <option>Sistem Informasi</option>
                                                <option>Teknik Informatika</option>
                                                <option>Teknik Komputer</option>
                                            </select>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" name="alamat" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" name="email" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label>No. Telpon</label>
                                            <input type="text" name="no_tlp" class="form-control">
                                        </div><br>
                                        <div class="form-group">
                                            <label>Upload foto</label>
                                            <input type="file" name="foto" class="form-control">
                                        </div><br>

                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Reset</button>
                                        <button type="submit" class="btn btn-primary"
                                            onclick="javascript: return confirm('Simpan Data ?') ">Simpan</button>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </section>


    </main><!-- End #main -->

</body>