export const mostrarMensajeDelResultado = (
  {
    mensaje,
    dato
  }
) => {

  if (mensaje === 'no valido') return console.warn(dato)
  if (mensaje === 'error') return console.warn(dato)
  if (mensaje === 'exito') return alert('Se ha registrado su voto.')

  return console.warn('Hay una condición en el método "mostrar_mensaje_del_resultado" del archivo "4_mostrar_mensaje_del_resultado.js" que no es considerada.')
}