<div class="col-md-12">
    <h3> 
        Daftar BMI Pasien 
    </h3>
    <table class="table">
        <thead>
            <tr>
        <th>#</th><th>Tanggal</th><th>Kode</th><th>Nama</th><th>Gender</th><th>Berat</th><th>Tinggi</th><th>BMI</th><th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $nomor=1;
            foreach($list_bmi as $bmi){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$bmi->date?></td>
                <td><?=$bmi->kode?></td>
                <td><?=$bmi->nama?></td>
                <td><?=$bmi->gender?></td>
                <td><?=$bmi->berat?></td>
                <td><?=$bmi->tinggi?></td>
                <td><?=$bmi->nilaiBMI()?></td>
                <td><?=$bmi->statusBMI()?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
        </tbody>
    </table>
</div>