import { obtenerValor, obtenerValoresCheckBox } from "../util/obtenerValor.js";
import { AMBIENTE } from "../AMBIENTE/constantes.js";

export const crearObjetoValor = () => {

  let valor = {}

  if (AMBIENTE === 'desarrollo') {
    valor = {
      txtNombreApellido: 'Isaías Díaz',
      txtAlias: 'Isa_123',
      txtRut: obtenerValor("txtRut"),
      txtEmail: 'isaias@desis.cl',
      optRegion: 1,
      optComuna: 2,
      optCandidato: 3,
      chkNosotros: [4, 5]
    }
  }

  if (AMBIENTE === 'producción') {
    valor = {
      txtNombreApellido: obtenerValor("txtNombreApellido"),
      txtAlias: obtenerValor("txtAlias"),
      txtRut: obtenerValor("txtRut"),
      txtEmail: obtenerValor("txtEmail"),
      optRegion: obtenerValor("optRegion"),
      optComuna: obtenerValor("optComuna"),
      optCandidato: obtenerValor("optCandidato"),
      chkNosotros: obtenerValoresCheckBox("chkNosotros")
    }
  }

  //console.table(valor)

  return valor
}