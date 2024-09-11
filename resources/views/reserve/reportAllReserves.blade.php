<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nombre de la Sala
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha Reserva
                </th>
                <th scope="col" class="px-6 py-3">
                    Hora Inicio
                </th>
                <th scope="col" class="px-6 py-3" style="text-align: center">
                    Hora Fin
                </th>
                <th scope="col" class="px-6 py-3" style="text-align: center">
                    Nombre Cliente
                </th>
            </tr>
        </thead>
        <tbody>
          @foreach($reservations as $reservation)
            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$reservation->nombre_sala}}
                </th>
                <td class="px-6 py-4">
                    {{$reservation->fecha_reserva}}
                </td>
                <td class="px-6 py-4">
                    {{$reservation->hora_inicio}} hrs
                </td>
                <td class="px-6 py-4">
                    {{$reservation->hora_fin}} hrs
                </td>
                <td class="px-6 py-4">
                    {{$reservation->nombre_cliente}}
                </td>
            </tr>
          @endforeach
        </tbody>
    </table>
</body>
</html>