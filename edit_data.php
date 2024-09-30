<?php

include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = ($_GET["id"]);

    $query = "SELECT * FROM data_vaksin WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database.');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukan data id.');window.location='index.php';</script>"; 
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <title>Form pendaftaran vaksin</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-warning pl-3" href="index.php">Formulir Vaksinasi</a>
  </nav>

  <div class="container">
    <span class="d-block p-2 bg-primary text-white pl-3 rounded">Data Pendaftar : <span class="font-weight-bold"><?php echo $data['nama']; ?> </span></span>
    <form action="proses_edit.php" method="post" enctype="multipart/form-data">
        <input name="id" value="<?php echo $data['id']; ?>" hidden>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNIK">NIK :</label>
                <input type="text" name="nik" id="inputNIK" class="form-control" placeholder="Masukan NIK" value="<?php echo $data['nik']; ?>" required="" />
            </div>
                
            <div class="form-group col-md-6">
                <label for="inputpekerjaan">Pekerjaan :</label>
                <select name="pekerjaan" id="inputpekerjaan" value="<?php echo $data['pekerjaan']; ?>" class="form-control">
                    <option value="<?php echo $data['pekerjaan']; ?>"><?php echo $data['pekerjaan']; ?></option>
                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="BUMN">BUMN</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputnamalengkap">Nama Lengkap :</label>
                <input type="text" name="nama" id="inputnamalengkap" value="<?php echo $data['nama']; ?>" class="form-control" required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputkategori">Kategori :</label>
                <select name="kategori" id="inputkategori" class="form-control" value="<?php echo $data['kategori']; ?>">
                    <option value="<?php echo $data['kategori']; ?>"><?php echo $data['kategori']; ?></option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputtanggallahir">Tanggal Lahir :</label>
                <input type="text" name="tgl_lahir" id="inputtanggallahir" class="form-control" value="<?php echo $data['tgl_lahir']; ?>" required="">
            </div>

            <div class="form-group col-md-3">
                <label for="inputumur">Umur :</label>
                <input type="text" name="umur" id="inputumur" value="<?php echo $data['umur']; ?>" class="form-control" required="" />
            </div>

            <div class="form-group col-md-3">
                <label for="inputnomorhp">Nomor Handphone(Whatsapp) :</label>
                <input type="text" name="no_hp" id="inputnomorhp" value="<?php echo $data['no_hp']; ?>" class="form-control" required="" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputjeniskelamin">Jenis Kelamin :</label>
                <input type="text" name="jenis_kelamin" id="inputjeniskelamin" value="<?php echo $data['jenis_kelamin']; ?>" class="form-control"  required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputjenisvaksin">Jenis Vaksin :</label>
                <select name="jenis_vaksin" id="inputjenisvaksin" value="<?php echo $data['jenis_vaksin']; ?>" class="form-control">
                    <option value="<?php echo $data['jenis_vaksin']; ?>"><?php echo $data['jenis_vaksin']; ?></option>
                    <option value="Pfizer">Pfizer</option>
                    <option value="Sinovac">Sinovac</option>
                    <option value="Moderna">Moderna</option>
                    <option value="AstraZaneca">AstraZaneca</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputalamat">Alamat Domisili :</label>
                <input type="text" name="alamat" id="inputalamat" class="form-control" value="<?php echo $data['alamat']; ?>" required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputemail">Email :</label>
                <input type="text" name="email" id="inputemail" class="form-control" value="<?php echo $data['email']; ?>" required="" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputkecamatan">Kecamatan :</label>
                <select name="kecamatan" id="inputkecamatan" value="<?php echo $data['kecamatan']; ?>" class="form-control">
                    <option value="<?php echo $data['kecamatan']; ?>"><?php echo $data['kecamatan']; ?></option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Neglasari">Neglasari</option>
                    <option value="Benda">Benda</option>
                    <option value="Cibodas">Cibodas</option>
                    <option value="Karawaci">Karawaci</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputkelurahan">Kelurahan :</label>
                <select name="kelurahan" id="inputkelurahan" value="<?php echo $data['kelurahan']; ?>" class="form-control">
                    <option value="<?php echo $data['kelurahan']; ?>"><?php echo $data['kelurahan']; ?></option>
                    <option value="Cikokol">Cikokol</option>
                    <option value="Mekarsari">Mekarsari</option>
                    <option value="Jurumudi">Jurumudi</option>
                    <option value="Jatiuwung">Jatiuwung</option>
                    <option value="Cimone">Cimone</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="RT">RT :</label>
                <select name="rt" id="RT" value="<?php echo $data['rt']; ?>" class="form-control">
                    <option value="<?php echo $data['rt']; ?>"><?php echo $data['rt']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="RW">RW :</label>
                <select name="rw" id="RW" value="<?php echo $data['rw']; ?>" class="form-control">
                    <option value="<?php echo $data['rw']; ?>"><?php echo $data['rw']; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <button type="reset" name="reset" value="reset" class="btn btn-success">Reset</button>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
        </div>


    </form>

  </div>
  </body>
</html>