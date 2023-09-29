// 2.2.1 - Nombre y Apellido

export const validarTextoEnBlanco = (texto) => {

  return texto.trim() === "";
}

export const validarCantidadPalabras = (texto) => {

  return texto.trim().split(" ").length > 1;
}

// 2.2.2 - Alias

export const validarTextoLargo5 = (texto) => {

  return texto.length < 5
}

export const validarInclusiónTexto = (texto) => {

  return /[AEIOUÁÉÍÓÚÜaeiouáéíóúüBCDFGHJKLMNÑPQRSTVWXYZbcdfghjklmnñpqrstvwxyz]/.test(texto)
}

export const validarInclusiónNúmero = (texto) => {

  return /[0-9]/.test(texto)
}


// 2.2.3 - RUT

export const validarFormatoRUT = (texto) => {

  return /^(\d{1,3}(?:\.\d{3})*)\-([\dkK])$/.test(texto)
}

export const saberDVRUT = (rut) => {

  let contador = 0, resultado = 1;
  for (; rut; rut = Math.floor(rut / 10))
    resultado = (resultado + rut % 10 * (9 - contador++ % 6)) % 11;
  return resultado ? resultado - 1 : 'k';
}

export const validarDVRUT = (rutCompleto) => {

  let tmp = rutCompleto.split('-');
  let rut = tmp[0].replaceAll(".", "");
  let dv = tmp[1];
  if (dv == 'K') dv = 'k';

  return (saberDVRUT(rut) == dv);
}


// 2.2.4 - Email

export const validarCorreo = (correo) => {

  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(correo);
}


// 2.2.5 - Región, Comuna // TODO: Implementar como mejora al Candidato

export const validarSelect = (idSeleccionado) => {

  return parseInt(idSeleccionado) !== 0;
}


// Nosotros

export const validarNosotros = (arraySelección) => {

  return arraySelección.length >= 2;
}


//