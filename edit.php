<?php 

include('connection.php');

$id = $_GET['id']; // Untuk mengambil id yang dilempar dari form list.php

$query = mysqli_query($connect,"SELECT * FROM karyawan WHERE id='$id' LIMIT 1"); //mengambil data sesuai dengan id nya
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<html>
    <form action="update.php" method="post">

        <input type="hidden" name="id" value=<?php echo $result[0]['id']?>> <!--untuk menyimpan id tanpa menampilkan data id pada form-->

        <label>Nama</label><br/>
        <input type="text" name="nama" value="<?php echo $result[0]['nama']?>"/> <!--menampilkan data sesuai dr variabel $result diatas-->
        <br/><br/>

        <label>Alamat</label><br/>
        <textarea name="alamat" cols="30" rows="10" ><?php echo $result[0]['alamat']?></textarea>
        <br/><br/>

        <label>Umur</label><br/>
        <input type="text" name="umur" value="<?php echo $result[0]['umur']?>">
        <br/><br/>

        <label>Jenis Kelamin</label><br/>
        <select name="jenis_kelamin">
            <option value="Pria"<?php echo ($result[0]['jenis_kelamin'] == 'Pria') ? 'selected' : '';?> >Pria</option>
            <option value="Wanita" <?php echo ($result[0]['jenis_kelamin'] == 'Wanita') ? 'selected' : '';?> >Wanita</option>
        </select>

        <button type="submit">Perbaharui</button>
    </form>
</html>