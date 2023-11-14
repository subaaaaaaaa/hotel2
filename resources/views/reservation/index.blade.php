@extends('layouts.hotelapp')

@section('title', 'reservation.index')

@section('menubar')
    @parent
    {{-- other text --}}
@endsection

@section('content')
    <table>
        <tr>
            <th>お客様ID</th>
        </tr>
        @foreach ($items as $item)
        <td>
            @if ($item->hotel != null)
                {{ $item->hotel->getId() }}
            @endif
        </td>
        @endforeach
    </table>
@endsection