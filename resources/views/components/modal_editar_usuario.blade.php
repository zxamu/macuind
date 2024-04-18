<!-- modal.blade.php -->
<div class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center bg-black bg-opacity-50 z-50" x-show="open">
    <div class="modal-content bg-white w-1/2 p-6 rounded-lg shadow-lg">
        
        <!--inicio header modal -->
        <div class="modal-header flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold">Actualizar información de usuario</h2>
            <button @click="open = false" class="text-gray-600 hover:text-gray-800">&times;</button>
        </div>
        <!-- fin header modal -->

        <!-- body modal -->
        <div class="modal-body">
            <!-- Contenido del modal -->
            <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Nombre (s)</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Apellido Paterno</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Apellido materno</label>
            <input type="resumen" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
                <option selected>Compras</option>
                <option value="NU">Contabilidad</option>
                <option value="NO">Logística</option>
                <option value="UR">Producción</option>
                <option value="UR">Ventas</option>
            </select>
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Contraseña</label>
            <input type="password" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div >
            <label for="resumen" class="block mb-2 text-sm font-medium text-black dark:text-white bg-opacity-50">Confirmar contraseña</label>
            <input type="password" id="resumen" class="px-auto shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="" required />
        </div>

        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Departamento</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
                <option selected>Compras</option>
                <option value="NU">Contabilidad</option>
                <option value="NO">Logística</option>
                <option value="UR">Producción</option>
                <option value="UR">Ventas</option>
            </select>
        </div>

        <div>
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rol</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Detalla los problemas" required >
                <option selected>Administrador</option>
                <option value="NU">Usuario</option>
                <option value="NO">Auxiliar</option>
             
            </select>
        </div>

        </div>
<!-- fin body modal -->

<br>
<!-- inicio footer modal -->
<div class="modal-footer flex justify-end">
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Aceptar</button>
    <button @click="open = false" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md ml-4">Cancelar</button>
</div>


        <!-- fin footer modal -->
    </div>
</div>
<!-- fin modal -->