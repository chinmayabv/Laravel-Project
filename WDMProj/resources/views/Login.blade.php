<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8">
    <title>GENTE & CIUDAD - LOGIN </title>



    <script>
        function validateForm() {
            var x = document.forms["login_form"]["email"].value;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (x.match(mailformat)) {
                return true;
            }
                alert("Not a valid email");
                return false;


        }
    </script>



</head>
<body>
<div class = "logo">
    <img src="./img/i.jpg" alt="GENTE & CIUDAD LOGO" width="150" height="120" />
</div>
<div class = "tabs" >
    <a style="text-decoration: none" href = "Inicio">Inicio</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "AboutUs">Nosotros</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "NuestrosEquipos">Equipos</a><a>&emsp;/&emsp;</a><a  style="text-decoration: none" href = "http://vxg5911.uta.cloud/Blog/blog/">Blog</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href="ContactUs">Contacto</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "Login">Inicio de Sesion</a>
</div>

<p></p>
<p></p>

<div class="under_img">
    <img style="height: 100%" src="./img/homepage-one-banner.jpg">

    <div class="Login-text">
        <p style="font-size: 65px"><span style="color: orange"> GENTE </span><br/><i>Y CIUDAD</i></p>
        <div class="login_buttons">
            <a>Administrator click Here:</a> <a href="Admin_login"><input class="submit_button" type="submit" value="Administrator"/> </a></br>
            <a>For User Login Click Here:<a href="#"> <input class= "submit_button" id="button1" type="Submit" value="Iniciar Sesión"/></a></br>
            <a>User Register Here:<a href="Registration"> <input class= "submit_button" type="Submit" value="Regístrate Ahora"/></a>

        </div>
        <p style="font-size: 25px"> Buscamos marcar un punto de partida para la transformación de nuestras<br/>
        dificultades y diferencias en cimientos firmes que, desde las ciudades,<br/>
        requieren nuestros países latinoamericanos para convertirse en los mejores<br/>
        lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino<br/>
        por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de<br/>
            vida y asegurar los derechos de las futuras generaciones.
    </p>
    </div>

</div>
<div class="popup">
    <div class="popup_content">
        <img src="./img/BUTTON-03-512.webp" alt = "close" class="close">
        <h3>Welcome, Please login to sign up for events and to interact with blogs</h3>
        <form name="login_form" action = "{{url('/user/checklogin')}}" method = "post" onsubmit="validateForm()">
            {{csrf_field()}}
            <input type = "text" name = "email" class = "input1" placeholder="Email" required/>
            <input type = "password" name = "pass" class = "input1" placeholder="Password" required/>
            <input class="submit_button" type = "Submit" value = "Login"/>
        </form>
    </div>
</div>

<div class="over_img">
    <img style="height: 100%" src="./img/objects.png">
</div>
<script>
    document.getElementById("button1").addEventListener("click",function(){
        document.querySelector(".popup").style.display = "flex";
    })

    document.querySelector(".close").addEventListener("click",function () {
        document.querySelector(".popup").style.display = "none";

    })
</script>

</body>
</html>
