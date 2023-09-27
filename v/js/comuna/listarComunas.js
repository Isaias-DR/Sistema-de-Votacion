import { obtenerValor } from "../util/obtenerValor.js";
import { enviarYObtenerRespuesta } from "../voto/3.2ObtenerRespuesta.js";
import { inicializarElementoSelect, inicializarSelect, listarSelect } from "../util/listarSelect.js";

export const obtenerComunas = async () => {

    const idRegion = parseInt(obtenerValor('txtRegion'));

    if(idRegion === 0) return;

    const listaComunas = await enviarYObtenerRespuesta('POST', { idRegion }, 'comuna/listarComunas.php');

    // console.log(listaComunas);

    inicializarElementoSelect('txtComuna');

    inicializarSelect('txtComuna', 'una región');

    listarSelect('txtComuna', listaComunas, 'comuna');
}