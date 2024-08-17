<?php
//proceso del formulario
// si existe "enviar"...
if (isset ($_POST['enviar'])) {

//recogemos las variables
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$comentario=$_POST['comentario'];

//comprobamos si todos los campos fueron completados
if ($nombre!='' && $email!='' && $telefono!='' && $comentario!='') {
// si es asi armamos el html
$contenido = '<html><body>';
$contenido .= '<h2>Contacto desde formulario</h2>';
$contenido .= '<p>Enviado el '.  date("d M Y").'</p>';
$contenido .= '<hr />';
$contenido .= '<p>Nombre: <strong>'.$nombre.'</strong>';
$contenido .= '<p>Email: <strong>'.$email.'</strong>';
$contenido .= '<p>Telefono: <strong>'.$telefono.'</strong>';
$contenido .= '<p>Comentario: <strong>'.$comentario.'</strong>';
$contenido .= '<hr />';
$contenido .= '</body></html>';

// si todos los campos fueron completados enviamos el mail
mail ("jorgez@gcdigitalmark.com", "Contacto", $contenido, "From: $email\nContent-Type: text/html; charset=iso-8859-1\nContent-Transfer-Encoding: 8bit") && mail("$email", "GC Digital Marketing", "<br> Gracias por contactarnos.. En breve nos pondremos en contacto usted.", "From: $email\nContent-Type: text/html; charset=iso-8859-1\nContent-Transfer-Encoding: 8bit"); 
$flag='ok';
$mensaje='<div id="ok" style="color:white">Gracias por Contactarnos<br>Nosotros nos pondremos en contacto con Usted</div>';

} else {
//si no todos los campos fueron completados se frena el envio y avisamos al usuario	
$flag='err';
$mensaje='<div id="error" style="color:white">Todos Los Campos Son Requeridos</div>';
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="GC Digital Marketing"/>
<meta name="description" content="Contactanos, Cotizacion gratis, Contacto, Formularios, Precios web"/>
<meta name="keywords" content="Paginas Web en Ciudad Juarez, Paginas web en cd juarez, paginas web en el paso texas, paginas web en el paso, sitios web en ciudad juarez, sitios web en el paso, sitios web en cd juarez, diseno de paginas web en ciudad juarez, diseno de paginas web en cd juarez chihuahua, ciudad juarez, el paso, el paso texas, posicionamiento en internet, publicidad, publicidad diseño grafico, digital marketing, gc digital marketing, gcdigitalmark, g.c digital mark, g.c digital marketing, dominios, dominio, .com, .com.mx, google, Sitios Web, Mercadotecnia Programación Web Diseño Web Alojamiento Hosting Web Pages Websites Ciudad Juárez Chihuahua El Paso Texas Correo Email Phones Apps Facebook Youtube Flash Animacion html5 php mysql redes sociales marketing google adwords" />
<meta name="robots" content="index, follow" />
<meta name="revisit-after" content="2 days" />
<meta name="distribution" content="global" />
<meta name="googlebot" content="index, follow" />
<meta name="owner" content="G.C. Digital Marketing" />
<meta name="title" content="GC Digital Markenting - Ciudad Juarez" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<title>GC Digital Marketing - Paginas web en Ciudad Juarez y El Paso</title>
<script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/estilos.css" media="all" />

</head>

<body style="margin:0%; background-repeat:repeat-x; background-color:#000" oncontextmenu="return false">

<div style="width:100%; background-color:#022160">
<div class="an" style="background-image:url(imagenes/cel_logo.jpg)">
</div>
</div>

<div style="background-color:#022160">
<?php {include 'animacion.php';} ?>
</div>

<div>
<?php
{include 'menu.php';}
?>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");
</script>

<div style="background-image:url(imagenes/bginicio4.jpg)">

<div class="background" style="background-image:url(imagenes/degradado.png); text-align:center">

<br>
<p id="titulo">Contactanos</p>

    <ul class="divcontacto">
  			<li>
<!-- inicio formulario -->  
<div style="background-image:url(imagenes/f_contacto.png); background-size:100%; height:420px; margin-right:5%; background-position:center; background-repeat:no-repeat; margin-top:10%">
<? echo $mensaje; /*mostramos el estado de envio del form */ ?>
            <? if ($flag!='ok') { ?>
          <form action="contacto.php" method="post">
<br><br>  
    <table width="360" border="0" align="center">
	  <tr>
	    <td width="141" height="48" align="center" valign="middle" style="color: #FFF; font-size: 19px; font-family: Constantia;">Nombre*</td>
	    <td width="209" align="left" valign="middle"><input <? if (isset ($flag) && $_POST['nombre']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="text" name="nombre" value="<? echo $_POST['nombre'];?>" placeholder="Nombre" autofocus="autofocus" required="required"/></td>
	    </tr>
	  <tr>
	    <td height="57" align="center" valign="middle" style="color: #FFF; font-size: 19px; font-family: Constantia;">Email*</td>
	    <td align="left" valign="middle"><input <? if (isset ($flag) && $_POST['email']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="email" name="email"  value="<? echo $_POST['email'];?>" placeholder="example@company.com" required="required"/></td>
	    </tr>
        <tr>
	    <td width="141" height="48" align="center" valign="middle" style="color: #FFF; font-size: 19px; font-family: Constantia;">Telefono*</td>
	    <td width="209" align="left" valign="middle"><input <? if (isset ($flag) && $_POST['telefono']=='') { echo 'class="error"';} else {echo 'class="campo"';} ?> type="tel" name="telefono" value="<? echo $_POST['telefono'];?>" placeholder="1234567" required="required"/></td>
	    </tr>
	  <tr>
	    <td align="center" valign="middle" style="color: #FFF; font-size: 19px; font-family: Constantia;">Comentario*</td>
	    <td align="left" valign="middle"><textarea <? if (isset ($flag) && $_POST['comentario']=='') { echo 'class="com-error"';} else {echo 'class="com"';} ?> name="comentario" required="required"><? echo $_POST['comentario'];?></textarea></td>
	    </tr>
        </table>
        
        <div style="text-align:center">
        <input class="boton" type="submit" name="enviar" value="enviar" />
		</div>
		</form>
<? } ?>
</div>
<!-- Fin de formulario -->
			</li>
            <li>
<!-- inicio de animacion -->
<div style="margin-top:10%">
<iframe name="window" src="animacion_contacto.php" width="380" height="250" marginwidth="0" scrolling="yes" frameborder="0" style="margin-top:10%"></iframe>
</div>
<!-- Fin animacion -->
			</li>
           </ul>
</div> <!-- Fin fondo medio principal -->

<div>
<?php
{include "footer.php";}
?>
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID2");
</script>
</body>
</html>