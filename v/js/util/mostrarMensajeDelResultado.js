export const mostrarMensajeDelResultado = (
  {
    mensaje,
    dato
  }
) => {

  if (mensaje === 'no valido') return console.warn(dato);
  if (mensaje === 'error') return console.error('Revise en la solicitud de la red la consulta de la solicitud al archivo PHP.');
  if (dato.mensajeMS === 'validación') return alert(dato.datos.mensaje);
  if (mensaje === 'exito') return alert(dato.datos.mensaje);

  return console.warn('Hay una condición en el método "mostrar_mensaje_del_resultado" del archivo "4_mostrar_mensaje_del_resultado.js" que no es considerada.')
}