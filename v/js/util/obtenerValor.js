export const obtenerValorId = (elemento) => {

  return document.getElementById(elemento);
}

export const obtenerValor = (elemento) => {

  return obtenerValorId(elemento).value;
}