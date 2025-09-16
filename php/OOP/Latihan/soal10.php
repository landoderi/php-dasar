<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <form method="post">
        <tr>
        <td><label for="">Nama Lengkap</label></td>
        <td><input type="text" name="nama" required> <br></td>
        </tr>
        <tr>
        <td><label for="">Tanggal Lahir</label></td>
        <td><input type="date" name="tgl" required> <br></td>
        </tr>
        <tr>
        <td><label for="">Jenis Kelamin</label></td>
        <td><select name="kelamin" id="" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> <br></td>
        </tr>
        <tr>
        <td><label for="">Tinggi Badan</label></td>
         <td><input type="number" name="tinggi" required> <br></td>
        </tr>
        <tr>
         <td><label for="">Berat Badan</label></td>
         <td><input type="number" name="berat" required></td>
        </tr>
        <tr>
            <td> <input type="submit" name="simpan" value="Simpan"></td>
        </tr>
    </form>
    </table>
    <table border="1" cellpadding="12" width="0"> <center>
    <?php 

    if (isset($_POST ['simpan'])) {
        $nama = $_POST ['nama'];
        $tgl = $_POST ['tgl'];
        $kelamin = $_POST ['kelamin'];
        $tinggi = $_POST ['tinggi'];
        $berat = $_POST ['berat'];
    
    ?>
    <tr>
        <td>Nama</td>
        <td>Tanggal lahir</td>
        <td>Umur</td>
        <td>Kelamin</td>
        <td>Tinggi</td>
        <td>Berat</td>
        <td>IMT/BMI</td>
    </tr>
    <tr>
        <td><?php echo "$nama"; ?></td>
        <td><?php echo "$tgl"; ?></td>
        <td><?php

        $lahir = $tgl;
        $sekarang = date('Y-m-d');
        $umur = date_diff(date_create($lahir), date_create($sekarang))->y;

         echo "$umur";
         
         ?></td>
        <td><?php echo "$kelamin"; ?></td>
        <td><?php echo "$tinggi"; ?></td>
        <td><?php echo "$berat"; ?></td>
        <td>
            <?php

            function hitungIMT($beratbadan, $tinggibadan) {
                $tinggimeter = $tinggibadan / 100;
                $imt = $beratbadan / ($tinggimeter * $tinggimeter);
                return $imt;
            }
            function status($imt) {
                if ($imt < 18.5) {
                    return "Kurus";
                } elseif ($imt < 25) {
                    return "Normal";
                } elseif ($imt < 30) {
                    return "Berat badan berlebihan";
                } else {
                    return "Obesitas";
                }
            }

            $beratbadan = $berat;
            $tinggibadan = $tinggi;
            $imt = hitungIMT($beratbadan, $tinggibadan);
            $status = status($imt);

            echo "Status: $status";

        }

            ?>
        </td>
    </tr>
    </center>
    </table>
</body>
</html>