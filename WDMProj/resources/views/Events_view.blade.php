<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EVENTS</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/ciudad.css')}}"> 
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
            <p style="font-size: 32px">EVENTS</p>
            <p>INICIO > EVENTS</p>
        </div>
    </div>
    <div>
    <table align="center" style="width:80%; text-align:center">
        <tr>
            <th>Event Name</th>
            <th>Date</th>
            <th>Event Description</th>
            <th>Location</th>
            <th>Delete</th>
            
        </tr>
    @foreach($data['event'] as $evt)
    <tr>
        <td>{{$evt->title}}</td>
        <td>{{$evt->date}}</td>
        <td>{{$evt->content}}</td>
        <td>{{$evt->place}}</td>
        <td><a href="{{url('/user/del/'.$evt->eid)}}"><input type ="Submit" class= "submit_button" type="Submit" value="Delete"/> </td>
    </tr>
    @endforeach
    <br/>
    </table>






    <div class="event_button">
        <a href="{{url('User_dash')}}"><input class= "submit_button" type="Submit" value="Back"/></a></br>
    </div>
    <div class = "Text1">
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
    </div>
</div>

</body>
</html>
