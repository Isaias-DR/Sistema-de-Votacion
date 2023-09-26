import { obtenerValor } from "../util/obtenerValor.js";

export const crearObjetoValor = () => {

  const prueba =
    true
    // false
  let valor = {}

  if (prueba) {
    valor = {
      txtNombreApellido: 'Isaías Díaz',
      txtAlias: 'Isa_123',
      txtRut: '19.014.215-9',
      txtEmail: 'isaias@desis.cl',
      txtRegion: 1,
      txtComuna: 2,
      txtCandidato: 3,
      txtNosotros: 4
    }
  } else {

    valor = {
      txtNombreApellido: obtenerValor("txtNombreApellido"),
      txtAlias: obtenerValor("txtAlias"),
      txtRut: obtenerValor("txtRut"),
      txtEmail: obtenerValor("txtEmail"),
      txtRegion: obtenerValor("txtRegion"),
      txtComuna: obtenerValor("txtComuna"),
      txtCandidato: obtenerValor("txtCandidato"),
      txtNosotros: obtenerValor("txtNosotros")
    }
  }

  //console.table(valor)

  return valor
}