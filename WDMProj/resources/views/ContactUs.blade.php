<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8" >
    <title>GENTE & CIUDAD - CONTACT US</title>
    
    
    <script>
        function validateForm() {
            var x = document.forms["contact_form"]["email"].value;
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
<div class = "PageTitle"  style="background-image: url('./img/homepage-one-banner.jpg')";>
    <div class = "Title-text">
        <p style="font-size: 32px">CONTACT US</p>
        <p>HOME > CONTACT US</p>
    </div>
</div>



<div class="row">
    <div class="column1" >
        <p  style="font-size: 32px" align="left">NEUSTRAS <span style="color:orange"><i> REDES <br/>SOCIALES</i></span></p>
        <div class ="line"></div>
        <p></p>
        <p></p>
        &emsp;&emsp;<img src="./img/instagram.png" alt="instagram logo" width="75" height="75" /> &emsp;&emsp;&emsp;&emsp; <img src="./img/twitter.png" alt="Twitter LOGO" width="75" height="75" />
        <p style="font-size: 15px"><a href="www.instagram.com/genteyciudadorg">@genteyciudadorg </a> &emsp; &emsp;<a href="www.twitter.com/genteyciudadorg">@genteyciudadorg</a></p>
        <p></p>
        <p></p>
        <p></p>
        &emsp;&emsp;<img src="./img/phone.png" alt="phone logo" width="75" height="75" /> &emsp;&emsp;&emsp; <img src="./img/email.png" alt="email LOGO" width="100" height="75" />
        <p style="font-size: 15px"><a>001 346 714 3892</a> &emsp; &emsp;<a href="www.twitter.com/genteyciudadorg">info@genteyciudad.org</a></p>
        <p style="font-size: 15px"><a>058 414 8225881</a></p>
        <p style="font-size: 15px"><a>056 933948007</a></p>
    </div>
    <div class="column2" >
        <p style="font-size: 32px" align="left">FORMULARIO DE <br/><span style="color: orange"><i> CONTACTO</i></span></p>
        <div class ="line"></div>
        <p></p>
        <p></p>
        <form name="contact_form" action="{{url('/query/insert')}}" method="post" onsubmit="validateForm()">
        {{csrf_field()}}  
            Tu Nombre (requerido)<br /><input name="name" type="text" placeholder="Tu Nombre" size="45" required/> <br /><br/>
            Tu Correo (requerido)<br/><input  name="email" type="text" placeholder="Tu Correo" size="45" required/> <br /><br/>
            Asunto<br/><input  name="Asunto" type="text" placeholder="Asunto" size="45" required/> <br /><br/>
            Asunto<br/><textarea cols="42" rows="8" name="Asunto1" placeholder="Asunto" required></textarea> <br /><br/>
            <input class= "submit_button" type="Submit" value="ENVIAR"/>
        </form>
    </div>
</div>

<div class = "Footer" style="background-image: url('./img/homepage-one-banner.jpg')";>
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
