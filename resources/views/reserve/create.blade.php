<x-app-layout>
  <form class="max-w-sm mx-auto" method="POST" action="{{ route('reserve.store')}}">
    @csrf
    <div class="mb-5">
      <label for="nombre_sala" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Sala</label>
      <input type="text" id="nombre_sala" name="nombre_sala" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
      <label for="fecha_reserva" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fecha Reserva</label>
      <input type="text" id="fecha_reserva" name="fecha_reserva" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
      <label for="hora_inicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Inicio</label>
      <input type="text" id="hora_inicio" name="hora_inicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
      <label for="hora_fin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hora Fin</label>
      <input type="text" id="hora_fin" name="hora_fin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <div class="mb-5">
      <label for="nombre_cliente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre Cliente</label>
      <input type="text" id="nombre_cliente" name="nombre_cliente" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
  </form>

</x-app-layout>
