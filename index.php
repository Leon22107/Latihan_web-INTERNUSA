<?php
include("koneksi.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <title>Formulir Vaksin</title>
  </head>
  <body>
    <div class="container">
        <div class="pr-3 text-center">
            <h2 class="font-weight-bold pb-3">DATA VAKSINASI</h2>
            <a class="btn btn-primary" href="tambah_data.php" role="button"> + &nbsp; Tambah Data</a>
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Jenis Vaksin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM data_vaksin ORDER BY id ASC";
                    $result = mysqli_query($koneksi, $query);

                    if(!$result){
                        die ("Query Error: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                    }

                    $no = 1;

                    while($row = mysqli_fetch_assoc($result))
                    {
                ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['nik']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['jenis_kelamin']; ?></td>
                        <td><?php echo $row['jenis_vaksin']; ?></td>
                        <td>
                            <a href="edit_data.php?id=<?php echo $row['id']; ?>">Edit</a>
                            <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>

                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
  </body>
</html>