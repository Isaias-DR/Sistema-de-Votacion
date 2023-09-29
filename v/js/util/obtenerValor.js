export const obtenerValorId = (elemento) => {

  return document.getElementById(elemento);
}
export const obtenerValoresName = (elemento) => {

  return document.querySelectorAll('input[type="checkbox"][name="' + elemento + '"]');
}

export const obtenerValor = (elemento) => {

  return obtenerValorId(elemento).value;
}

export const obtenerValoresCheckBox = (elemento) => {

  // Obtener todos los elementos de checkbox
  var checkboxes = obtenerValoresName(elemento);

  // Crear un array para almacenar los valores seleccionados
  var valoresSeleccionados = [];

  // Iterar a través de los checkboxes y verificar cuáles están seleccionados
  checkboxes.forEach((checkbox) => {
    if (checkbox.checked) {
      valoresSeleccionados.push(parseInt(checkbox.value));
    }
  });

  // Ahora, valoresSeleccionados contiene los valores de los checkboxes seleccionados
  //console.log(valoresSeleccionados);

  return valoresSeleccionados;
}