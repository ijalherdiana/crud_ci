<title><?= $title; ?></title>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Mahasiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
                <li class="breadcrumb-item active">Edit Data Mahasiswa</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Edit Data Mahasiswa</h5>

                <!-- General Form Elements -->
                <section class="content">
                    <?php foreach ($mahasiswa as $mhs) { ?>

                    <form action="<?php echo base_url() . 'mahasiswa/update'; ?>" method="post">
                        <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                            <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
                        </div>
                        <div class="form-group">
                            <label>NIM</label>
                            <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
                        </div><br>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" name="tgl_lahir" class="form-control"
                                value="<?php echo $mhs->tgl_lahir ?>">
                        </div><br>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select name="jurusan" class="form-control" required>
                                <option <?php if ($mhs->jurusan == "Sistem Informasi") {
                                                echo 'selected="selected"';
                                            } ?>>Sistem Informasi</option>
                                <option <?php if ($mhs->jurusan == "Teknik Informatika") {
                                                echo 'selected="selected"';
                                            } ?>>Teknik Informatika</option>
                                <option <?php if ($mhs->jurusan == "Teknik Komputer") {
                                                echo 'selected="selected"';
                                            } ?>>Teknik Komputer</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
                        </div><br>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
                        </div><br>
                        <div class="form-group">
                            <label>No. Telpon</label>
                            <input type="text" name="no_tlp" class="form-control" value="<?php echo $mhs->no_tlp ?>">
                        </div><br>
                        <label>Edit Foto</label>
                        <table class="table">
                            <tr>
                                <td>
                                    <img src="<?php echo base_url(); ?>assets/foto/<?php echo $mhs->foto; ?>"
                                        width="100" height="120">
                                </td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <input type="text" name="old" value="<?= $mhs->foto; ?>" readonly>
                        </div>
                        <div class="form-group">
                            <input type="file" name="foto" class="form-control">
                        </div><br>

                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary"
                            onclick="javascript: return confirm('Simpan Perubahan?') ">Simpan</button>
                    </form>
                    <?php } ?>
                </section>
            </div>

        </div>

        </div>


    </section>


</main><!-- End #main -->