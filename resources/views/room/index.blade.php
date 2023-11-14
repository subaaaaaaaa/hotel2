@extends('layouts.hotelapp')

@section('title', 'room.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>部屋種</th>
            <th>部屋番号</th>
        </tr>
        @foreach ($items as $item)
            <tr>
                <td>{{ $item->getData() }}</td>
                <td>{{ $item->room_number }}</td>
            </tr>
        @endforeach
    </table>
@endsection
