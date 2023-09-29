import { obtenerValor } from "../util/obtenerValor.js";
import { enviarValoresFetch } from "../util/enviarValoresFetch.js";
import { inicializarElementoSelect, inicializarSelect, listarSelect } from "../util/listarSelect.js";
import { validarSiContinuar } from "../util/mostrarMensajeDelResultado.js";

export const obtenerComunas = async () => {

  const idRegion = parseInt(obtenerValor('txtRegion'));

  inicializarElementoSelect('txtComuna');

  inicializarSelect('txtComuna', 'una región');

  if (idRegion === 0) return;

  const listaComunas = await enviarValoresFetch('POST', { idRegion }, 'comuna/listarComunas.php');

  // console.log(listaComunas);

  if(validarSiContinuar(listaComunas)) listarSelect('txtComuna', listaComunas, 'id', 'comuna');
}