<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Disini</title>
    <link rel="stylesheet" href="maylla1.css">
</head>
<body>
    <div class="form-container">
        <form method="POST">
            <label for="nilai">Pilih Nilai Yuk :</label>
            <select name="nilai" id="nilai">
                <option value="99" <?php if(isset($_POST['nilai']) && $_POST['nilai'] == 99) echo "selected"; ?>>99</option>
                <option value="85" <?php if(isset($_POST['nilai']) && $_POST['nilai'] == 85) echo "selected"; ?>>85</option>
                <option value="75" <?php if(isset($_POST['nilai']) && $_POST['nilai'] == 75) echo "selected"; ?>>75</option>
                <option value="60" <?php if(isset($_POST['nilai']) && $_POST['nilai'] == 60) echo "selected"; ?>>60</option>
            </select>
            <button type="submit">Submit</button>

            <div class="result">
                <?php 

                /*
                skenario 1
                    $nilai = "99";

                    if ( $nilai >= 90 && $nilai <= 100) {
                        echo "Nilai A";
                    }
                    else if ( $nilai >= 80 && $nilai <= 90) {
                        echo "Nilai B";
                    }
                    else if ( $nilai >= 70 && $nilai <= 80) {
                        echo "Nilai C";
                    }
                    else if ( $nilai >= 0 && $nilai <= 70) {
                        echo "Nilai D";
                    } */

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nilai = $_POST['nilai'];

                    if ($nilai >= 90) {
                        echo "Nilai A";
                    } elseif ($nilai >= 80) {
                        echo "Nilai B";
                    } elseif ($nilai >= 70) {
                        echo "Nilai C";
                    } else {
                        echo "Nilai D";
                    }
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
