<!DOCTYPE html>
 <html lang="id">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Sistem Pembayaran Bioskop</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <style>
        body {
    background-image: url(background.gif);
    background-size: cover;
    background-position: center;
    background-repeat: repeat;
    display: flex, justify-content;

}
.container {
    width: 400px;
    margin: auto;
    padding: 20px;
    background-color: #ffffffbe;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    margin-top: 95px;
}
     </style>
 </head>
 <body>
     <div class="container">
         <h1>Tiket Bioskop</h1>
         <form method="post">
             <div class="form-group">
                 <label for="jumlahTiket">Jumlah Tiket:</label>
                 <input type="number" class="form-control" id="jumlahTiket" name="jumlahTiket" required>
             </div>
             <div class="form-group">
                 <label for="hari">Hari:</label>
                 <select class="form-control" id="hari" name="hari" required>
                     <option value="senin">Senin</option>
                     <option value="selasa">Selasa</option>
                     <option value="rabu">Rabu</option>
                     <option value="kamis">Kamis</option>
                     <option value="jumat">Jumat</option>
                     <option value="sabtu">Sabtu</option>
                     <option value="minggu">Minggu</option>
                 </select>
             </div>
             <div class="form-group">
                 <div class="form-check">
                     <input type="checkbox" class="form-check-input" id="kursiVip" name="kursiVip">
                     <label class="form-check-label" for="">Kursi VIP</label>
                 </div>
             </div>
             <button type="submit" class="btn btn-primary">Hitung Total</button>
         </form>
         <?php
         class Bioskop {
             public $hargaDasar = 50000;
             public $biayaWeekend = 10000;
             public $biayaVip = 20000;
             public $pajak = 0.05;
             public function hitungTotalPembayaran($jumlahTiket, $hari, $kursiVip) {
                 $hargaTiket = $this->hargaDasar;
                 if (isset($hari) == 'sabtu' || isset($hari) == 'minggu') {
                     $hargaTiket += $this->biayaWeekend;
                 }
                 if ($kursiVip) {
                     $hargaTiket += $this->biayaVip;
                 }
                 $totalHargaSebelumPajak = $hargaTiket * $jumlahTiket;
                 $totalPajak = $this->pajak * $totalHargaSebelumPajak;
                 $totalPembayaran = $totalHargaSebelumPajak + $totalPajak;
                 return $totalPembayaran;
             }
         }
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $bioskop = new Bioskop();
             $jumlahTiket = $_POST['jumlahTiket'];
             $hari = $_POST['hari'];
             $kursiVip = isset($_POST['kursiVip']);
             $totalPembayaran = $bioskop->hitungTotalPembayaran($jumlahTiket, $hari, $kursiVip);
             echo '<div class="alert alert-success mt-3" role="alert">';
             echo 'Total Pembayaran: Rp ' . number_format($totalPembayaran, 0, ',', '.');
             echo '</div>';
         }
         ?>
     </div>
 </body>
 </html>