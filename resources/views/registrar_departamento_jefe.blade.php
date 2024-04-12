<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Registrar nuevo departamento</title>
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar_jefe')
<br>

   <!-- Inicio del formulario -->
    <form id="formulario" class="max-w mx-80 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10">
    <div class="space-y-5">

        
    <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Nombre del departamento</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Encargado del departamento</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Descripción del departamento</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Número de extensión</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ubicación</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
                <option selected>1er piso</option>
                <option value="NU">2do piso</option>
                <option value="NO">3er piso</option>
                <option value="UR">4to piso</option>
            </select>
        </div>
        
<br>

        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aceptar</button>
        <button type="submit" class="text-white bg-gray-500 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-800 ml-2">Cancelar</button>    
    </div>
    
    </div>
    </form>
<!-- Fin del formulario -->

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('formulario').addEventListener('submit', function(event) {
            event.preventDefault(); // Evita que el formulario se envíe normalmente

            // Aquí puedes agregar tu lógica de envío del formulario, por ejemplo, enviar los datos al servidor

            // Muestra el SweetAlert
            Swal.fire({
                title: "",
                text: "Registro guardado exotosamente",
                icon: "success"
            });
        });
    </script>

</body>
</html>


