<?php 
  require_once 'dbkoneksi.php';

  // untuk menampilkan data pelanggan berdasarkan id 
  $id = $_GET['id'];
  $sql = "SELECT * FROM pelanggan WHERE id=?";
  $row = $dbh->prepare($sql);
  $row->execute(array($id));
  $hasil = $row->fetch();
?>

<?php 
// require_once 'dbkoneksi.php';

// $_idedit = $_GET['idedit'];
//     if(!empty($_idedit)){
//         $sql = "SELECT * FROM pelanggan WHERE id = ?";
//         $st = $dbh->prepare($sql);
//         $st->execute([$_idedit]);
//         $row = $st->fetch();
//     }else{
//         $row = [];
//     }
?>
            
            <form method="POST" action="proses_pelanggan.php">
    <div class="form-group row">
    <input name="id" type="hidden" class="form-control" value="<?= $hasil['id']?>">

        <label for="kode" class="col-4 col-form-label">Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div>
                </div>
                <input id="kode" name="kode" type="text" class="form-control" value="<?= $hasil['kode']?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Custumer</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="<?= $hasil['nama']?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jk" class="col-4 col-form-label">Jenis Kelamin</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-o-left"></i>
                    </div>
                </div>
                <input id="jk" name="jk" type="radio" value="L" class="form-control"
                    <?php if($hasil['jk']=='L') echo 'checked'?>> Laki - Laki
                <input id="jk" name="jk" type="radio" value="P" class="form-control"
                    <?php if($hasil['jk']=='P') echo 'checked'?>> Perempuan
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" value="<?= $hasil['tmp_lahir'] ?>" type="text"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-up"></i>
                    </div>
                </div>
                <input id="tgl_lahir" name="tgl_lahir" value="<?= $hasil['tgl_lahir'] ?>" type="date"
                    class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-arrow-circle-right"></i>
                    </div>
                </div>
                <input id="email" name="email" value="<?= $hasil['email'] ?>" type="text" class="form-control">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="jenis" class="col-4 col-form-label">Jenis Kartu</label>
        <div class="col-8">
            <?php 
            $sqljenis = "SELECT * FROM kartu";
            $rsjenis = $dbh->query($sqljenis);
        ?>
            <select id="kartu_id" name="kartu_id" class="custom-select">
                <?php 
            foreach($rsjenis as $rowjenis){
         ?>
                <option value="<?=$rowjenis['id']?>"><?=$rowjenis['nama'] ?></option>
                <?php
            }
        ?>
                <!--
        <option value="1">Elektronik</option>
        <option value="2">Furniture</option>
        <option value="3">Makanan</option>-->

            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <?php
                // $button = (empty($_idedit)) ? "Simpan":"Update"; 
            ?>
            <input type="submit" name="proses" type="submit" 
            class="btn btn-primary" value="Update"/>
            <!-- <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update"/> -->
            <!-- <input type="hidden" name="idedit" value="<?=$_idedit?>" /> -->
        </div>
    </div>
</form>