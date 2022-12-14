<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <h1>record data kendaraan</h1>
        <button><a href="form.php">tambah data</a></button>
        <button><a href="../montir/form.php">tambah montir</a></button>
        <br>
    </div>
    <table border="1" align="center">
        <tr>
            <th>no</th>
            <th>nomor polisi</th>
            <th>nama pemilik</th>
            <th>merk kendaraan</th>
            <th>jenis kendaraan</th>
            <th>aksi</th>
        </tr>
        <?php
        include "../function.php";
        $no = 1;
        $query = mysqli_query($konek, "SELECT * FROM kendaraan");
        while ($data = mysqli_fetch_array($query)):
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $data['nopol']; ?></td>
            <td><?= $data['pemilik']; ?></td>
            <td><?= $data['merk_kdr']; ?></td>
            <td><?= $data['jenis_kdr']; ?></td>
            <td><button><a href="hapus.php?nopol=<?=$data['nopol']?>">hapus</a></button>
                <button><a href="form_edit.php?nopol=<?=$data['nopol']?>">edit</a></button>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>