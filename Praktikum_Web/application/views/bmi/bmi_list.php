<h3>Daftar BMI Pasien</h3>
<table class="table">
    <thead>
        <tr>
            <th>#</th><th>Tanggal</th><th>Berat</th><th>Tinggi</th><th>BMI</th><th>Status BMI</th><th>Catatan</th><th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor =1;
        foreach($bmi->result() as $bmi){
       echo'
        <tr>
            <td>'.$nomor.'</td>
            <td>'.$bmi->tanggal.'</td>
            <td>'.$bmi->berat.'</td>
            <td>'.$bmi->tinggi.'</td>
            <td>'.$bmi->bmi.'</td>
            <td>'.$bmi->status_bmi.'</td>
            <td>'.$bmi->catatan'</td>
            <td><a href="'.base_url().'index.php/bmi/view/'.$bmi->id.'">view</a></td>
        </tr>';
        $nomor++;
        }
        ?>
   </tbody>
</table>