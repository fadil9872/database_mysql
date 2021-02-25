<?php
include('connection.php');

$query = mysqli_query($connect,"SELECT * FROM karyawan");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
<body>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Alama</th>
            <th>Umur</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php foreach($results as $result) : ?>
            <tr>
                <td><?php echo $result['nama']?></td>
                <td><?php echo $result['alamat']?></td>
                <td><?php echo $result['umur']?></td>
                <td><?php echo $result['jenis_kelamin']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>
?>