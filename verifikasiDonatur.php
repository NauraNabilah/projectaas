<table class="table table-sm">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Donatur</th>
            <th scope="col">Donatur ID</th>
            <th scope="col">Paket</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nominal Barang</th>
            <th scope="col">Bukti</th>
            <th scope="col">Verifikasi</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "koneksi.php";
        include "donatur.php";
        
        $conn = new Koneksi;
        $donatur = new Donatur($conn->DBConnect());
        $listDonatur = $donatur->tampilData();

        if (isset($_POST['ubah'])) {
            $id = $_POST['id'];
            $verifikasi = $_POST['verifikasi'];
            
            if ($verifikasi == 0) {
                $verifikasi = 1;
            }else{
                $verifikasi = 0;
            }
            $donatur->verifikasi($id, $verifikasi);
            //header('admin.php?halaman=donatur');
        }

        if (!empty($listDonatur))
         foreach($listDonatur as $row) {
            echo "<tr>";
            echo "<td>".($row['id'])."</td>";
            echo "<td>".($row['nama_donatur'])."</td>";
            echo "<td>".($row['donatur_id'])."</td>";
            echo "<td>".($row['paket'])."</td>";
            echo "<td>".($row['kategori'])."</td>";
            echo "<td align='right'>". number_format($row['nominal_barang'])."</td>";
            echo "<td>".($row['bukti'])."</td>";
            echo "<td>".($row['verifikasi'])."</td>";
            echo '<td><form method="post">';
            echo '<input type="text" name="id" value="'. $row['id'] . '" hidden>';
            echo '<input type="number" name="verifikasi" value="'. $row['verifikasi'] . '" hidden>';
            echo '<button type="submit" class="btn" name="ubah">verifikasi</button>';
            echo '</form></td>';
           
            echo "</tr>";
        }
        ?>
    </tbody>
</table>
