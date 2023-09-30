import { obtenerValorId } from "./util/obtenerValor.js";
import { enviarVotoDelFormulario } from "./voto/registrarVoto.js";
import { listarRegiones } from "./region/listarRegiones.js";
import { obtenerComunas } from "./comuna/listarComunas.js";
import { listarCandidatos } from "./candidato/listarCandidatos.js";

(function () { listarRegiones(), listarCandidatos() })()

obtenerValorId("btnVotar").addEventListener("click", enviarVotoDelFormulario);

obtenerValorId("optRegion").addEventListener("change", obtenerComunas);