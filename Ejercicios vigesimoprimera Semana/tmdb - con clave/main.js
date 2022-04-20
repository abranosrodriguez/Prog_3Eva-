function main() {
    let pagina = 1;
    const Anterior = document.getElementById('BotonAnterior');
    const Siguiente = document.getElementById('BotonSiguiente');

    Siguiente.addEventListener('click', () => {
        if (pagina < 1000) {
            pagina += 1
            cargarPelis()
        }
    });

    Anterior.addEventListener('click', () => {
        if (pagina > 1) {
            pagina -= 1;
            cargarPelis();
        }
    });

    //Funcion para poder cargar las peliculas
    const cargarPelis = async () => {

        try {
            //Peticion para el server
            const respuestaServer = await fetch(`https://api.themoviedb.org/3/movie/popular?api_key=14db5f47dbb793f47bd8af21fab7617a&page=${pagina}`)
            console.log(respuestaServer)

            //Si se conecta correctamente
            if (respuestaServer.status === 200) {
                const datos = await respuestaServer.json()

                let peliculas = '';
                datos.results.forEach(pelicula => {
                    peliculas += `
                    <div class="pelicula">
                        <img class="poster" src="https://image.tmdb.org/t/p/w500/${pelicula.poster_path}">
                        <h3 class="titulo">${pelicula.title}</h3>
                    </div>
                    `;

                });

                document.getElementById("contenedor").innerHTML = peliculas

            } else if (respuestaServer.status === 401) {
                console.log("Error en url")
            } else if (respuestaServer.status === 404) {
                console.log("No existe la pelicula")
            } else {
                console.log("Error")
            }

        } catch (error) {
            console.log("Error: " + error)
        }
    }
    cargarPelis()

}
main()