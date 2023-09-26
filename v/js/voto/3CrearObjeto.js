import { enviarYObtenerRespuesta } from './3.2ObtenerRespuesta.js'

export const crearObjeto = async (sonValidos, valores) => {

  return sonValidos
    ?
    await enviarYObtenerRespuesta('POST',valores, 'voto/registrarVoto.php')
    :
    { mensaje: 'no valido', dato: 'Los datos ingresados en el formulario del voto no son válidos.' }
}