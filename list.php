<?php
include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>

<body>
    <a href="add .php">Tambah Data</a>

    <br /><br />
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
            <th>Pilihan</th>
        </tr>
        <?php foreach ($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama'] ?></td>
                <td><?php echo $result['alamat'] ?></td>
                <td><?php echo $result['umur'] ?></td>
                <td><?php echo $result['jenis_kelamin'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $result['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $result['id']?>">Delete</a> 
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>