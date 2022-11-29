<title><?= $title; ?></title>
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
                    <li class="breadcrumb-item">Mahasiswa</li>
                    <li class="breadcrumb-item active">Detail Data Mahasiswa</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Detail Mahasiswa</h5>

                            <!-- General Form Elements -->
                            <table class="table  my-3  ">
                                <tr>
                                    <th>NAMA MAHASISWA</th>
                                    <td><?= $detail->nama ?></td>
                                </tr>
                                <tr>
                                    <th>NIM</th>
                                    <td><?= $detail->nim ?></td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td><?= $detail->tgl_lahir ?></td>
                                </tr>
                                <tr>
                                    <th>Jurusan</th>
                                    <td><?= $detail->jurusan ?></td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td><?= $detail->alamat ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $detail->email ?></td>
                                </tr>
                                <tr>
                                    <th>Nomor Telpon</th>
                                    <td><?= $detail->no_tlp ?></td>
                                </tr>
                                <tr>
                                    <td><img src="<?= base_url() ?>assets/foto/<?= $detail->foto; ?>" width="90"
                                            height="110" alt=""></td>
                                    <td></td>
                                </tr>
                            </table>
                            <a href="<?= base_url('mahasiswa/index') ?>" class="btn btn-primary">Kembali</a>
                        </div>

                    </div>

                </div>


        </section>


    </main><!-- End #main -->

</body>