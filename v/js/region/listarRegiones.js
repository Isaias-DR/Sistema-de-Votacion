import { obtenerRegistros } from "../util/obtenerRegistros.js";
import { listarSelect } from "../util/listarSelect.js";
import { validarSiContinuar } from "../util/mostrarMensajeDelResultado.js";

export const obtenerRegiones = async () => {

  const listaRegiones = await obtenerRegistros('region/listarRegiones');

  // console.log(listaRegiones);
  
  if (validarSiContinuar(listaRegiones)) listarSelect('txtRegion', listaRegiones, 'id', 'region');
}