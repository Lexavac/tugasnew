<?php
include 'koneksi.php';//memanggil
?>

<?php

  $id_b = $_GET['id_b']; // menangkap data atau emngambil data melalui url
  $sql = "SELECT * FROM brg WHERE id_b = '$id_b'";
  $query = mysqli_query($connect,$sql);
  $data = mysqli_fetch_assoc($query); // mengambil data dari sql lalu di ubah dalam bentuk baris dan nama indeks array nya di ubah dalam bentuk column

  if(mysqli_num_rows($query) < 1 ) { // jika nilai balik dari query menampilkan kurang dari 1 baris data maka akan mengeluarkan steatment 
    die("Data Tidak Ditemukan");
  }

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lexavac Web Design</title>

  <!-- --------- Unicons Icons --------- -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="shortcut icon" href="favicon.SVG" type="image/SVG+xml">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Oswald:wght@200;300;400;500;600;700&family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500;1,600&family=Roboto:ital,wght@0,100;0,300;0,500;0,700;1,100&display=swap" rel="stylesheet"> 
  <!-- --------- CSS Files --------- -->
  
  <link rel="stylesheet" href="display33.css">

</head>
<body>
  <header>
    
  
  
  <nav>
    <a href="index.php" class="brand">
      LX.
    </a>
  </div>

  <div class="container">
      <div>
      </div>
      <div class="line">
        <div></div>
      </div>
      <ul>
        <li><a class="s"href="eth.php"><img src="./st.svg" alt=""> Siswa</a></li>
        <li><a class="b" href="displaybrg1.php"><img src="./b.svg" alt=""> Barang</a></li>
      </ul>
    </div>

    <div class="aes">
        </div>
        <h1 class="ha"> <img src="sc.svg" alt=""> </i></h1>

        <div class="srcs">
        <form action="searchfn.php" GET>
          <input class="src" type="text" name="search" placeholder="     Search Now..")>
        </form>
      </div>

      <div class="sq">
        <div></div>
      </div>

      

    </div>
  </nav>


    <div class="dash">
      <div>
        <h1>Dashboard.</h1>
        <p>Hi , Welcome To Data Siswa</p>
      </div>
    </div>

    <div class="sub">
      <div></div>
      <h4> <a href="create.html">Create +</a>
      </h4> 
    </div>

    <div class="vrr">
      <div><a href="eth.php"> <img src="./ar.svg" alt=""> </a></div>
    </div>

                  
                  <div class="table">
                    <table>

                      <thead>
  
                      <tr>
                          <th>ID</th>
                          <th>Item code</th>
                          <th>Item Type</th>
                          <th>Condition</th>
                          <th>Heavy</th>
                          <th>Total</th>
                          <th>Date Of Borrow</th>
                          <th>Date Of Return</th>
                          <th>stats</th>
                        </tr>
                        
                        <tr>
                          <td><?php echo $data['id_b']?></td>
                          <td><?php echo $data['nama_barang']?></td>
                          <td><?php echo $data['jenis_barang']?></td>
                          <td><?php echo $data['keadaan']?></td>
                          <td><?php echo $data['berat']?></td>
                          <td><?php echo $data['jumlah']?></td>
                          <td><?php echo $data['tgl_p']?></td>
                          <td><?php echo $data['tgl_k']?></td>
                          <td><?php echo $data['stat']?></td>
                        </tr>

                      </thead>
                    </table>
                  </div>
                  
    <div class="user">
      <h5>Hi , Lexavac.</h5>
      <img src="acc.svg" alt="">
    </div>
</body>
</html>