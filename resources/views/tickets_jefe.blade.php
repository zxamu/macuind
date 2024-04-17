<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Reportes</title>
</head>
<body class="bg-cover bg-no-repeat bg-center h-screen md:bg-top" style="background-image: url('images/bubblebg.png');">
    @include('partials.navbar_jefe')
<br>

<!-- Barra de búsqueda -->
<div class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-5 shadow-lg">
    <input type="text" id="searchInput" placeholder="Buscar por número de ticket, departamento o fecha" class="w-full px-3 py-2 mb-3 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

</div>

<!-- INICIO TABLA -->
<div class="max-w mx-40 my-10 bg-gradient-to-t from-myblueg/80 to-myblueg2/80 rounded-lg p-10 shadow-lg">
    <table class="w-full">
        <thead>
            <tr class="text-xl font-bold">
                <th></th>
                <th class="px-2 py-1">N° Ticket</th>
                <th class="px-8 py-1">Autor (a)</th>
                <th class="px-4 py-1">Departamento </th>
                <th class="px-4 py-1">Fecha</th>
                <th class="px-4 py-1">Clasificación</th>
                <th class="px-4 py-1 ">Detalles</th>
                <th class="px-4 py-1 ">Estatus</th>
                <th class="px-4 py-1">Reporte</th>
                
                
            </tr>
        </thead>

        <!-- inicio del contenido de la tabla. Un registro -->
        <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
            <td><input type="checkbox" id="ticket1" class="ticket" name="elementos" value="elemento1"></td>
                <td class="px-8 py-2">IT-1223</td>
                <td class="px-12 py-2">Ximena Carrasco Nogueras</td>
                <td class="px-5 py-2">Contabilidad</td>
                <td class="px-20 py-2">04-14-24</td>
                <td class="px-12 py-2">Urgente</td>
                <td class="px-12 py-2">Lorem ipsum...</td>
                <td class="px-12 py-2">Cerrado</td>
                <td class="px-12 py-2">
                    <button id="eliminarRegistro1" class="eliminarRegistro flex items-center text-sky-600 underline underline-offset-1" data-checkbox-id="ticket1">
                    <img src="{{ asset('images/pdf.png') }}" alt="Icono" class="h-5 w-5 mr-2">
                    </button>
                </td>
            </tr>
            </tbody>
        <!-- fin de la sección de un registro en la tabla -->


    <!-- inicio del contenido de la tabla. Un registro -->
    <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
            <td><input type="checkbox" id="ticket2" class="ticket" name="elementos" value="elemento1"></td>
                <td class="px-8 py-2">IT-1224</td>
                <td class="px-12 py-2">Alejandro Nolasco</td>
                <td class="px-5 py-2">Logística</td>
                <td class="px-20 py-2">04-06-24</td>
                <td class="px-12 py-2">Normal</td>
                <td class="px-12 py-2">Lorem ipsum...</td>
                <td class="px-12 py-2">En proceso</td>
                <td class="px-12 py-2">
                    <button id="eliminarRegistro2" class="eliminarRegistro flex items-center text-sky-600 underline underline-offset-1" data-checkbox-id="ticket2">
                    <img src="{{ asset('images/pdf.png') }}" alt="Icono" class="h-5 w-5 mr-2">
                    </button>
                </td>
            </tr>
            </tbody>
        <!-- fin de la sección de un registro en la tabla -->

          <!-- inicio del contenido de la tabla. Un registro -->
    <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
            <td><input type="checkbox" id="ticket3" class="ticket" name="elementos" value="elemento1"></td>
                <td class="px-8 py-2">IT-1225</td>
                <td class="px-12 py-2">Nora González</td>
                <td class="px-5 py-2">Compras</td>
                <td class="px-20 py-2">04-17-24</td>
                <td class="px-12 py-2">No urgente</td>
                <td class="px-12 py-2">Lorem ipsum...</td>
                <td class="px-12 py-2">Cancelado</td>
                <td class="px-12 py-2">
                    <button id="eliminarRegistro3" class="eliminarRegistro flex items-center text-sky-600 underline underline-offset-1" data-checkbox-id="ticket3">
                    <img src="{{ asset('images/pdf.png') }}" alt="Icono" class="h-5 w-5 mr-2">
                    </button>
                </td>
            </tr>
            </tbody>
        <!-- fin de la sección de un registro en la tabla -->

          <!-- inicio del contenido de la tabla. Un registro -->
    <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
            <td><input type="checkbox" id="ticket4" class="ticket" name="elementos" value="elemento1"></td>
                <td class="px-8 py-2">IT-1226</td>
                <td class="px-12 py-2">José Ángel Arriaga</td>
                <td class="px-5 py-2">Produccióm</td>
                <td class="px-20 py-2">04-21-24</td>
                <td class="px-12 py-2">Urgente</td>
                <td class="px-12 py-2">Lorem ipsum...</td>
                <td class="px-12 py-2">Completado</td>
                <td class="px-12 py-2">
                    <button id="eliminarRegistro4" class="eliminarRegistro flex items-center text-sky-600 underline underline-offset-1" data-checkbox-id="ticket4">
                    <img src="{{ asset('images/pdf.png') }}" alt="Icono" class="h-5 w-5 mr-2">
                    </button>
                </td>
            </tr>
            </tbody>
        <!-- fin de la sección de un registro en la tabla -->

          <!-- inicio del contenido de la tabla. Un registro -->
    <tbody>
            <tr class="bg-white/75 rounded-lg shadow-lg mb-5">
            <td><input type="checkbox" id="ticket5" class="ticket" name="elementos" value="elemento1"></td>
                <td class="px-8 py-2">IT-1227</td>
                <td class="px-12 py-2">Victoria Salas</td>
                <td class="px-5 py-2">Ventas</td>
                <td class="px-20 py-2">04-02-24</td>
                <td class="px-12 py-2">Normal</td>
                <td class="px-12 py-2">Lorem ipsum...</td>
                <td class="px-12 py-2">Nunca solucionado</td>
                <td class="px-12 py-2">
                    <button id="eliminarRegistro5" class="eliminarRegistro flex items-center text-sky-600 underline underline-offset-1" data-checkbox-id="ticket5">
                    <img src="{{ asset('images/pdf.png') }}" alt="Icono" class="h-5 w-5 mr-2">
                    </button>
                </td>
            </tr>
            </tbody>
        <!-- fin de la sección de un registro en la tabla -->

    </table>
</div>
<!-- FIN TABLA -->

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Seleccionar todos los checkboxes con la clase 'ticket'
  const checkboxes = document.querySelectorAll('.ticket');

  // Contador de checkboxes seleccionados
  let checkedCount = 0;

  // Almacenar IDs de checkboxes seleccionados
  let selectedCheckboxIDs = [];

  // Agregar un event listener para cada checkbox
  checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
      if (this.checked) {
        checkedCount++;
        selectedCheckboxIDs.push(this.id);
      } else {
        checkedCount--;
        selectedCheckboxIDs = selectedCheckboxIDs.filter(id => id !== this.id);
      }

      // Si hay más de un checkbox seleccionado, mostrar SweetAlert
      if (checkedCount > 1) {
        mostrarSweetAlert();
      }
    });
  });

  // Función para mostrar SweetAlert
  function mostrarSweetAlert() {
    // Agregar event listener a todos los botones con clase 'eliminarRegistro'
    const botonesEliminar = document.querySelectorAll('.eliminarRegistro');
    botonesEliminar.forEach(function(boton) {
      boton.addEventListener('click', function() {
        // Obtener el ID del checkbox asociado al botón
        const checkboxID = this.getAttribute('data-checkbox-id');
        // Verificar si el ID del checkbox está en la lista de IDs de checkboxes seleccionados
        if (selectedCheckboxIDs.includes(checkboxID)) {
          Swal.fire({
            title: '¿Deseas imprimir un PDF con la información de los tickets seleccionados?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Sí',
            cancelButtonText: 'No'
          }).then((result) => {
            if (result.isConfirmed) {
              // Aquí puedes escribir el código para generar el PDF
              Swal.fire('PDF generado', '', 'success');
            }
          });
        }
      });
    });
  }
});
</script>



<!-- SCRIPT PARA BUSCADOR -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const ticketTable = document.getElementById('ticketTable');
    const rows = ticketTable.getElementsByTagName('tr');

    searchInput.addEventListener('input', function() {
        const searchText = this.value.toLowerCase();

        // Iterar sobre las filas de la tabla
        for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let found = false;

            // Iterar sobre las celdas de la fila actual
            for (let j = 1; j < cells.length; j++) {
                const cellText = cells[j].textContent.toLowerCase();

                // Si el texto de la celda coincide con la búsqueda, mostrar la fila
                if (cellText.includes(searchText)) {
                    found = true;
                    break;
                }
            }

            // Mostrar u ocultar la fila según si se encontró la búsqueda en alguna celda
            row.style.display = found ? '' : 'none';
        }
    });
});
</script>


</body>
</html>
