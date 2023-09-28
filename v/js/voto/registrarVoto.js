import { crearObjetoValor } from './crearObjetoValor.js'
import { mostrarMensajesValidados } from './mostrarMensajesValidados.js'
import { crearObjeto } from './crearObjeto.js'
import { mostrarMensajeDelResultado } from '../util/mostrarMensajeDelResultado.js'

export const enviarVotoDelFormulario = async () => {

  // 1 - Obtener los valores
  const valores = crearObjetoValor()

  // 2 - Validar los valores
  const sonValidos = mostrarMensajesValidados(valores)

  // 3 - Crear objeto respuesta
  const respuesta = await crearObjeto(sonValidos, valores)

  // 4 - Avisarle al votante del registro de su voto
  mostrarMensajeDelResultado(respuesta)
}
