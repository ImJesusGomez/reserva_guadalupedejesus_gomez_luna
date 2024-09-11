<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reporte</title>
</head>
<body>
  <h1>Nombre Sala: {{ $reservation->nombre_sala}}</h1>
  <p>Nombre Cliente: {{ $reservation->nombre_cliente}}</p>
  <p>Fecha Reserva: {{ $reservation->fecha_reserva}}</p>
  <p>Hora Inicio: {{ $reservation->hora_inicio}} hrs</p>
  <p>Hora Fin: {{ $reservation->hora_fin}} hrs</p>
  <p>Horas Reservadas: {{ ($reservation->hora_fin - $reservation->hora_inicio) }} hrs</p>
</body>
</html>