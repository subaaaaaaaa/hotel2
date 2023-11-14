@extends('layouts.hotelapp')

@section('title', 'お客様情報入力フォーム')

@section('menubar')
    @parent
    予約
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
<form action="/guest/info" method="post">
    <table>
        @csrf
        <tr>
            <th>代表者名</th>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
        </tr>
        <tr>
            <th>ご住所</th>
            <td><input type="text" name="address" value="{{old('address')}}"></td>
        </tr>
        <tr>
            <th>電話番号</th>
            <td><input type="text" name="tel" value="{{old('tel')}}"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="送信"></td>
        </tr>
    </table>
</form>
@endsection
