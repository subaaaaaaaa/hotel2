@extends('layouts.hotelapp')

@section('title', 'Room_type.index')

@section('menubar')
    @parent
    部屋種
@endsection

@section('content')
    <table>
        <tr>
            <th>部屋id</th>
            <th>部屋名</th>
            <th>キャパシティー</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->room_type_id }}</td>
                <td>{{ $item->room_name }}</td>
                <td>{{ $item->capacity }}</td>
            </tr>
        @endforeach
    </table>
@endsection