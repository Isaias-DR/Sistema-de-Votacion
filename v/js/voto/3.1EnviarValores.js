export async function enviarValoresFetch(nombreMetodo, datos, nombreArchivoMicroServicio) {

  try {

    let header = {
      method: nombreMetodo,
      headers: {
        'Content-Type': 'application/json'
      }
    }

    if (Object.keys(datos).length > 0) {

      header.body = JSON.stringify(datos)
    }

    //metodo === 'GET' no se requiere agregar propiedades a "header"

    const response = await fetch('http://localhost/xampp/Sistema-de-Votacion/ms/' + nombreArchivoMicroServicio, header);

    if (!response.ok) {

      throw new Error('La solicitud no fue exitosa');
    }

    const resultado = await response.json();

    return resultado;

  } catch (error) {

    throw error; // Re-lanza el error para que pueda ser manejado en el archivo principal
  }
}
