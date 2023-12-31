import { obtenerRegistros } from "../util/obtenerRegistros.js";
import { listarSelect } from "../util/listarSelect.js";
import { validarSiContinuar } from "../util/mostrarMensajeDelResultado.js";

export const listarRegiones = async () => {

  const listaRegiones = await obtenerRegistros('region/listarRegiones');

  // console.log(listaRegiones);
  
  if (validarSiContinuar(listaRegiones)) listarSelect('optRegion', listaRegiones, 'id', 'region');
}