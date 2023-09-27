import { obtenerValorId } from "./util/obtenerValor.js";
import { enviar_voto_del_formulario } from "./voto/registrarVoto.js";
import { obtenerRegiones } from "./region/listarRegiones.js";
import { obtenerComunas } from "./comuna/listarComunas.js";
import { listarCandidatos } from "./candidato/listarCandidatos.js";

const inicio = (()=>{obtenerRegiones(),listarCandidatos()})()

obtenerValorId("btnVotar").addEventListener("click", enviar_voto_del_formulario);

obtenerValorId("txtRegion").addEventListener("change", obtenerComunas);