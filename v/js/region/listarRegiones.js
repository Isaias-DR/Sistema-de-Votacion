import { obtenerRegistros } from "../util/obtenerRegistros.js";
import { listarSelect } from "../util/listarSelect.js";

export const obtenerRegiones = async () => {
  
  const listaRegiones = await obtenerRegistros('region/listarRegiones');

  listarSelect('txtRegion', listaRegiones, 'region')
}