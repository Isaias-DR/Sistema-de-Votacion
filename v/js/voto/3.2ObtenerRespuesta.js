import { enviarValoresFetch } from "./3.1EnviarValores.js";

export const enviarYObtenerRespuesta = async (nombreMetodo, valores, nombreArchivoMicroServicio) => {

  try {

    let resultado = await enviarValoresFetch(nombreMetodo, valores, nombreArchivoMicroServicio);

    //console.info(resultado);

    return {
      mensaje: "exito",
      dato: resultado
    }

  } catch (error) {

    //console.error(error);

    return {
      mensaje: "error",
      dato: error
    }
  }
}