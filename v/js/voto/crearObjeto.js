import { enviarValoresFetch } from '../util/obtenerRespuesta.js'

export const crearObjeto = async (sonValidos, valores) => {

  return sonValidos
    ?
    await enviarValoresFetch('POST', valores, 'voto/registrarVoto.php')
    :
    { mensaje: 'no valido', dato: 'Los datos ingresados en el formulario del voto no son válidos.' }
}