<?php include './nearestneighbors.php'; ?>
<div style="margin : 30px 0;">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>X</th>
                <th>Y</th>
                <th>KELAS</th>
                <th>HASIL TES</th>
                <th>KESIMPULAN</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            for ($a = 0; $a < count($test); $a++) {
                ?>
                <tr>
        <?php
                for ($b = 0; $b < count($test[$a]); $b++) {                         
        ?>
                <td><?= $test[$a][$b] ?></td>                    
        <?php
                }
                ?>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>
</div>

<div class="row">
            <div class="col-md-6">
                <?php if($persentase == 100) {?>
                    <div class="alert alert-success" role="alert">
                        Benar : <?= $temp['Benar']?><br/>
                        Salah : 0<br/>
                        Tingkat Kesalahan : <strong><?= 100 - $persentase ?> %</strong>
                    </div>
                <?php } else if($temp < 100 && $temp >= 50) {?>
                    <div class="alert alert-warning" role="alert">
                        Benar : <?= $temp['Benar']?><br/>
                        Salah : <?= $temp['Salah']?><br/>
                        Tingkat Kesalahan : <strong><?= 100 - $persentase ?> %</strong>
                    </div>
                <?php } else {?>
                    <div class="alert alert-danger" role="alert">
                        Benar : <?= $temp['Benar']?><br/>
                        Salah : <?= $temp['Salah']?><br/>
                        Tingkat Kesalahan : <strong><?= 100 - $persentase ?> %</strong>
                    </div>
                <?php } ?>
            </div>
        </div>