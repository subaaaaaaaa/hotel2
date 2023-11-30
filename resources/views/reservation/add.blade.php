@extends('layouts.hotelapp')

@section('title', '宿泊予約')

@section('menubar')
    @parent
    宿泊予約
@endsection

@section('content')
@if(count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="/guest/reserve" method="post">
    <table>
        @csrf
        <tr>
            <th>お客様ID</th>
            {{-- <td>{{$items}}</td> --}}
            <td><input type="hidden" name="guest_id" value="{{$guest_id}}"></td>
        </tr>
        <tr>
            <th>チェックイン</th>
            <td><input type="date" name="checkIn_date" value=""></td>
        </tr>
        <tr>
            <th>チェックアウト</th>
            <td><input type="date" name="checkOut_date" value=""></td>
        </tr>
        <tr>
            <th>大人</th>
            <td><input type="number" name="number_of_adults" value="0"></td>
        </tr>
        <tr>
            <th>子ども</th>
            <td><input type="number" name="number_of_children" value="0"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="検索"></td>
        </tr>
    </table>
</form>
@endsection
