import { directorioMicroServicio } from "../ambiente/constantes.js";

export const enviarValoresFetch = async (nombreMetodo, valores, nombreArchivoMicroServicio) => {

  try {

    let header = {
      method: nombreMetodo,
      headers: {
        'Content-Type': 'application/json'
      }
    }

    if (Object.keys(valores).length > 0) {

      header.body = JSON.stringify(valores)
    }

    const response = await fetch(directorioMicroServicio + nombreArchivoMicroServicio, header);

    if (!response.ok) {

      throw new Error('La solicitud no fue exitosa');
    }

    const resultado = await response.json();

    //console.info(resultado);

    return {
      mensaje: "exito",
      dato: resultado
    }

  } catch (error) {

    //console.error(error);

    return {
      mensaje: "error",
      dato: error.toString()
    }
  }
}