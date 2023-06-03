@extends('layouts.Userbody')
@section('content')
    <div class="table-responsive col-8 text-center">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <caption>Rooms</caption>
                <tr>
                    <th>Room Number</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Price per night</th>
                    <th>Operation</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                @isset($rooms)

                @foreach($rooms as $room)
                    <tr class="table-primary" >
                        <td scope="row">{{ $room->room_number }}</td>
                        <td>{{ $room->type }}</td>
                        <td>{{ $room->capacity }}</td>
                        <td>{{ $room->price_per_night }}</td>
                        <td>
                            <a href="" class="btn btn-primary col-3"><i class="fa fa-light fa-eye"></i></a>
                            <a href="" class="btn btn-success col-3"><i class="fa fa-regular fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-danger col-3"><i class="fa fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                @endisset
                    
                </tbody>
                <tfoot>
                    
                </tfoot>
        </table>
    </div>

@endsection