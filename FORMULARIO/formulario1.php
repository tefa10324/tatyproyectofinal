<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />

  <title>OFIMÁTICA</title>
  <link rel="shortcut icon" href="img/5fa45291b5f5c.jpeg">

  <style type="text/css">
    * {
      margin-left: 10px;
      margin-right: 10px;
    }

    .Estilo2 {
      font-size: medium;
    }

    .Estilo4 {
      font-size: large;
      font-weight: bold;
      font-family: Georgia, "Times New Roman", Times, serif;
    }

    .Estilo7 {
      font-size: large;
      font-weight: bold;
      color: #230147;
      font-family: "Montserrat", sans-serif;
    }
  

    fieldset {
      border-color:#00D0AA;
      background-color: #E8C999;
      margin: 15px;
    }
  </style>
  
</head>


<body background ="img/fondo.jpg">


  <form action="codigo.php" method="post">
    <p align="center" class="Estilo7"> REGISTRO DE ACTIVIDAD

    <CENTER>
    <fieldset>
    <span class="Estilo7">
      <legend><strong>REGISTRO</strong></legend>
      </span>

    <p align="center">
      <span class="Estilo7">
        CÉDULA:
        <label>
          <input type="text" name="cedula" required autofocus autocomplete="off"/>
        </label>
      </span>

      <span class="Estilo7">
        FECHA DE NACIMIENTO:
        <label>
          <input type="date" name="fecha" required autocomplete="off"/>
        </label>
      </span>

      <span class="Estilo7">
        E-MAIL:</span>
      <label>
        <input type="text" name="email" required autocomplete="off"/>
      </label>
      </span>
      
    </p>
  </fieldset>


    <fieldset>
    <span class="Estilo7">
      <legend><strong>INFORMACIÓN PERSONAL DEL ESTUDIANTE</strong></legend>
      </span>
      <p>
        <B>APELLIDO:</B>
        <input name="apellido" type="text" tabindex="1" required autocomplete="off">
        <B>NOMBRE:</B>
        <input name="nombre" type="text" tabindex="2" required autocomplete="off">
        <B>EDAD:</B>
        <input type="num" name="edad" style="width:50px;" min="1" max="50" pattern="[0-50]{2}" placeholder="##" required autocomplete="off"/>
        <B>DIRECCIÓN:</B>
        <input name="direccion" type="text" tabindex="3" required autocomplete="off"/>
      
      </p>
      <strong>GÉNERO:</strong>
      <label>
        MASCULINO
        <input name="genero" type="radio" value="masculino" />
      </label>
      <label>
        FEMENINO
        <input name="genero" type="radio" value="femenino" />
      </label>
      <label>
        OTRO
        <input name="genero" type="radio" value="otro" />
      </label>
    </fieldset>


    <fieldset class="conjunto_campos">

      <span class="Estilo7"> <legend><strong>TEMA</strong></legend></span> 

      <label><input name="tema" type="checkbox" value="PREGUERRA" tabindex="20">
      Funcionalidades  </label>
      <label><input name="tema1" type="checkbox" value="1910" tabindex="21">
      Tipos </label>
      <label><input name="tema2" type="checkbox" value="INICIO" tabindex="22">
      Casos de Éxito </label>
      <label><input name="tema3" type="checkbox" value="PAZ" tabindex="22">
      Herramientas Colaborativas </label>
      <label><input name="tema4" type="checkbox" value="RENDICION" tabindex="22">
     Procesador de Texto </label>´
      <label><input name="tema5" type="checkbox" value="1918" tabindex="22">
      Hojas de Cálculo </label>
    </fieldset>

    
    <fieldset class="conjunto_campos">

    <span class="Estilo7">  <legend><strong>RETROALIMENTACIÓN</strong></legend> </span> 
      <p>¿Necesita refuerzo de alguna temática?
        <input name="medicacion_ahora" type="radio" value="si" tabindex="35">Sí

        <input name="medicacion_ahora" type="radio" value="no" tabindex="35">No
      </p>
      <label>En caso que sí , especifique en cuál:
        <input type="text" name="medicacion_especifica" />
      </label>

    </fieldset>

    

    
    <fieldset class="conjunto_campos">
    <span class="Estilo7">  <legend><strong>MULTIMEDIA</strong></legend> </span>
      <datalist id="exam_realizados">
          <option value="Introducción" label="Herramientas Ofimáticas">
          <option value="Funcionalidad" label="Poster">
          <option value="Prezzi " label="Tipos de Herramientas">
          <option value="Video" label="Procesador de Texto">
          <option value="Enlace Informativo" label="Herramientas Colaborativas">       
      </datalist> 
      
      <label>
        <P>
      REGISTRO
        <input name="select" list="exam_realizados" required autocomplete="off">
      </P>
      </label>
    </fieldset>

    <center>
      <input type="reset" ; value="BORRAR TODO" />
      <input type="submit" ; value="IMPRIMIR LOS DATOS" />
    </center>
  </form>
</body>

</html>