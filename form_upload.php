
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="icon" type="icon/png" href="img/pika.ico">

        <title>Form Upload</title>
    </head>
    <body>
         <section class="upload" id="upload" style="min-height: 635px">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-2 text-center">
                        <h5>UPLOAD</h5>
                        <br>
                    </div>  
                </div>
                <div class="row justify-content-center">
                    <div class="col-6  text-white">
                        <form method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name">Gambar</label>
                                <input type="file" id="gambar" name="gambar" class="form-control" style="border: none;">
                                <p>Note: Aspek Rasio 16:9!</p>
                            </div>
                            <div class="form-group">
                                <label for="name">Keterangan</label>
                                <textarea id="ket" name="keterangan" class="form-control" required="required"></textarea>
                            </div>
                            <input type="submit" name="tombol"/>
                        </form>
                        <?php
                        include('koneksi.php');
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_gambar");
                        include('koneksi.php');
                        if(isset($_POST['tombol']))
                        {
                            if(!isset($_FILES['gambar']['tmp_name'])){
                                echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
                            }
                            else
                            {
                                $file_name = $_FILES['gambar']['name'];
                                $file_size = $_FILES['gambar']['size'];
                                $file_type = $_FILES['gambar']['type'];
                                if ($file_size < 8048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
                                {
                                    $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
                                    $keterangan = $_POST['keterangan'];
                                    mysqli_query($koneksi,"insert into tb_gambar (gambar,nama_gambar,tipe_gambar,ukuran_gambar,keterangan) values ('$image','$file_name','$file_type','$file_size','$keterangan')");
                                    header("location:index.php");
                                }
                                else
                                {
                                    echo '<span style=""><b>Ukuruan File / Tipe File Tidak Sesuai !</b></span>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-2 text-center">
                        <h5>TABLE DATABASE</h5>
                        <br>
                    </div>  
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-10">
                        <table border="2" class="table text-white table-striped table-dark">
                            <tr class="text-center">
                                <th>No</th>
                                <th>Keterangan</th>
                                <th>Tipe</th>
                                <th>Ukuran</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                            $no = 1;
                            while($row = mysqli_fetch_array($query))
                            {
                                ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td><?php echo $row['keterangan']; ?></td>
                                    <td><?php echo $row['tipe_gambar']; ?></td>
                                    <td><?php echo $row['ukuran_gambar']; ?></td>
                                    <td class="text-center"><a href="delete_gambar.php?id_gambar=<?php echo $row['id_gambar']; ?>">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </section>

         <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="js/jquery-3.1.0.js"></script>
        <script src="js/jquery.easing.1.3.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>