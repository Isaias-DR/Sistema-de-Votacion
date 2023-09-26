<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta id="viewport" content="width=device-width, initial-scale=1.0">
  <title>VOTACIÓN</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <a href="../index.php">Inicio</a>

  <h1>FORMULARIO DE VOTACIÓN:</h1>

  <div class="divTable">
    <div class="divTableBody">
      <div class="divTableRow">
        <div class="divTableCell">Nombre y Apellido</div>
        <div class="divTableCell">
          <input type="text" id="txtNombreApellido">
          <label id="msgNombreApellido1"></label>
          <label id="msgNombreApellido2"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Alias</div>
        <div class="divTableCell">
          <input type="text" id="txtAlias">
          <label id="msgAlias1"></label>
          <label id="msgAlias2"></label>
          <label id="msgAlias3"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">RUT</div>
        <div class="divTableCell">
          <input type="text" id="txtRut" placeholder="**.***.***-*">
          <label id="msgRut1"></label>
          <label id="msgRut2"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Email</div>
        <div class="divTableCell">
          <input type="text" id="txtEmail" placeholder="***@***.**">
          <label id="msgEmail1"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Región</div>
        <div class="divTableCell">
          <select id="txtRegion">
            <option value="0">Seleccione</option>
          </select>
          <label id="msgRegion"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Comuna</div>
        <div class="divTableCell">
          <select id="txtComuna">
            <option value="0">Seleccione</option>
          </select>
          <label id="msgComuna"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Candidato</div>
        <div class="divTableCell">
          <select id="txtCandidato">
            <option value="0">Seleccione</option>
          </select>
          <label id="msgCandidato"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Como se enteró de Nosotros</div>
        <div class="divTableCell">
          <input type="checkbox" id="txtNosotros" value="first_checkbox">Web</label>
          <input type="checkbox" id="txtNosotros" value="first_checkbox">TV</label>
          <input type="checkbox" id="txtNosotros" value="first_checkbox">Redes sociales</label>
          <input type="checkbox" id="txtNosotros" value="first_checkbox">Amigo</label>
          <label class="divTableCell" id="msg_nosotros"></label>
        </div>
      </div>
    </div>
  </div>
  <br>

  <div class="divTableFoot">
    <div class="divTableRow">
      <div class="divTableCell">
        <input type="button" value="Votar" id="btnVotar">
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="./js/index.js" type="module"></script>
</body>

</html>