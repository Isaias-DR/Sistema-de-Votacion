import { DIRECTORIO_MICRO_SERVICIO } from "../AMBIENTE/constantes.js";

export const enviarValoresFetch = async (nombreMetodo, valores, nombreArchivoMicroServicio) => {

  try {
    
    // Crear la consulta HTTP
    let request = {
      method: nombreMetodo,
      headers: {
        'Content-Type': 'application/json'
      }
    }
    
    // Tansformar los valores a JSON y asignarselo al cuerpo de la consulta HTTP
    if (Object.keys(valores).length > 0) {

      request.body = JSON.stringify(valores)
    }

    // Consultar al servicio
    const response = await fetch(DIRECTORIO_MICRO_SERVICIO + nombreArchivoMicroServicio, request);

    if (!response.ok) {

      return {
        mensaje: "error fatal 2",
        dato: 'La solicitud no fue exitosa'
      }
    }

    // Transformar la respuesta en JSON
    const resultado = await response.json();

    //console.info(resultado);

    if (resultado.mensajeMS === 'error conexión') {

      return {
        mensaje: resultado.mensajeMS,
        dato: resultado.datos
      }
    }

    return {
      mensaje: "exito",
      dato: resultado
    }

  } catch (error) {

    //console.error(error);

    return {
      mensaje: "error fatal 1",
      dato: error.toString()
    }
  }
}