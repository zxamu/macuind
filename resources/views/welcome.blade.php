<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head> 
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar')
<br>
    <h4 class="text-center text-2xl font-bold dark:text-white">Hola, ¿Cuál es el problema?</h4>
    <form id="formulario" class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10">
        <div class="mb-5"> 
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Resumen</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required />
        </div>
        <!-- Empiezan los agregados -->
        <label for="area" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">¿En qué área de trabajo se localiza?</label>
        <select id="area" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
            <option selected>Área de trabajo</option>
            <option value="CO">Compras</option>
            <option value="CD">Contabilidad</option>
            <option value="LO">Logística</option>
            <option value="PR">Producción</option>
            <option value="VE">Ventas</option>
        </select>
        <!-- Empiezan los agregados -->
        <div class="mb-5 relative">
            <label for="detalles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalles</label>
            <div class="flex items-center justify-between">
                <input type="text" id="detalles" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
                <label for="fileInput" class="cursor-pointer absolute right-0 top-0 mt-3 mr-3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-3 rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M11.4 3a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1-1.4 1.4L12 5.4l-3.6 3.6a1 1 0 1 1-1.4-1.4l4-4zM4 2a1 1 0 0 1 1 1v14a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1z" clip-rule="evenodd"></path>
                        <path d="M13 5a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2h2zM16 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                    </svg>
                </label>
                <input id="fileInput" type="file" class="hidden">
            </div>
        </div>

        <div class="mb-5">
            <label for="detalles" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Detalles</label>
            <input type="detalles" id="detalles" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <!-- Empiezan los agregados -->
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo de problema</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
            <option selected>Selecciona problema</option>
            <option value="FO">Falla de Office</option>
            <option value="FR">Fallas de red</option>
            <option value="ES">Errores de software</option>
            <option value="EH">Errores de hardware</option>
            <option value="MP">Mantenimiento preventivo</option>
        </select>
        <!-- Empiezan los agregados -->
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nivel de importancia</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
            <option selected>Nivel</option>
            <option value="NU">No urgente</option>
            <option value="NO">Normal</option>
            <option value="UR">Urgente</option>
        </select>

        <div class="flex items-start mb-5">
            <div class="flex items-center h-5">
                <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
            </div>
            <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Estoy de acuerdo con los <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">términos y condiciones</a></label>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrarse</button>
    </form>

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
