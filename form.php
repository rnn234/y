<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="simpan_kendaraan.php" method="post">
        <fieldset align="center">
            <h1>form tambah </h1>
            <table border="0px" align="center">
                <tr>
                    <label>nomor polisi :</label>
                    <br>
                    <input type="text" name="nopol">
                    <br>
                </tr>
                <tr>
                    <label>nama pemilik</label>
                    <br>
                    <input type="text" name="pemilik">
                    <br>
                </tr>
                <tr>
                    <label>merk</label>
                    <br>
                    <input type="text" name="merk_kdr">
                    <br>
                </tr>
                <tr>
                    <label>jenis</label>
                    <br>
                    <input type="text" name="jenis_kdr">
                    <br>
                </tr>
                <br>
                <button type="submit" name="simpan">simpan</button>
                
                <button type="reset" name="reset"> riset</button>
            </table>
        </fieldset>
    </form>
</body>
</html>