<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Data User</h1></center>
    <h2>Data Hotel</h2>

    <center><table width="80%" borde="1">
        <th>nama</th>
        <th>email</th>
        <th>username</th>
        <th>password</th>
    </tr>

    <?php
    include "koneksi.php";
     if($koneksi.php)

    $query = "select * from register";
    $sql = mysqli_query($koneksi,$query);

    while($data = mysqli_fetch_array($sql)){
        echo "<td>";
        echo "<tr> . $data['nama'] . </tr>";
        echo "<tr> . $data['email'] . </tr>";
        echo "<tr> . $data['username'] . </tr>";
        echo "<tr> . $data['passsword'] . </tr>";
        echo "</tr>"
    }
    ?>
    </table></center>
    <a href="logout.php">log out</a>
</body>
</html>
