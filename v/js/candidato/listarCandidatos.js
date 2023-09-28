import { obtenerRegistros } from "../util/obtenerRegistros.js";
import { listarSelect } from "../util/listarSelect.js";

export const listarCandidatos = async () => {

  const listaCandidatos = await obtenerRegistros('candidato/listarCandidatos');

  listarSelect('txtCandidato', listaCandidatos, 'nombre')
}