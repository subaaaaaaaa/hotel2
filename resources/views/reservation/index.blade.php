@extends('layouts.hotelapp')

@section('title', 'reservation.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>予約ID</th>
            <th>お客様ID</th>
            <th>代表者名</th>
            <th>大人</th>
            <th>子ども</th>
            <th>チェックイン日</th>
            <th>チェックアウト日</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{$item->reservation_id}}</td>
            <td>{{$item->guest->id}}</td>
            <td>{{$item->guest->name}}</td>
            <td>{{$item->number_of_adults}}人</td>
            <td>{{$item->number_of_children}}人</td>
            <td>{{$item->checkIn_date}}</td>
            <td>{{$item->checkOut_date}}</td>
        </tr>
        @endforeach
    </table>
@endsection