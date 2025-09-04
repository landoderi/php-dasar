<?php
class Penggajian
{
    public $nama, $no_id, $gp, $jabatan, $status_k, $status_kk;
    public $tj, $tt, $tm;

    public function __construct($a, $b, $c, $d, $e, $f)
    {
        $this->nama = $a;
        $this->no_id = $b;
        $this->gp = $c;
        $this->jabatan = $d;
        $this->status_k = $e;
        $this->status_kk = $f;
    }

    public function tunjanganjabatan()
    {
        $jabatan = $this->jabatan;

        if ($jabatan == "Manager") {
            $this->tj = $this->gp * 0.2;
        } else if ($jabatan == "Supervisor") {
            $this->tj = $this->gp * 0.15;
        } else if ($jabatan == "Staff") {
            $this->tj = $this->gp * 0.15;
        } else {
            $tj= 0;
        }
        return $this->tj;
    }

    public function tunjanganTransport()
    {
        $status= $this->status_k;
        $this->tt       = 0;
        if ($status == "Tetap") {
            $tt = 500000;
        } else {
            $this->tt = 0;
        }
        return $this->tt;
    }

    public function tunjanganMenikah()
    {
        $statusKK = $this->status_kk;
        $this->tm = 0;
    if ($statusKK == "Menikah") {
        $this->tm = 300000;
    } else {
        $this->tm =0;
    }
    return $this->tm;
    }

    public function gajiKotor()
    {
        $gajikotor = $this->gp + $this->tunjanganjabatan() + $this->tunjanganTransport()
        + $this->tunjanganMenikah();
        return $gajikotor;
    }

    public function pajak()
    {
        $pajak = $this->gajiKotor() * 0.05;
        return $pajak;
    }

    public function gajibersih()
    {
        $gajibersih = $this->gajiKotor() - $this->pajak();
        return $gajibersih;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
    background-image: url(background.gif);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}
    </style>
    </head>
<body>
    <div class="p-3 mb-2 bg-success text-white">
    <form action="" method="post">
        <label for="">Nama Karyawan</label>
        <input type="text" name="nama" placeholder="nama lengkap"> <br>

        <label for="">NO ID Karyawan</label>
        <input type="number" name="no_id" placeholder="NO ID Karyawam Lenglkap"> <br>

        <label for="">Gaji Karyawan</label>
        <input type="number" name="gp" placeholder="Gaji Pokok"> <br>

        <label for="">Status karyawan</label>
        <input type="radio" name="status" value="Tetap">Tetap
        <input type="radio" name="status" value="Kontrak">Kontrak <br>
        
        <label for=" ">Jabatan</label>
        <select name="jabatan" id="">
            <option value="Manager">Manager</option>
            <option value="Supervisor">Supervisor</option>
            <option value="Staff">Staff</option>
            <option value="Karyawan">Karyawan</option>
        </select> <br>

        <label for="">Status Menikah</label>
        <select name="status_kk" id="">
            <option value="Menikah">Menikah</option>
            <option value="Belum Mnikah">Belum Menikah</option>
        </select> <br>

        <button type="submit" class="btn btn-warning">Simpan</button>
    </form>
    </div>
    <?php
    if
    ($_SERVER['REQUEST_METHOD'] == "POST") {
        $a = $_POST['nama'];
        $b = $_POST['no_id'];
        $c = $_POST['gp'];
        $d = $_POST['jabatan'];
        $e = $_POST['status'];
        $f = $_POST['status_kk'];
        
        $gaji = new Penggajian($a,$b, $c, $d, $e, $f);
    
    ?>

    <table border="1">
        <th>Nama</th>
        <th>NO ID</th>
        <th>Status Karyawan</th>
        <th>Gaji Pokok</th>
        <th>Jabatan</th>
        <th>Status Menikah</th>
        <tr>
            <td><?php echo $gaji->nama; ?></td>
            <td><?php echo $gaji->no_id; ?></td>
            <td><?php echo $gaji->status_k; ?></td>
            <td><?php echo number_format($gaji->gp, 0, ',', '.');?></td>
            <td><?php echo $gaji->jabatan; ?></td>
            <td><?php echo $gaji->status_kk; ?></td>
        </tr>
        <tr>
            <th>tunjangan jabatan</th>
            <td colspan = "5">
                Rp. <?php echo number_format($gaji->tunjanganjabatan(), 0, ',', '.');?>
            </td>
        </tr>
        <tr>
            <th>tunjangan menikah</th>
            <td colspan = "5">
                Rp. <?php echo number_format($gaji->tunjanganMenikah(), 0, ',', '.');?>
            </td>
        </tr>
        <tr>
            <th>tunjangan jabatan</th>
            <td colspan = "5">
                Rp. <?php echo number_format($gaji->tunjanganTransport(), 0, ',', '.'); }?>
            </td>
</table>
  </body>
</html>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>