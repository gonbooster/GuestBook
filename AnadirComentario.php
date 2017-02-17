<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="images/ico.gif"> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Libro de Visitas ::: Formulario</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="js/validar.js"></script>
</head>
<body>
<?php 
include_once('Header.php');
?>
<div id="logo">
	<h1>Añadir comentario</h1>
    <p><em>Deja constancia de tu presencia :p</em></p>
</div><hr />
<div id="page-htop"></div>
<div id="page-bgtop"><div class="inner_copy"></div>
<div id="page"> 
   <div id="lazo"></div>
   <div id="content">
    <form id="formAnadir" method="post" action="ProcesarForm.php">
    <!-- mensaje de validación final-->
    <span id="ok" class="ok"></span></p>
          <table>
            <tr>
              <td><p><span>Nombre:</span></p></td>
              <td><input type="text" name="nombre" id="nombre" maxlength="10" />
              <!-- mensaje de validación nombre-->
              <div id="mensaje1" class="errores">*Introduce tu nombre</div>
              <?php
                error_reporting (E_ALL ^ E_NOTICE);
                if($_GET['error']=='1'){
                echo '<font color="#FF0000">*Introduce tu nombre</font><br/>';
                }?>
              </td>
            </tr>
            <tr>
              <td><p><span>Email:</span></p></td>
              <td><input type="text" name="email" id="email" value="<?php echo $nombre;?>"/>
              <!-- mensaje de validación email-->
              <div id="mensaje2" class="errores">*Introduce tu email</div>
               <?php
                error_reporting (E_ALL ^ E_NOTICE);
                if($_GET['error']=='2'){
                echo '<font color="#FF0000">*Introduce tu email</font><br/>';
                }?>
              <input type="checkbox" name="publica" id="publica" />
              <span>Publicar email</span>
              </td>
            </tr>
            <tr>
              <td><p><p><span>Comentario:</span></p></p></td>
              <td></td>
            </tr>
            <tr>
              <td colspan="2">
              <textarea tabindex="50" name="comentario" id="comentario" cols="50" rows="19"
              onKeyDown="ContarTexto(formAnadir.comentario,formAnadir.cajita,1000);"
              onKeyUp="ContarTexto(formAnadir.comentario,formAnadir.cajita,1000);"></textarea>
              <!-- mensaje de validación comentario-->
             <div id="mensaje3" class="errores">*Introduce un comentario</div>
                <?php
                error_reporting (E_ALL ^ E_NOTICE);
                if($_GET['error']=='3'){
                echo '<font color="#FF0000">*Introduce un comentario</font><br/>';
                }?>
             </td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="button"  name="boton" id="enviar" value="Enviar" /></td>
            </tr>
          </table>
        </form>
      </div>
	  <div class="fclear"></div>
  </div>
 <?php include_once('Footer.php');?>
 
</body>
</html>