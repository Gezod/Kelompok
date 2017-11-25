<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="bootstrap-3.3.7-dist/css/bootstrap.css" href="boostrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title>Peralatan</title>
  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
</style>
<body>
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
        <a class="navbar-brand" href="index2.php" style="font-family: Bernard MT Condensed; margin-left: 500px;">PERALATAN</a>
      </div>
    </div>
  </nav> 
  <div class="jumbotron">
    <form action="tambah.php" method="post">
      <div class="form-horizontal">
        <div class="form-group">
          <label for="nama_alat" class="col-sm-2 control-label">Nama Alat</label>
          <div class="col-sm-10">
            <input type="text"  style="width: 300px" class="form-control" id="nama_alat" >
          </div>
        </div>
        <div class="form-group">
          <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="number"  style="width: 400px" class="form-control" id="jumlah">
          </div>
        </div>
        <div class="form-group">
          <label for="kapasitas" class="col-sm-2 control-label">Kapasitas</label>
          <div class="col-sm-10">
            <input type="number"  style="width: 350px" class="form-control" id="alamat">
          </div>
        </div>
        <div class="form-group">
          <label for="merk" class="col-sm-2 control-label">Merk</label>
          <div class="col-sm-10">
            <input type="text" style="width: 200px" class="form-control" id="merk" >
          </div>
        </div>  
        <div class="form-group">
          <label for="tahun_pembuatan" class="col-sm-2 control-label">Tahun Pembuatan</label>
          <div class="col-sm-10">
            <input type="date" style="width: 300px" class="form-control" id="jtahun_pembuatan" >
          </div>
        </div>
         <div class="form-group">
           <label for="kondisi" class="col-sm-2 control-label">Kondisi</label>
    <div class="col-sm-10">
      <div class="checkbox">
        <label class="checkbox-inline"> 
            <input type="checkbox" id="inlineCheckbox1" value="option1"> Baik
            </label>
                    <label class="checkbox-inline">
                  <input type="checkbox" id="inlineCheckbox2" value="option2"> Rusak
          </label>
      </div>
    </div>
        <div class="form-group">
          <label for="status_kepemilikan" class="col-sm-2 control-label">Lokasi Sekarang </label>
          <div class="col-sm-10">
            <input type="text" style="width: 500px" class="form-control" id="lokai_sekarang" >
          </div>
        </div>
         <div class="form-group">
          <label for="lokasi_sekarang" class="col-sm-2 control-label">Status Milik </label>
          <div class="col-sm-4">
        <div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    ...
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Action</a></li>
    <li><a href="#">Another action</a></li>
    <li><a href="#">Something else here</a></li>
  </ul> 
  </div>
 </div>
</div>
        <div class="form-group">
          <label for="bukti" class="col-sm-2 control-label">Bukti Pembayaran</label>
          <div class="col-sm-10">
            <input type="text" style="width: 375px" class="form-control" id="bukti" >
          </div>
        </div>  
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button> 
             <button type="reset" class="btn btn-danger">Reset</button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<table class="table table-striped table-bordered">
  <thead>
<tr>
    <th style="font-family: Times New Roman" class="info"><center>Nama Alat</center></th>
     <th style="font-family: Times New Roman" class="danger"><center>Jumlah</center></th>
      <th style="font-family: Times New Roman" class="warning"><center>Merk</center></th>
       <th style="font-family: Times New Roman" class="info"><center>Tahun Pembuatan</center></th>
        <th style="font-family: Times New Roman" class="success"><center>Kondisi</center></th>
      <th style="font-family: Times New Romann" class="link"><center>Lokasi Sekarang</center></th>
     <th style="font-family: Times New Roman" class="warning"><center>Status Kepemilikan</center></th>
    <th style="font-family: Times New Roman" class="default"><center>Bukti Pembayaran</center></th>
  </tr>
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