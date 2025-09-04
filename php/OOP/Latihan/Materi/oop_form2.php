<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="oop_form1.css" href="">
</head>
<body>
    <div name="a">
    <legend>
        Biodata siswa
    </legend>
    <form action="" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" required><br>

        <label for="">Kelas</label>
        <input type="text" name="kelas" required><br>

        <label for="">Jenis kelamin</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuam
        <br>

        <label for="">Tanggal lahir</label>
        <input type="date" name="tanggal_lahir">
        <br>

        <label for="">Agama</label>
        <select name="agama" id="">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budha">Budha</option>
            <option value="Khonghucu">Khonghucu</option>
        </select>

        <p>
        <input type="submit" name="kirim">
            </p>
        <?php
        class Biodata
        {
            public $nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama;

            public function __construct($nama, $kelas, $jenis_kelamin, $tanggal_lahir, $agama)
            {
                $this->nama = $nama;
                $this->kelas = $kelas;
                $this->jenis_kelamin = $jenis_kelamin;
                $this->tanggal_lahir = $tanggal_lahir;
                $this->agama = $agama;

            }

            public function tampilkandata()
            {
                return "Nama: " . $this->nama . "<br>" .
                "Kelas: " . $this->kelas . "<br>" .
                "Jenis kelamin: " . $this->jenis_kelamin . "<br>" .
                "Tanggal lahir: " . $this->tanggal_lahir . "<br>" .
                "Agama: " . $this->agama . "<br>";

            }
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['nama'];
            $b = $_POST['kelas'];
            $c = $_POST['jenis_kelamin'];
            $d = $_POST['tanggal_lahir'];
            $e = $_POST['agama'];
        

        $biodata = new Biodata($a, $b, $c, $d, $e);
        
        ?>
    </form>
    </div>
    <fieldset>
        <legend><h2><?php echo $biodata->nama . "<br>"; ?></h2></legend>
        <?php
        echo "Kelas: " . $biodata->kelas . "<br>";
        echo "Jenis kelamin: " . $biodata->jenis_kelamin . "<br>";
        echo "Tanggal lahir: " . $biodata->tanggal_lahir . "<br>";
        echo "Agama: " . $biodata->agama . "<br>";
        }
        ?>
    </fieldset>
</body>
</html>