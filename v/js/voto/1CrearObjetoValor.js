import { obtenerValor, obtenerValoresCheckBox } from "../util/obtenerValor.js";
import { ambiente } from "../ambiente/constantes.js";

export const crearObjetoValor = () => {

  let valor = {}

  if (ambiente === 'desarrollo') {
    valor = {
      txtNombreApellido: 'Isaías Díaz',
      txtAlias: 'Isa_123',
      txtRut: obtenerValor("txtRut"),
      txtEmail: 'isaias@desis.cl',
      txtRegion: 1,
      txtComuna: 2,
      txtCandidato: 3,
      txtNosotros: [4,5]
    }
  }

  if (ambiente === 'producción'){
    valor = {
      txtNombreApellido: obtenerValor("txtNombreApellido"),
      txtAlias: obtenerValor("txtAlias"),
      txtRut: obtenerValor("txtRut"),
      txtEmail: obtenerValor("txtEmail"),
      txtRegion: obtenerValor("txtRegion"),
      txtComuna: obtenerValor("txtComuna"),
      txtCandidato: obtenerValor("txtCandidato"),
      txtNosotros: obtenerValoresCheckBox("txtNosotros")
    }
  }

  //console.table(valor)

  return valor
}