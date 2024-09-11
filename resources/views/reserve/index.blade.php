<x-app-layout>
  <a href="{{ route('reserve.reportReservations')}}">
  <button type="submit" class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Descargar Tabla</button>
  </a>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre de Sala
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de Reserva
                </th>
                <th scope="col" class="px-6 py-3" style="text-align: center">
                    Hora Inicio
                </th>
                <th scope="col" class="px-6 py-3" style="text-align: center">
                    Hora Fin
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre Cliente
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
                <th scope="col" class="px-6 py-3">
                    Show
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach($myReservations as $reservation)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$reservation->id}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->nombre_sala}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->fecha_reserva}}
                </td>
                <td class="px-6 py-4" style="text-align: center">
                    {{$reservation->hora_inicio}} hrs
                </td>
                <td class="px-6 py-4" style="text-align: center">
                    {{$reservation->hora_fin}} hrs
                </td>
                <td class="px-6 py-4">
                    {{$reservation->nombre_cliente}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('reserve.edit', $reservation->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
                <td class="px-6 py-4">
                    <a href="{{ route('reserve.show', $reservation->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</div>
{{ $myReservations->links() }} 
</x-app-layout>