import { enviarYObtenerRespuesta } from "../voto/3.2ObtenerRespuesta.js";

export const obtenerRegistros = async (nombreArchivo) => {
  
  const respuesta = await enviarYObtenerRespuesta('GET', {}, nombreArchivo+'.php');

  return respuesta;
}