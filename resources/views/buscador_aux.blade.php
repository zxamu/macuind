<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
@include('partials.navbar_auxiliar')

    <!-- Contenedor principal -->
    <div class="container mx-auto px-4">
        <!-- Barra de búsqueda -->
        <div class="mt-4 flex justify-end">
            <input type="text" id="searchInput" placeholder="Buscar..." class="w-48 sm:w-64 border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3 bg-gray-100/50">
        </div>
        

        <!-- Contenedor de resultados de búsqueda -->
        <div id="searchResults" class="mt-4"></div>

        <!-- Contenido de tu aplicación -->
        <div class="mt-16 text-2xl font-bold leading-9 tracking-tight text-black ">Hola Alejandro, este es tu historial de reportes</div>
        <div class="max-w bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10 shadow-lg mt-10">
            <div class="space-x-20 flex text-xl font-bold pb-5 text-center">
                <div class="flex-1">Tipo de problema</div>
                <div class="flex-1">ID</div>
                <div class="flex-1">Detalles</div>
                <div class="flex-1">Usuario</div>
                <div class="flex-1">Departamento</div>
                <div class="flex-1">Fecha</div>
                <div class="flex-1">Estado</div>
                <div class="flex-1">Comentarios</div>
                <div class="flex-1">Acciones</div> <!-- Nueva columna para acciones -->
            </div>
            <!-- Ejemplo de elementos filtrables -->
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5 searchable-item text-center">
                <div class="flex-1">Hardware</div>
                <div class="flex-1">
                    <button data-modal-target="crud-modal-1" data-modal-toggle="crud-modal" class="pl-12 text-sky-600 underline underline-offset-1" type="button">
                        T-1223
                    </button>
                </div>
                <div class="flex-1">Atasco de hoja en impresora</div>
                <div class="flex-1">Alejandra Hernandez</div>
                <div class="flex-1">Gerencia</div>
                <div class="flex-1">2024-04-18</div>
                <div class="flex-1">
                    <div class="h-5 w-5 bg-yellow-300 rounded-full mx-auto"></div>
                </div>
                <div class="flex-1">
                    <textarea class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3 bg-myblueg/80 w-full h-10 resize-none" placeholder="Agregar comentario"></textarea>
                </div>
                <div class="flex-1">
                    <button onclick="showEditModal('T-1223')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Editar</button>
                    <button onclick="showDeleteModal('T-1223')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Eliminar</button>
                </div>
            </div>
            <!-- Elementos duplicados para la prueba de búsqueda -->
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5 searchable-item text-center">
                <div class="flex-1">Software</div>
                <div class="flex-1">
                    <button data-modal-target="crud-modal-2" data-modal-toggle="crud-modal" class="pl-12 text-sky-600 underline underline-offset-1" type="button">
                        IT-1234
                    </button>
                </div>
                <div class="flex-1">Problema de conexión a internet</div>
                <div class="flex-1">Juan Pérez</div>
                <div class="flex-1">Finanzas</div>
                <div class="flex-1">2024-04-17</div>
                <div class="flex-1">
                    <div class="h-5 w-5 bg-red-500 rounded-full mx-auto"></div>
                </div>
                <div class="flex-1">
                    <textarea class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-3 bg-myblueg/80 w-full h-10 resize-none" placeholder="Agregar comentario"></textarea>
                </div>
                <div class="flex-1">
                    <button onclick="showEditModal('IT-1234')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Editar</button>
                    <button onclick="showDeleteModal('IT-1234')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Eliminar</button>
                </div>
            </div>
            <div class="h-10 bg-white/75 rounded-lg p-10 shadow-lg space-x-20 items-center flex mb-5 searchable-item text-center">
                <div class="flex-1">Hardware</div>
                <div class="flex-1">
                    <button data-modal-target="crud-modal-3" data-modal-toggle="crud-modal" class="pl-12 text-sky-600 underline underline-offset-1" type="button">
                        T-1225
                    </button>
                </div>
                <div class="flex-1">Pérdida de datos en disco duro</div>
                <div class="flex-1">María Rodríguez</div>
                <div class="flex-1">Contabilidad</div>
                <div class="flex-1">2024-04-16</div>
                <div class="flex-1">
                    <div class="h-5 w-5 bg-green-400 rounded-full mx-auto"></div>
                </div>
                <div class="flex-1">
                    <textarea class="border border-gray-300 rounded-lg p-2 focus:outline-none focus:ring-2 focus:ring-blue-500 mb-5 bg-myblueg/80 w-full h-10 resize-none" placeholder="Agregar comentario"></textarea>
                </div>
                <div class="flex-1">
                    <button onclick="showEditModal('T-1225')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Editar</button>
                    <button onclick="showDeleteModal('T-1225')" class="pl-12 text-sky-600 underline underline-offset-1" type="button">Eliminar</button>
                </div>
            </div>
            <!-- Más elementos duplicados para la prueba de búsqueda -->
        </div>
    </div>
<!-- Main modal for Edit -->
<div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 justify-center items-center md:w-[640px] md:h-[480px] w-[90%] h-[60%] max-h-[calc(100%-1rem)] max-w-[calc(100%-1rem)]">
    <div class="bg-myblueg/95 shadow-md rounded-lg p-6 max-w-sm w-full">
        <div class="text-xl font-semibold mb-4 text-white">Editar Reporte</div>
        <div class="mb-4">
            <label for="edit-report-id" class="block text-sm font-medium text-gray-100">ID del Reporte</label>
            <input type="text" id="edit-report-id" name="edit-report-id" class="mt-1 p-2 block w-full border-gray-300 rounded-md">
        </div>
        <div class="mb-4">
            <label for="edit-report-details" class="block text-sm font-medium text-gray-100">Detalles</label>
            <textarea id="edit-report-details" name="edit-report-details" class="mt-1 p-2 block w-full border-gray-300 rounded-md resize-none"></textarea>
        </div>
        <div class="flex justify-end">
            <button onclick="hideModal('edit-modal')" type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500">Cancelar</button>
            <button onclick="showMessageModal('Reporte Editado')" type="button" class="ml-3 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-md hover:bg-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500">Guardar</button>
        </div>
    </div>
</div>

<!-- Main modal for Delete -->
<div id="delete-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 justify-center items-center md:w-[480px] md:h-[240px] w-[90%] h-[50%] max-h-[calc(100%-1rem)] max-w-[calc(100%-1rem)]">
    <div class="bg-myblueg/95 shadow-md rounded-lg p-6 max-w-sm w-full">
        <div class="text-xl font-semibold mb-4 text-white">Eliminar Reporte</div>
        <p class="mb-4 text-gray-900">¿Estás seguro de que deseas eliminar este reporte?</p>
        <div class="flex justify-end">
            <button onclick="hideModal('delete-modal')" type="button" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-blue-500">Cancelar</button>
            <button onclick="showMessageModal('Reporte Eliminado')" type="button" class="ml-3 inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-red-500 border border-transparent rounded-md hover:bg-red-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-red-500">Eliminar</button>
        </div>
    </div>
</div>

    <!-- Script de búsqueda -->
    <script>
        // Lógica de búsqueda
        const searchInput = document.getElementById('searchInput');
        const searchResults = document.getElementById('searchResults');
        const itemsToSearch = document.querySelectorAll('.searchable-item');

        searchInput.addEventListener('input', function() {
            const searchText = this.value.toLowerCase();
            searchResults.innerHTML = ""; // Limpiar resultados anteriores

            itemsToSearch.forEach(item => {
                const textContent = item.textContent.toLowerCase();
                if (textContent.includes(searchText)) {
                    // Clonar y agregar el elemento que coincide con la búsqueda al contenedor de resultados
                    const clone = item.cloneNode(true);
                    searchResults.appendChild(clone);
                }
            });
        });

        // Limpiar resultados cuando se borra el texto del campo de búsqueda
        searchInput.addEventListener('keyup', function() {
            if (this.value === '') {
                searchResults.innerHTML = "";
            }
        });

        // Función para mostrar modal de mensaje
        function showMessageModal(action) {
            alert(action + " realizado correctamente.");
        }

        // Función para mostrar modal de edición
        function showEditModal(reportId) {
            // Lógica para obtener los detalles del reporte y llenar el modal de edición
            const editModal = document.getElementById('edit-modal');
            const editReportIdInput = document.getElementById('edit-report-id');
            const editReportDetailsTextarea = document.getElementById('edit-report-details');

            // Llenar los campos del modal con los detalles del reporte
            editReportIdInput.value = reportId; // Por ahora solo coloco el ID, puedes agregar más lógica aquí para llenar los detalles
            editReportDetailsTextarea.value = ""; // Limpio el campo de detalles

            // Mostrar el modal de edición
            editModal.classList.remove('hidden');
            editModal.setAttribute('aria-hidden', 'false');
            editModal.focus();
        }

        // Función para mostrar modal de eliminación
        function showDeleteModal(reportId) {
            // Lógica para obtener los detalles del reporte y mostrar el modal de eliminación
            const deleteModal = document.getElementById('delete-modal');
            deleteModal.classList.remove('hidden');
            deleteModal.setAttribute('aria-hidden', 'false');
            deleteModal.focus();
        }

        // Función para ocultar un modal
        function hideModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
        }
    </script>
</body>
</html>
