<x-app-layout> 
  <div class="flex justify-center items-center">
    <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Nombre de la Sala: {{ $reservationDetail->nombre_sala }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fecha: {{ $reservationDetail->fecha_reserva }}</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hora Inicio: {{ $reservationDetail->hora_inicio }} hrs.</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Hora Fin: {{ $reservationDetail->hora_fin }} hrs</p>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nombre Cliente: {{ $reservationDetail->nombre_cliente }}</p>
            <a href="{{ route('reserve.index')}}">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Regresar</button>
            </a>
            <form action="{{ route('reserve.destroy', $reservationDetail->id)}}" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Eliminar</button>
            </form>
            <a href="{{ route('reserve.reportReserve',  $reservationDetail->id)}}">
            <button type="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Descargar</button>
            </a>
        </div>
    </div>
  </div>

</x-app-layout>
