<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="bootstrap-3.3.7-dist/css/bootstrap.css" href="boostrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title>Pengurus</title>
  
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
if (isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['jabatan']) && isset($_POST['jabat_sejak']) && isset($_POST['jabat_sampai'])){

    $sql = $connection->prepare("INSERT INTO pengurus values(?,?,?,?,?,?)");
    $sql->execute([$_POST['no_ktp'], $_POST['nama'] ,$_POST['alamat'], $_POST['jabatan'], $_POST['jabat_sejak'], $_POST['jabat_sampai']]);
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
        <a class="navbar-brand" href="index2.php" style="font-family: Bernard MT Condensed; margin-left: 500px;">PENGURUS</a>
      </div>
    </div>
  </nav> 
  <div class="jumbotron">
    <form id="form-pengurus" action="index2.php" method="post">
      <div class="form-horizontal">
        <div class="form-group">
          <label for="no_ktp" class="col-sm-2 control-label">No KTP</label>
          <div class="col-sm-10">
            <input form="form-pengurus" type="number"  style="width: 300px" class="form-control" name="no_ktp" >
          </div>
        </div>
        <div class="form-group">
          <label for="nama" class="col-sm-2 control-label">Nama</label>
          <div class="col-sm-10">
            <input form="form-pengurus" type="text"  style="width: 400px" class="form-control" name="nama">
          </div>
        </div>
        <div class="form-group">
          <label for="alamat" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input  form="form-pengurus" type="text"  style="width: 350px" class="form-control" name="alamat">
          </div>
        </div>
        <div class="form-group">
          <label for="jabatan" class="col-sm-2 control-label">Jabatan</label>
          <div class="col-sm-10">
            <input form="form-pengurus" type="text"  class="form-control" name="jabatan" >
          </div>
        </div>  
        <div class="form-group">
          <label for="jabat_sejak" class="col-sm-2 control-label">Menjabat Sejak</label>
          <div class="col-sm-10">
            <input form="form-pengurus" type="date"  class="form-control" name="jabat_sejak" >
          </div>
        </div>
        <div class="form-group">
          <label for="jabat_sampai" class="col-sm-2 control-label">Menjabat Sampai</label>
          <div class="col-sm-10">
            <input form="form-pengurus" type="date"  class="form-control" name="jabat_sampai" >
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Kembali</button>
          </div>
        </div>
      </div>
    </form>
  </div>
<table class="table table-striped table-bordered">
  <thead>
<tr>
    <th class="info"><center>No KTP</center></th>
    <th class="danger"><center>Nama</center></th>
    <th class="warning"><center>Alamat</center></th>
    <th class="info"><center>Jabatan</center></th>
    <th class="danger"><center>Menjabat Sejak</center></th>
    <th class="warning"><center> Menjabat Sampai</center></th>
  </tr>
   <?php
    $coba = $connection->prepare("SELECT * FROM pengurus");
    $coba->execute();
    $show = $coba->fetchAll(PDO::FETCH_CLASS);
    foreach ($show as $row) {
  ?>
  <tr>
    <td><?=$row->no_ktp ?></td>
    <td><?=$row->nama ?></td>
    <td><?=$row->alamat ?></td>
    <td><?=$row->jabatan ?></td>
    <td><?=$row->jabat_sejak ?></td>
    <td><?=$row->jabat_sampai ?></td>
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