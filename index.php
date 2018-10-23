<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bienvenido &iacute;tulo</title>
<script src="js/jquery-2.1.4.js" type="text/javascript"></script>
<link href="bootstrap/bootstrap.min.css" rel="stylesheet"/>
<link href="bootstrap/bootstrap-theme.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/paraicono.css">
<link rel="stylesheet" href="alertaschidas/sweetalert.css"/>
<script src="alertaschidas/sweetalert-dev.js"></script>

</head>
<style>
@font-face{
font-family:Fuentechida;
src:url(fonts/OleoScript-Regular.ttf);
}
    body{
        background-image: url(imagenes/fondaso.jpg);
        background-size:cover;
        background-repeat: no-repeat;
        background-attachment:fixed;
    }
    .formulario{
        transition: 2s;
        margin-top: 100px;
        width: 30%;
        box-shadow: 0px 0px 20px rgba(255,255,255 ,1),0px 0px 80px rgba(256,256,256 ,1);
    }

    .formulario:hover{
        transition: .8s;
        background-color: rgba(0,0,0,.5);
    }


.logo{
        height: 75px;
        margin-top: 40px;
    }

 .espaciado{
        margin-top: 10px;
    }




   h3,h4{
        margin-top: 10px;
        color:white;
        text-align: center;
        font-family: fuentechida;
    }

    .Input{
        transition: .8s;
        background-color: rgba(0,0,0,.5);
        color: white;
        border-color:#006;
    border-bottom-color:white;
        border-bottom-style:groove;
    border-left:none;
    border-right:none;
    border-top:none;
        border-width: 4px;

    }

    .Input:hover{
        transition: .8s;
    background-color:rgba(255,255,255 ,.5);
    box-shadow:inset;
        border-bottom-color:white;
    }

    .Input:focus{
        transition: .8s;
    border-bottom-color:red;
    }



    @media screen and (max-width:750px) {

        .logo{
            height: 50px;

        }
        .formulario{
            transition: 2s;
            width: 95%;
            margin-top: 10px;
        }
    }
</style>


<body>
    <div class="container formulario">
         <div class="row">
               <div class="col-xs-4 col-xs-offset-4  ">
                <img src="imagenes/logo.png" class="logo center-block">
                </div>

        </div>
         <div class=" espaciado">

                </div>
        <div class="row">
            <fieldset class="col-xs-10 col-xs-offset-1">


                <legend class="hidden-xs">
                    <h3>Iniciar Sesion</h3>
                </legend>









               <form  role="form" class="form-horizontal" action="index.php" method="post">
<div class="form-group">
                    <label class="col-xs-12" name="sssemail" for="usuario"><h4>Email</h4></label>
 </label>

                 <div class="col-xs-10 col-xs-offset-1">


 <input type="email"  name="email" value="" class="form-control Input" >


  </div>

                    </div>
                    <div class="form-group">
                    <label class="col-xs-12" for="password"><h4>Password</h4></label>
                 <div class="col-xs-10 col-xs-offset-1">
<input type="password" name="clave"
value="" class="form-control col-xs-12 Input"><br><br></div>

                    </div>

                    <div class="form-group">
<input type="submit" name="" value="Ingresar" class="btn btn-danger center-block">
</form>
<?php
if (isset($_POST['email']) && isset($_POST['clave'])) {
    require_once "php/connect.php";
    require_once "procesos/login.php";
}
?>


</body>
</html>