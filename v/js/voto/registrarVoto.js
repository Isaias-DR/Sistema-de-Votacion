import { crearObjetoValor } from './1CrearObjetoValor.js'
import { mostrarMensajesValidados } from './2MostrarMensajesValidados.js'
import { crearObjeto } from './3CrearObjeto.js'
import { mostrarMensajeDelResultado } from './4MostrarMensajeDelResultado.js'

export const enviar_voto_del_formulario = async () => {

  // 1 - Obtener los valores
  const valores = crearObjetoValor()

  // 2 - Validar los valores
  const sonValidos = mostrarMensajesValidados(valores)

  // 3 - Crear objeto respuesta
  const respuesta = await crearObjeto(sonValidos, valores)

  // 4 - Avisarle al votante del registro de su voto
  mostrarMensajeDelResultado(respuesta)
}
