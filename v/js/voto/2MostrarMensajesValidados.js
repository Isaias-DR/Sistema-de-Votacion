import {
  validarTextoEnBlanco,
  validarCantidadPalabras,
  validarTextoLargo5,
  validarInclusiónTexto,
  validarInclusiónNúmero,
  validarFormatoRUT,
  validarDVRUT,
  validarCorreo
} from "./2.1ValidarValores.js";

export const mostrarMensajesValidados = (
  {
    txtNombreApellido,
    txtAlias,
    txtRut,
    txtEmail,
    txtRegion,
    txtComuna,
    txtCandidato,
    txtNosotros
  }
) => {

  let sonValidos = true;

  // 2.1 - Nombre y Apellido

  if (validarTextoEnBlanco(txtNombreApellido)) {

    document.getElementById('msgNombreApellido1').innerHTML = 'No puede estar vacío.';
    sonValidos = false;
  }
  else {

    document.getElementById('msgNombreApellido1').innerHTML = '';
  }

  if (!validarCantidadPalabras(txtNombreApellido)) {

    document.getElementById('msgNombreApellido2').innerHTML = 'Tiene que tener un apellido.';
    sonValidos = false;
  }
  else {

    document.getElementById('msgNombreApellido2').innerHTML = '';
  }

  // 2.2 - Alias

  if (validarTextoLargo5(txtAlias)) {

    document.getElementById('msgAlias1').innerHTML = 'No puede tener menos de 5 caracteres.';
    sonValidos = false;
  }
  else{

    document.getElementById('msgAlias1').innerHTML = '';
  }

  if (!validarInclusiónTexto(txtAlias)) {

    document.getElementById('msgAlias2').innerHTML = 'Tiene que tener letras.';
    sonValidos = false;
  }
  else {

    document.getElementById('msgAlias2').innerHTML = '';
  }

  if (!validarInclusiónNúmero(txtAlias)) {

    document.getElementById('msgAlias3').innerHTML = 'Tiene que tener números.';
    sonValidos = false;
  }
  else {

    document.getElementById('msgAlias3').innerHTML = '';
  }

  // 2.3 - RUT
  
  if (!validarFormatoRUT(txtRut)) {

    document.getElementById('msgRut1').innerHTML = 'Tiene que tener formato del RUT de Chile, ejemplo: "12.345.678-K".';
    sonValidos = false;
  }
  else {

    document.getElementById('msgRut1').innerHTML = '';
  }

  if (!validarDVRUT(txtRut)) {

    document.getElementById('msgRut2').innerHTML = 'No es un RUT válido.';
    sonValidos = false;
  }
  else {

    document.getElementById('msgRut2').innerHTML = '';
  }

  // 2.4 - Email

  if (!validarCorreo(txtEmail)) {

    document.getElementById('msgEmail1').innerHTML = 'Tiene que tener un formato de correo, ejemplo: "isaias@desis.cl".';
    sonValidos = false;
  }
  else {

    document.getElementById('msgEmail1').innerHTML = '';
  }

  return sonValidos;
}