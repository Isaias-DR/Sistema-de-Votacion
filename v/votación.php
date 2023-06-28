<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta id="viewport" content="width=device-width, initial-scale=1.0">
  <title>VOTACIÓN</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <a href="../index.php">Inicio</a>

  <h1>FORMULARIO DE VOTACIÓN:</h1>

  <div class="divTable">
    <div class="divTableBody">
      <div class="divTableRow">
        <div class="divTableCell">Nombre y Apellido</div>
        <input type="text" id="txt_nombre">
        <div id="msg_nombre"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Alias</div>
        <input type="text" id="txt_alias">
        <div id="msg_alias"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">RUT</div>
        <input type="text" id="txt_rut">
        <div id="msg_rut"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Email</div>
        <input type="text" id="txt_email">
        <div id="msg_email"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Región</div>
        <input type="text" id="txt_region">
        <div id="msg_region"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Comuna</div>
        <input type="text" id="txt_comuna">
        <div id="msg_comuna"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Candidato</div>
        <input type="text" id="txt_candidato">
        <div id="msg_candidato"></div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Como se enteró de Nosotros</div>
        <input type="text" id="txt_nosotros">
        <div id="msg_nosotros"></div>
      </div>
    </div>
  </div>
  <br>

  <div class="divTableFoot">
    <div class="divTableRow">
      <div class="divTableCell">
        <input type="button" value="Votar" id="btn_botar">
      </div>
    </div>
  </div>
  </div>
  
</body>

</html>