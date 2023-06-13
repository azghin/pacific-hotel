@extends('layouts.Userbody')
@section('datatable')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

@endsection
@section('content')
<h4>Reservations</h4>
    <div class="table-responsive">
        <table id="myTable" class="table  table-hover display">
            <thead class="table-light">
                <tr>
                    <th>id Booking</th>
                    <th>Room</th>
                    <th>Client</th>
                    <th>Start date</th>
                    <th>end date</th>
                    <th>Total price</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($Bookings as $Booking)
                        <tr>
                            <td>{{ $Booking->Booking_id}}</td>
                            <td>{{ $Booking->room_id}}</td>
                            <td>{{ $Booking->client_id}}</td>
                            <td>{{ $Booking->start_date}}</td>
                            <td>{{ $Booking->end_date}}</td>
                            <td>{{ $Booking->total_price}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    
@endsection