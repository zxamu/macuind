<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Administración de departamentos</title>
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar_jefe')
<br>
<p class="mt-16 ml-30 text-2xl font-bold leading-9 tracking-tight text-black text-center">Departamentos</p>
<br>


 <!-- BOTÓN DISPARADOR PARA MODAL EDITAR -->
                <!-- Incluir Alpine.js -->
                <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Inicialización de Alpine.js y botón para abrir el modal -->
<div x-data="{ open: false }" class="flex justify-center">
<button @click="open = true" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
  Nuevo departamento
</button>

<!-- Incluir el componente modal con el contexto de datos correcto -->
<x-modal_editar_dep x-bind:open="open" />
</div>
<!-- fin botón disparador-->
<br>



<!-- INICIO TABLA -->
<div class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10 shadow-lg">
    <table class="w-full">
        <thead>
            <tr class="text-xl font-bold">
                <th class="px-4 py-1">Departamento</th>
                <th class="px-8 py-1">Encargado (a)</th>
                <th class="px-4 py-1">Descripción </th>
                <th class="px-10 py-1">Núm. extensión</th>
                <th class="px-10 py-1">Ubicación</th>
                <th class="px-25 py-1 ml-5">Acción</th>
                
                
            </tr>
        </thead>
        <!-- inicio del contenido de la tabla. Un registro -->
        <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
                <td class="px-8 py-2">Contabilidad</td>
                <td class="px-12 py-2">Ximena Carrasco Nogueras</td>
                <td class="px-5 py-2">Área encargada de llevar los registros y control financiero</td>
                <td class="px-20 py-2">2502</td>
                <td class="px-12 py-2">3er piso</td>
                
               
                  
                <td class="px-18 py-2">

    <!--INICIA SECCIÓN DE BOTONES (ACCIÓN)  -->
    <div class="flex space-x-2"> <!-- EL DIV NOS LOS COLOCA EN EL MISMO RENGLÓN -->
    
    <!-- BOTÓN DISPARADOR PARA MODAL EDITAR -->
                <!-- Incluir Alpine.js -->
                 <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

            <!-- Inicialización de Alpine.js y botón para abrir el modal -->
            <div x-data="{ open: false }">
            <button @click="open = true" class="text-sky-600 underline underline-offset-1">
                <img src="{{ asset('images/lapiz.png') }}" alt="Icono" class="h-5 w-5 mr-2">
            </button>

            <!-- Incluir el componente modal con el contexto de datos correcto -->
            <x-modal_editar_dep x-bind:open="open" />
            </div>
        <!-- fin botón disparador-->

        <!-- BOTÓN NORMAL -->
        <button id="eliminarRegistro" class="flex items-center text-sky-600 underline underline-offset-1">
    <img src="{{ asset('images/trash.png') }}" alt="Icono" class="h-5 w-5 mr-2">
</button>

<script>
    // Escuchar el evento click del botón
    document.getElementById('eliminarRegistro').addEventListener('click', function() {
        // Mostrar el alert de SweetAlert
        Swal.fire({
            title: "",
            text: "¿Estás seguro de que deseas eliminar el registro?",
            icon: "info"
        });
    });
</script>
    </div>
</td>
<!-- FIN DE LA SECCION DE BOTONES -->


                <td class="px-4 py-2">
            
               
            </tr>
           
        </tbody>
        <!-- fin de la sección de un registro en la tabla -->
    </table>
</div>
<!-- FIN TABLA -->


</body>
</html>


