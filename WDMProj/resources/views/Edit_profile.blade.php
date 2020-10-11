
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8">
    <title>Edit Profile</title>
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
            <p style="font-size: 32px">EDIT PROFILE</p>
            <p>USER DASHBOARD > EDIT PROFILE </p>
        </div>
    </div>

    <div class="register">
        <p style="font-size: 32px; text-align: center">EDIT <span style="color: orange"><i>PROFILE</i></span></p>
        <div class="row">
            <div class="column1_reg">
                <p>Tu Nombre (requerido): </p>
                <p><br/>Contraseña:</p>
                <p><br/>Habla a:</p>
                <p><br/>Teléfono:</p>

            </div>
            <div class="column2_reg">
                <form action="{{url('/user/update')}}" method="post">
                {{csrf_field()}}
                    <input name="name" type="text"  size="45" style="height: 35px"/> <br /><br/>
                    <input  name="Password" type="password" size="45" style="height: 35px" /> <br /><br/>
                    <input type="text" name="Address" style="height: 35px"><br/><br/>
                    <input type="tel" name="phone" style="height: 35px"><br/><br/>

                    <input class= "submit_button" type="Submit" value="SAVE"/>
                </form>

            </div>
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
