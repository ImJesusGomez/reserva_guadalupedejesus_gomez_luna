<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Barryvdh\DomPDF\Facade\Pdf;

class ReserveController extends Controller
{
    public function index(){
      $myReservations = Reservation::paginate(10);
      return view('reserve.index',  compact('myReservations'));
    }

    public function create(){
      return view('reserve.create');
    }

    public function store(Request $request){
      $reserve = new Reservation();

      $reserve->nombre_sala = $request->nombre_sala;
      $reserve->fecha_reserva = $request->fecha_reserva;
      $reserve->hora_inicio = $request->hora_inicio;
      $reserve->hora_fin = $request->hora_fin;
      $reserve->nombre_cliente = $request->nombre_cliente;

      $reserve->save();

      return redirect()->route('reserve.index');
    }

    public function show($reservation){
      $reservationDetail = Reservation::find($reservation);
      return view('reserve.show', compact('reservationDetail'));
    }

    public function edit($reservation){
      $reservationDetail = Reservation::find($reservation);
      return view('reserve.edit', compact('reservationDetail'));
    }

    public function update(Request $request, $reservation){
      $reserve = Reservation::find($reservation);

      $reserve->nombre_sala = $request->nombre_sala;
      $reserve->fecha_reserva = $request->fecha_reserva;
      $reserve->hora_inicio = $request->hora_inicio;
      $reserve->hora_fin = $request->hora_fin;
      $reserve->nombre_cliente = $request->nombre_cliente;

      $reserve->save();

      return redirect()->route('reserve.index');
    }

    public function destroy($reservation){
      $reservation = Reservation::find($reservation);
      $reservation->delete();

      return redirect()->route('reserve.index');
    }

    public function getReportReservation($reservation){
      $reservation = Reservation::find($reservation);

      $pdf = Pdf::loadView('reserve.reportReserve', compact('reservation'));
      return $pdf->stream('reporte-reservation.pdf');

    }

    public function getReportAll(){
      $reservations = Reservation::all();
      $pdf = Pdf::loadView('reserve.reportAllReserves', compact('reservations'));
      return $pdf->stream('reporte-reservaciones.pdf');
    }
}
