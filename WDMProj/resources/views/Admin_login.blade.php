<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
    <meta charset="UTF-8" >
    <title>GENTE & CIUDAD - Admin </title>




    <script>


        function validateEmail() {
            var y = document.forms["admin_form"]["email"].value;
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (y.match(mailformat)) {
                return true;
            }
            else {
                alert("Not a valid email");
                return false;
            }

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
<div class = "PageTitle" style="background-image: url('./img/homepage-one-banner.jpg');">
    <div class = "Title-text">
        <p style="font-size: 32px">Administrator</p>
        <p>Login or Register</p>
    </div>
</div>



<div class="row">
    <div class="column1" >
        <p  style="font-size: 32px" align="left">LOGIN <span style="color:orange"><i> AS <br/>ADMINISTRATOR</i></span></p>
        <div class ="line"></div>
        <div class="admin_login">
        <form name="admin_form" action="{{url('/admin/checklogin')}}" method = "post" onsubmit="validateEmail()">
            {{csrf_field()}}
            <input type = "text" name = "email" class = "input1" placeholder="Username" required/>
            <input type = "password" name = "pass" class = "input1" placeholder="Password" required/>
            &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input class="submit_button" type = "Submit" value = "LOGIN"/>
        </form>
        </div>
    </div>
    <div class="column2" >
        <p style="font-size: 32px" align="left">REGISTER AS <br/><span style="color: orange"><i> ADMINISTRATOR</i></span></p>
        <div class ="line"></div>
        <p></p>
        <p></p>
        <form name="admin_form" action="{{url('/admin/insert')}}" method="post">
            {{csrf_field()}}
            NAME:<br /><input name="name" type="text" placeholder="Name" size="45" required/> <br /><br/>
            EMAIL:<br/><input  name="email" type="text" placeholder="Email" size="45" required/> <br /><br/>
            PASSWORD:<br/><input  name="password" type="password" placeholder="Password" size="45" required/> <br /><br/>
            CITY:<br/><input name="City" type="text" placeholder="City" required/> <br /><br/>
            <input class= "submit_button" type="Submit" value="REGISTER"/>
        </form>
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
