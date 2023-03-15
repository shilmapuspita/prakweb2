<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <h3 style="text-align: center;">Form Regist Data Science</h3>
    <br>
    <form method="POST" action="form_register.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <input id="nim" name="nim" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="studi" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="studi" name="studi" class="custom-select">
        <option value="TI">Teknik Informatika</option>
        <option value="SI">Sistem Informasi</option>
        <option value="BD">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="skill[]_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="skill[]_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="skill[]_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="bootstrap"> 
        <label for="skill[]_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="skill[]_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="skill[]_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="skill[]" id="skill[]_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="skill[]_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <label for="tempat" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="tempat" name="tempat" class="custom-select">
        <option value="Jakarta">Jakarta</option>
        <option value="Depok">Depok</option>
        <option value="Bogor">Bogor</option>
        <option value="Tanggerang">Tanggerang</option>
        <option value="Bekasi">Bekasi</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
    </form>
    </div>
</body>
</html>

<?php
// ambil data yang di inputkan user berdasarkan unique name
// gunakan fungsi isset untuk memeriksa apakah suatu variable sudah diatur atau belum
// jika ada variable yang bernilai NULL, maka fun gsi isset akan mengembalikan nilai FALSE
if (isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $studi = $_POST['studi'];
    $skill = $_POST['skill']; 
    $tempat = $_POST['tempat'];
    $email = $_POST['email'];

    $nilai = 0;
    foreach ($skill as $value){
        switch ($value){
            case 'html':
                $nilai += 10;
                break;
            case 'css':
                $nilai += 10;
                break;
            case 'js':
                $nilai += 20;
                break;
            case 'bootstrap':
                $nilai += 20;
                break;
            case 'php':
                $nilai += 30;
                break;
            case 'python':
                $nilai += 30;
                break;
            case 'java':
                $nilai += 50;
                break;
            default :
                $nilai += 0;
                break;
        }
    }
}

function kategori($_nilai)
{
      if ($_nilai >= 85){
          return "Sangat Baik";
      }elseif ($_nilai >= 70){
          return "Kurang";
      }elseif ($_nilai >= 56){
          return "Cukup";
      }elseif ($_nilai >= 36){
          return "Kurang";
      }else{
          return "Kurang memadai";
      }
}
$kategori = kategori($nilai);

?>

<?php
// cetak hasil inputan user
echo "<h4>Hasil Register: </h4>";
echo "<br>Nama : $nama";
echo "<br>NIM : $nim";
echo "<br>Jenis Kelamin : $jk";
echo "<br>Program  : $studi";
echo "<br>Kategori Skill : $kategori";
echo "<br>Domisili : $tempat";
echo "<br>Email : $email";
echo "<br>Skill : ";
foreach ($skill as $value){
    echo $value . " , ";

}
echo "<br> Skor Nilai : $nilai";
?>