import { obtenerRegistros } from "../util/obtenerRegistros.js";
import { listarSelect } from "../util/listarSelect.js";
import { validarSiContinuar } from "../util/mostrarMensajeDelResultado.js";

export const listarCandidatos = async () => {

  const listaCandidatos = await obtenerRegistros('candidato/listarCandidatos');

  if(validarSiContinuar(listaCandidatos)) listarSelect('txtCandidato', listaCandidatos, 'id_candidato', 'nombre')
}