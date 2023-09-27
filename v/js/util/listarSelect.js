import { obtenerValorId } from "./obtenerValor.js";

export const listarSelect = (nombreCampo, valores, nombrePropiedad) => {

  valores.dato.datos.forEach(obj => {

    obtenerValorId(nombreCampo).insertAdjacentHTML('beforeend', '<option value="' + obj.id + '">' + obj[nombrePropiedad] + '</option>')
  });
}

export const inicializarElementoSelect = (nombreCampo) => {

  const select = obtenerValorId(nombreCampo);

  while (select.firstChild) {

    select.removeChild(select.firstChild);
  }
}

export const inicializarSelect = (nombreCampo, nombreAgregado) => {

  obtenerValorId(nombreCampo).insertAdjacentHTML('beforeend', `<option value="0">Seleccione ${nombreAgregado}</option>`);
}