<?php
    include('Connection.php');
    include('Authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8">
    <title>Manage Users</title>
</head>
<body>
<div class="font">
    <div class = "logo">
        <img src="./img/i.jpg" alt="GENTE & CIUDAD LOGO" width="150" height="120" />
    </div>
    <div class = "tabs" >
    <a style="text-decoration: none" href = "Inicio">Inicio</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "AboutUs">Nosotros</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "NuestrosEquipos">Equipos</a><a>&emsp;/&emsp;</a><a  style="text-decoration: none" href = "http://vxg5911.uta.cloud/Blog/blog/">Blog</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href="ContactUs">Contacto</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "Login">Inicio de Sesion</a>
    </div>
    <div class = "PageTitle" style="background-image: url('./img/homepage-one-banner.jpg');">
        <div class = "Title-text">
            <p style="font-size: 32px">MANAGE USERS</p>
            <p>ADMINISTRATOR -> MANAGE USERS</p>
        </div>
    </div>

    <h2 style="position: relative; left: 10%">Welcome <?php echo $_SESSION['email'];?>,</h2>
        <p style="font-size: 32px; text-align: center">All Users <span style="color: orange"><i>Registered</i></span></p>
    <?php
    $sql = "SELECT * from User";
    $result = $conn->query($sql);
    if (($result->num_rows) > 0) {
    while ($row = $result->fetch_assoc()) {
    ?>
    <table align="center" style="width:80%; text-align:center">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>City</th>
            <th>Delete User</th>
            
        </tr>
    <tr>
        <td><?php echo $row['uname']; ?></td>
        <td><?php echo $row['uemail']; ?></td>
        <td><?php echo $row['uphone']; ?></td>
        <td><?php echo $row['ucity']; ?></td>
        <td><a href="DeleteUser.php?Ename=<?php echo $row['uid']; ?>"><input type ="Submit" class= "submit_button" type="Submit" value="Delete"/> </td>
    </tr>
    <br/>
    </table>
    <?php
    }
}
?>




    </div>
<div style="position: absolute; right: 25%">
        
        <a href="AdminPage.php"><input class= "submit_button" type="Submit" value="BACK"/></a></br>
    </div>


    <div class = "Footer">
        <div class = "Footer-Text">
            <h2>Escribenos, te invitamos a brindar lo mejor de ti para el bien<br/>comun,<span style="color: orange"> queremos conocer acerca de tus ideas para mejorar.</span></h2>
        </div>
    </div>
    <div class="Footer2">
        <div class="Footer-logo">
            <a href="mailto:admin@genteyciudad.com"> <img height="40px" width="40px" src="./img/email-wb.PNG"></a> &emsp;<a href="www.twitter.com/genteyciudadorg"><img width="40px" height="40px" src="./img/twitter-wb.PNG"></a>&emsp;<a href="www.instagram.com/genteyciudadorg"><img height="40px" width="40px" src="./img/instagram_wb.PNG"></a>

        </div>
        <div class="Footer-Text2">
            <p><span style="color: orange"> DiazApps</span><span style="color:gray"> &copy; 2020 All Right Reserved</span></p>
        </div>
    </div>




</body>
</html>