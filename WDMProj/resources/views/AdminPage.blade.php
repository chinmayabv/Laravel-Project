<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8">
    <title>Admin Page</title>
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
            <p style="font-size: 32px">ADMINISTRATOR</p>
            <p>INICIO DE SESION -> ADMINISTRATOR </p>
        </div>
    </div>

    <h2 style="position: relative; left: 10%">Welcome {{$email}},</h2>
    <div class="register">
        <p style="font-size: 32px; text-align: center">Manage <span style="color: orange"><i>Pages</i></span></p>
        <div class="admin_buttons">

            <a href="/A_manage_users"><input class= "submit_button" type="Submit" value="MANAGE USERS "/></a></br>
            <a href="/A_manage_events"> <input class= "submit_button" type="Submit" value="MANAGE EVENTS"/></a></br></br></br></br>
            <a href="/Login">LOGOUT</a>
        </div>

    </div>



    <div class = "Footer" style="background-image: url('./img/homepage-one-banner.jpg');">
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
