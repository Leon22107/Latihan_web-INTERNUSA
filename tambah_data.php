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
    <title>Membuat form pendaftaran vaksin</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand text-warning pl-3" href="index.php">Formulir Vaksinasi</a>
  </nav>

  <div class="container">
    <span class="d-block p-2 bg-primary text-white pl-3 rounded">Data Pendaftar</span>
    <form action="proses_tambah.php" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNIK">NIK :</label>
                <input type="text" name="nik" id="inputNIK" class="form-control" placeholder="Masukan NIK" required="" />
            </div>
                
            <div class="form-group col-md-6">
                <label for="inputpekerjaan">Pekerjaan :</label>
                <select name="pekerjaan" id="inputpekerjaan" class="form-control">
                    <option value="">-- Pilih Pekerjaan --</option>
                    <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="BUMN">BUMN</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputnamalengkap">Nama Lengkap :</label>
                <input type="text" name="nama" id="inputnamalengkap" class="form-control" placeholder="Masukan Nama" required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputkategori">Kategori :</label>
                <select name="kategori" id="inputkategori" class="form-control">
                    <option value="">-- Pilih Kategori --</option>
                    <option value="Karyawan">Karyawan</option>
                    <option value="Pedagang">Pedagang</option>
                    <option value="Masyarakat Umum">Masyarakat Umum</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputtanggallahir">Tanggal Lahir :</label>
                <input type="text" name="tgl_lahir" id="inputtanggallahir" class="form-control" placeholder="2000-1-1" required="">
            </div>

            <div class="form-group col-md-3">
                <label for="inputumur">Umur :</label>
                <input type="text" name="umur" id="inputumur" class="form-control" placeholder="22" required="" />
            </div>

            <div class="form-group col-md-3">
                <label for="inputnomorhp">Nomor Handphone(Whatsapp) :</label>
                <input type="text" name="no_hp" id="inputnomorhp" class="form-control" placeholder="+62 8XX" required="" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputjeniskelamin">Jenis Kelamin :</label>
                <input type="text" name="jenis_kelamin" id="inputjeniskelamin" class="form-control" placeholder="Laki-laki" required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputjenisvaksin">Jenis Vaksin :</label>
                <select name="jenis_vaksin" id="inputjenisvaksin" class="form-control">
                    <option value="">-- Pilih Jenis Vaksin --</option>
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
                <input type="text" name="alamat" id="inputalamat" class="form-control" placeholder="Masukan Alamat" required="" />
            </div>

            <div class="form-group col-md-6">
                <label for="inputemail">Email :</label>
                <input type="text" name="email" id="inputemail" class="form-control" placeholder="Masukan Email" required="" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="inputkecamatan">Kecamatan :</label>
                <select name="kecamatan" id="inputkecamatan" class="form-control">
                    <option value="">-- Pilih Lokasi Kecamatan --</option>
                    <option value="Tangerang">Tangerang</option>
                    <option value="Neglasari">Neglasari</option>
                    <option value="Benda">Benda</option>
                    <option value="Cibodas">Cibodas</option>
                    <option value="Karawaci">Karawaci</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="inputkelurahan">Kelurahan :</label>
                <select name="kelurahan" id="inputkelurahan" class="form-control">
                    <option value="">-- Pilih Lokasi Kelurahan --</option>
                    <option value="Cikokol">Cikokol</option>
                    <option value="Mekarsari">Mekarsari</option>
                    <option value="Jurumudi">Jurumudi</option>
                    <option value="Jatiuwung">Jatiuwung</option>
                    <option value="Cimone">Cimone</option>
                </select>
            </div>

            <div class="form-group col-md-3">
                <label for="RT">RT :</label>
                <select name="rt" id="RT" class="form-control">
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
                <select name="rw" id="RW" class="form-control">
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
            <a href="index.php" class="btn btn-warning">Kembali</a>
            <button type="submit" name="submit" value="submit" class="btn btn-success">Simpan</button>
        </div>


    </form>

  </div>
  </body>
</html>