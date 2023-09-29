<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Isaías Díaz Rojas" />
  <meta name="copyright" content="Isaías Díaz Rojas" />
  <meta name="description" content="Formulario para el registro de votos." />
  <title>Votación</title>
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
          <select id="optRegion">
            <option value="0">Seleccione</option>
          </select>
          <label id="msgRegion1"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Comuna</div>
        <div class="divTableCell">
          <select id="optComuna">
            <option value="0">Seleccione una región</option>
          </select>
          <label id="msgComuna1"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Candidato</div>
        <div class="divTableCell">
          <select id="optCandidato">
            <option value="0">Seleccione</option>
          </select>
          <label id="msgCandidato1"></label>
        </div>
      </div>
      <div class="divTableRow">
        <div class="divTableCell">Como se enteró de Nosotros</div>
        <div class="divTableCell">
          <label><input type="checkbox" name="chkNosotros" value="1">Web</label>
          <label><input type="checkbox" name="chkNosotros" value="2">TV</label>
          <label><input type="checkbox" name="chkNosotros" value="3">Redes sociales</label>
          <label><input type="checkbox" name="chkNosotros" value="4">Amigo</label>
          <label id="msgNosotros1"></label>
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