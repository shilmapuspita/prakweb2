<?php
$models = new Jenis_produk();
$data_jenis_produk = $models->TampilJenis_produk();
?>
<div class="content-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-responsive">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_jenis_produk as $row){
                        ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row ['nama']?></td>
                             
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>