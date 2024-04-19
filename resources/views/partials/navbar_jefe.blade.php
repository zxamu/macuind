<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<nav class="h-16 bg-gradient-to-r from-indigo-900 to-cyan-300">
  <div class="max-w-screen-xl flex items-center justify-between mx-auto px-4 pt-3">
    <div class="flex items-center">
      <a href="/nuevo" class="mr-2">
        <img src="{{ asset('images/Group2.png') }}" class="h-10" />
      </a>
      <a href="/nuevo" class="text-xl font-semibold whitespace-nowrap text-white">Macuin Dashboard</a>
    </div>
    <div class="hidden md:flex md:items-center md:space-x-8">
      <a href="/admin_departamentos" class="block py-2 text-white rounded hover:bg-transparent hover:text-blue-700">Departamentos</a>
      <a href="" class="block py-2 text-white rounded hover:bg-transparent hover:text-blue-700">Usuarios</a>
      <a href="/tickets_jefe" class="block py-2 text-white rounded hover:bg-transparent hover:text-blue-700">Tickets</a>
      <!-- <a href="/reportes_jefe" class="block py-2 text-white rounded hover:bg-transparent hover:text-blue-700">Reportes</a> -->
      <button class="relative items-center justify-center w-10 h-10 overflow-hidden bg-white rounded-full" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start">
     <!-- imagen avatar -->
      <img class="w-10 h-10 rounded-full" src="images/perfil_jefe.png" alt="Rounded avatar">
      </button>
    </div>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</nav>


<div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
    <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
        <div>José Hern</div>
        <div class="font-medium truncate">jose.hernandez@macuin.com</div>
    </div>
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
    <li>
            <a href="/aperfil" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Adminstrar perfil</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
        </li>
    </ul>
    <div class="py-1">
        <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
    </div>
</div>