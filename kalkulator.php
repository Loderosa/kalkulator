<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <label for="bilangan1">Bilangan 1:</label>
        <input type="number" id="bilangan1" name="bilangan1" required><br><br>
        
        <label for="bilangan2">Bilangan 2:</label>
        <input type="number" id="bilangan2" name="bilangan2" required><br><br>
        
        <label for="operator">Pilih Operator:</label>
        <select id="operator" name="operator">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select><br><br>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $operator = $_POST['operator'];
        $hasil = 0;

        switch ($operator) {
            case 'tambah':
                $hasil = $bilangan1 + $bilangan2;
                break;
            case 'kurang':
                $hasil = $bilangan1 - $bilangan2;
                break;
            case 'kali':
                $hasil = $bilangan1 * $bilangan2;
                break;
            case 'bagi':
                if ($bilangan2 != 0) {
                    $hasil = $bilangan1 / $bilangan2;
                } else {
                    echo "<p>Pembagian dengan nol tidak diperbolehkan!</p>";
                    exit;
                }
                break;
            default:
                echo "<p>Operator tidak valid!</p>";
                exit;
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>
