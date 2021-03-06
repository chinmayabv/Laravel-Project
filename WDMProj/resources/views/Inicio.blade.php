<!DOCTYPE html>
<html lang="en">
<head>
  <!--<link rel="stylesheet" href="./css/Inicio.css">-->
  <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}">
  <meta charset="UTF-8">
  <title>GENTE & CIUDAD - LOGIN </title>
</head>
<body>
<div class="font">
<div class = "logo">
  <img src="./img/i.jpg" alt="GENTE & CIUDAD LOGO" width="150" height="120" />
</div>
<div class = "tabs" >
  <a style="text-decoration: none" href = "Inicio">Inicio</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "AboutUs">Nosotros</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "NuestrosEquipos">Equipos</a><a>&emsp;/&emsp;</a><a  style="text-decoration: none" href = "http://vxg5911.uta.cloud/Blog/blog/">Blog</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href="ContactUs">Contacto</a><a>&emsp;/&emsp;</a><a style="text-decoration: none" href = "Login">Inicio de Sesion</a>

</div>

<p></p>
<p></p>

<div class="under_img">
  <img style="height:400px; width:100%;" src="./img/homepage-one-banner.jpg">

  <div class="Login-text">
    <p style="font-size: 45px"><span style="color: orange">GENTE </span><br/><i>Y CIUDAD</i></p>
    <p style="font-size: 15px"> Buscamos marcar un punto de partida para la transformación de nuestras<br/>
      dificultades y diferencias en cimientos firmes que, desde las ciudades,<br/>
      requieren nuestros países latinoamericanos para convertirse en los mejores<br/>
      lugares para vivir, ya no solo por las bellezas y riquezas de nuestras tierras, sino<br/>
      por lo decisión de su gente de aportar lo mejor de si para mejorar su calidad de<br/>
      vida y asegurar los derechos de las futuras generaciones.
    </p>
  </div>

</div>
<div class="over_img">
  <img style="height: 400px; width:70%" src="./img/objects.png">
</div>
<div id="tile-box">
  <div class="tile">
    <h2>Objectivos</h2>
    <p>Realizar investigaciones, estudios y propuestas legislativas, relacionados con la gestión de los<br/>
      gobierno locales para el desarrollo sostenible.<br/>Formular proyectos para promover la participación ciudadana en iniciativas locales para la<br/>
      sostenibilidad.<br/>Desarrollar programas de capacitación en las áreas de participación ciudadana local y gobierno
      abierto para la sostenibilidad.<br/>Promover iniciativas de responsabilidad social y voluntariado,  como  espacios  de participación<br/>
      ciudadanaImplementar campañas de sensibilización para motivar en la audiencia el ejercicio activo de la <br/>
      ciudadanía como eje fundamental para la transformación de las ciudades.</p>
  </div>
</div>
<div style="position: relative; top: 130px; text-align: center; font-size: 32px">
  <p>Nuestros<span style="color: orange"> Valores</span></p>
</div>
<div class="row">
  <div class="column1-text" >
    <h1>CALIDAD</h1>
    <div class ="line"></div>
    <p>Es la práctica de los integrantes de Gente & <br/>Ciudad que fomenta una mejora continua <br/>para alcanzar la misión de la organización.</p>
    <h1><br/>COMPROMISO</h1>
    <div class ="line"></div>
    <p>Los integrantes de Gente & Ciudad asumen<br/> como propio el cumplimiento de las<br/> obligaciones de la institución.</p>


  </div>
  <div class="column2-text">
    <h1>CONFIANZA</h1>
    <div class ="line"></div>
    <p>Es la seguridad que Gente & Ciudad genera a través de sus actos.<br/><span style="color: white">.</span> </p>
    <h1><br/>COOPERACIÓN</h1>
    <div class ="line"></div>
    <p>En Gente & Ciudad se promueve la suma de fuerzas para lograr objetivos compartidos.</p>


  </div>
  <div class="column3-text">
    <h1>COHERENCIA</h1>
    <div class ="line"></div>
    <p>Todas las actuaciones de Gente & Ciudad <br/>estarán en consonancia con sus valores<br/> institucionales.</p>
    <h1><br/>TRANSPARENCIA</h1>
    <div class ="line"></div>
    <p>Es la cualidad que caracteriza y promueve<br/> Gente & Ciudad que permite conocer <br/>claramente nuestro planteamientos y<br/> acciones.</p>
  </div>
</div>
<div class = "row">
  <div class = "table2">
    <table id = "tbl1">
    <tr>
      <th id = "th1"><img src="./img/Best-mic.jpg" alt="GENTE & CIUDAD LOGO" width="65" height="42" /><br/>18 FOROS</th>
      <th id = "th2"><img src="./img/Participants.png" alt="GENTE & CIUDAD LOGO" width="65" height="42" /><br/>50+ <br/>PASTICIPANTES</th>
    </tr>
    <tr>
      <th id ="td1"><img src="./img/Events.png" alt="GENTE & CIUDAD LOGO" width="65" height="42" /><br/>30 EVENTOS</th>
      <th id ="td2"><img src="./img/calender.jpg" alt="GENTE & CIUDAD LOGO" width="65" height="42" /><br/>3 EVENTOS<br/> PER DAY</th>
    </tr>
    </table>
  </div>
  <div class = "table3" style="background-image: url('./img/homepage-one-banner.jpg');" >
    <div class="Text">
      <h2>Registrate con <span class = "colorItalic"><i> Nostros</i></span></h2>
      <p>Para     estas     informado     de     nuestas actividades y eventos</p>
      <form class = "InicioReg">
        <input type="text" id="fname" name="fname" style="height:30px" value="Nombre Completo">
        <input type="text" id="ln" name="lname" style="height:30px" value="Correo"><br/><br/>
        <input type="text" id="ln2" name="lname" style="height:30px" value="Telefono">
        <select id="region" value="Cuidad de Origin" style="width: 184px;height: 30px">
          <option value="Null">Cuidad de Origin</option>
          <option value="Texas">Texas</option>
          <option value="California">California</option>
          <option value="Washington">Washington</option>
          <option value="Florida">Florida</option>
        </select><br/><br/>
        <input class= "submit_button" type="submit" value="REGISTRAR AHORA">
      </form>
    </div>
  </div>
</div>
<div class="greyRow">
    <div style="position: relative; text-align: center; font-size: 32px; top:20px;">
    <p>Nuestros Aliados<span style="color:orange"> <i>Estrategicos</i></span></p>
    </div>
    <img id ="img1" src ="./img/image3.jpg" alt="GENTE & CIUDAD LOGO" >
    <img id ="img2"src="./img/i.jpg" alt="GENTE & CIUDAD LOGO">
</div>
<div style="position: relative;text-align: center; font-size: 32px">
  <p>Nuestros <span style="color:orange"> <i>Blog</i></span></p>
</div>
  <div class ="TilesInicio">
    <div class="cardInicio">
      <img src="./img/image1.jpg" alt="Avatar">
      <div class="container">
        <h4><b>Ciudadanos</b></h4>
        <p>Admin  Likes   Comments</p>
      </div>
    </div>
    <div class="cardInicio">
      <img src="./img/image2.png" alt="Avatar">
       <div class="container">
        <h4><b>Ciudadanos</b></h4>
        <p>Admin  Likes   Comments</p>
       </div>
    </div>
    <div class="cardInicio">
      <img src="./img/image4.jpg" alt="Avatar">
      <div class="container">
       <h4><b>Ciudadanos</b></h4>
       <p>Admin  Likes   Comments</p>
      </div>
    </div>
  </div>
  <div class = "Footer" style="background-image: url('./img/homepage-one-banner.jpg');">
    <div class = "row">
      <div class="column1-footer">
        <p style="font-size: 35px; text-align: center">Contactate con <span style="color: orange"> Nosotros</span></p>
      </div>
      <div class="column2-footer">
        <input  name="Asunto" type="text" size="45" style="height: 40px" value="Email" />&emsp;&emsp;&emsp;<input class= "submit_button2" type="Submit" value="ENVIAR"/>

      </div>
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
</div>
</body>
</html>
