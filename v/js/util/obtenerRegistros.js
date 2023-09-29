import { enviarValoresFetch } from "./enviarValoresFetch.js";

export const obtenerRegistros = async (nombreArchivo) => {

  const respuesta = await enviarValoresFetch('GET', {}, nombreArchivo + '.php');

  return respuesta;
}