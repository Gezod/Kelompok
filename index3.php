<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="bootstrap-3.3.7-dist/css/bootstrap.css" href="boostrap.css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title>Tenaga Ahli</title>
  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
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
          <a class="navbar-brand" href="index2.php" style="font-family: Bernard MT Condensed; margin-left: 500px;">TENAGA AHLI</a>
        </div>
      </div>
    </nav> 

    <div class="jumbotron">
      <form class="form-horizontal" action="tambah.php" method="post">
        <div class="row">
          <div class="col-sm-6">
            <label for="nama" class="col-sm-2">Nama</label>
            <div class="col-sm-2 ">
              <input type="text"  style="width: 250px" class="col-sm-2" id="nama" >
            </div>
          </div>
          <div class="col-sm-6">
            <label class="col-sm-4">Jenis Kelamin</label>
                <label class="radio-inline">
              <input type="radio" name="optradio">Pria
                </label>
               <label  class="radio-inline">
                <input type="radio" name="optradio">Wanita
                </label>
              </div>
          <div class="row">
          <div class="col-sm-6">
            <label for="ttl" class="col-sm-2">Tanggal Lahir</label>
            <div class="col-sm-2 ">
              <input type="date"  style="width: 250px" class="col-sm-2" id="ttl" >
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6">
            <label for="warga_negara" class="col-sm-4">Kewarganegaraan</label>
            <div class="col-sm-2 ">
              <input type="text"  style="width: 250px" class="col-sm-2" id="warga_negara  " >
            </div>
          </div>
        </div>  
      </div>
        <div class="row">
          <div class="col-sm-6">
            <label for="alamat" class="col-sm-2">Alamat</label>
            <div class="col-sm-2 ">
              <input type="text"  style="width: 600px" class="col-sm-2" id="alamat" >
            </div>
          </div>
        </div>
          <div class="row">
          <div class="col-sm-6">
            <label for="pend_akhir" class="col-sm-2">Pendidikan Akhir</label>
            <div class="col-sm-2 ">
              <input type="text"  style="width: 250px" class="col-sm-2" id="pend_akhir  " >
            </div>
          </div>
          <div class="row">
          <div class="col-sm-6">
            <label for="peng_kerja" class="col-sm-4">Pengalaman Kerja (Tahun)</label>
            <div class="col-sm-2 ">
              <input type="number"  style="width: 250px" class="col-sm-2" id="peng_kerja  " >
            </div>
          </div>
        </div> 
      </div>
      <div class="row">
          <div class="col-sm-6">
            <label for="email" class="col-sm-2">Email</label>
            <div class="col-sm-2 ">
              <input type="email"  style="width: 250px" class="col-sm-2" id="email  " >
            </div>
          </div>
        
          <div class="col-sm-6">
            <label class="col-sm-4">Status Pegawai</label>
                <label class="radio-inline">
                  <input type="radio" name="optradio">Tetap
                </label>
               <label  class="radio-inline">
                  <input type="radio" name="optradio">Tidak Tetap
                </label>
              </div>
              <div class="row">
          <div class="col-sm-6">
            <label for="jabatan_profesi" class="col-sm-2">Profesi</label>
            <div class="col-sm-2 ">
             <textarea rows="4" cols="50" id="jabatan_profesi"></textarea>
            </div>
          </div>
        </div>
        <button type="submit" style="width: 100px" class="btn btn-primary">Simpan</button>
        <button type="reset"  style="width: 100px" class="btn btn-danger">Reset</button>
      </form>
    </div>
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th class="info"><center>Nama</center></th>
          <th class="danger"><center>Jenis Kelamin</center></th>
          <th class="warning"><center>Tanggal Lahir</center></th>
          <th class="info"><center>Alamat</center></th>
          <th class="danger"><center>Pendidikan Akhir</center></th>
          <th class="warning"><center>Pengalaman Akhir</center></th>
          <th class="info"><center>Email</center></th>
          <th class="warning"><center>Profesi</center></th>
          <th class="info"><center>Status Pegawai</center></th>
        </tr>
        <div class="well">
          <center>2016 - 2017 Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah(LKPP)</center>
        </div>
      </thead>
    </table>
  </div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>