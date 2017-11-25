<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="bootstrap-3.3.7-dist/css/bootstrap.css" href="boostrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title>Pemilik</title>
  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
</style>
<body>
  <?php 
require_once "connection1.php";
if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['saham'])){
require_once "connection1.php";
  $sql = $connection->prepare("INSERT INTO pemilik values(?,?,?,?)");
  $sql->execute([$_POST['no_ktp'], $_POST['nama'] ,$_POST['alamat'], $_POST['saham']]);
    }
    ?>
  <div class="container">
  <center><img src="2.jpg" class="img-responsive" alt="Responsive image"></center>
  <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="#">Home</a></li>
    <li role="presentation"><a href="#">Data Penyedia</a></li>
    <li role="presentation"><a href="#">Lelang Baru</a></li>
    <li role="presentation"><a href="#">Inbox</a></li>
    <li role="presentation"><a href="#">Log Akses</a></li>
    <li role="presentation"><a href="#">Ganti Password</a></li>
  </ul>
  <ol class="breadcrumb">
  <li><a href="index.php">Identitas Perusahaan</a></li>
   <li><a href="index.php">Ijin Usaha</a></li>
    <li><a href="index.php">Akta</a></li>
      <li><a href="index.php">Pemilik</a></li>
    <li><a href="index2.php">Pengurus</a></li>
   <li><a href="index3.php">Tenaga Ahli</a></li>
  <li><a href="index4.php">Peralatan</a></li>
   <li><a href="index.php">Pengalaman</a></li>
    <li><a href="index.php">Pajak</a></li>
  </ol>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index2.php" style="font-family: Bernard MT Condensed; margin-left: 500px;">PEMILIK</a>
      </div>
    </div>
  </nav> 
  <div class="jumbotron">
    <form action="index.php" method="post">
      <div class="form-horizontal">
        <div class="form-group">
          <label for="no_ktp" class="col-sm-2 control-label">No KTP</label>
          <div class="col-sm-10">
            <input type="number"  style="width: 300px" class="form-control" id="no_ktp" name="no_ktp" >
          </div>
        </div>
        <div class="form-group">
          <label for="nsms" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input type="text"  style="width: 400px" class="form-control" id="nama" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input type="text"  style="width: 350px" class="form-control" id="alamat" name="alamat">
          </div>
        </div>
        <div class="form-group">
          <label for="saham" class="col-sm-2 control-label">Saham</label>
          <div class="col-sm-10">
            <input type="text" style="width: 100px" class="form-control" id="saham" name="saham">
            <div class="form-group">
    <div class="col-sm-10">
      <div class="checkbox">
        <label class="checkbox-inline">
            <input type="checkbox" id="inlineCheckbox1" value="option1"> Lembar
                </label>
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> Presentasi
          </label> 
          </div>
        </div>  
        
      </div>
    </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </div>
      </div>
    </div>
    </form>
<table class="table table-striped table-bordered">
  <thead>
<tr>
    <th style="font-family: Algerian" class="info"><center>No KTP</center></th>
    <th style="font-family: Snap ITC" class="danger"><center>Nama</center></th>
    <th style="font-family: Matura MT Script Capitals" class="warning"><center>Alamat</center></th>
    <th style="font-family: Algerian" class="link"><center>Saham</center></th>
    <th style="font-family: Snap ITC" class="warning"><center>...</center></th>
  </tr>
  <?php
    $bebek = $connection->prepare("SELECT * FROM pemilik");
    $bebek->execute();
    $show = $bebek->fetchAll(PDO::FETCH_CLASS);
    foreach ($show as $row) {
  ?>
  <tr>
    <td><?=$row->no_ktp ?></td>
    <td><?=$row->nama ?></td>
    <td><?=$row->alamat ?></td>
    <td><?=$row->saham ?></td>
  </tr>
  <?php 
  }
   ?>
<div class="well"><center>2016 - 2017 Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah(LKPP)</div>
  <thead>
  </thead>
</center>
</div>
</thead>
</table>
</form>
  <tr>
  </tr>
  </center>
</thead>
</center>
</thead>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>