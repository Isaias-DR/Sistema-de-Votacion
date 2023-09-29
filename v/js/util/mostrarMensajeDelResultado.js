export const validarSiContinuar = ({ mensaje, dato }) => {

  if (mensaje === 'error fatal 1' || mensaje === 'error fatal 2')
    return false, console.error(JSON.parse(dato.replace(/<\/?[^>]+(>|$)/g, "")));
  if (mensaje === 'error conexión')
    return false, console.error(dato);
  if (mensaje === 'no valido')
    return false, console.warn(dato);
  if (dato.mensajeMS === 'validación')
    return false, alert(dato.datos.mensaje);
  return true;
}

export const mostrarMensajeDelResultado = ({ mensaje, dato }) => {

  if (mensaje === 'exito') return alert(dato.datos.mensaje);

  return console.warn('Hay una condición en el método "mostrarMensajeDelResultado" del archivo "4_mostrar_mensaje_del_resultado.js" que no es considerada.')
}