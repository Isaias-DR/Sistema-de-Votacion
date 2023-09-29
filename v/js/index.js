import { obtenerValorId } from "./util/obtenerValor.js";
import { enviarVotoDelFormulario } from "./voto/registrarVoto.js";
import { obtenerRegiones } from "./region/listarRegiones.js";
import { obtenerComunas } from "./comuna/listarComunas.js";
import { listarCandidatos } from "./candidato/listarCandidatos.js";

(function(){obtenerRegiones(),listarCandidatos()})()

obtenerValorId("btnVotar").addEventListener("click", enviarVotoDelFormulario);

obtenerValorId("optRegion").addEventListener("change", obtenerComunas);