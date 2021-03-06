@extends('layouts.default')

@section('content')


    @foreach($devices as $device)

        <ul class="collection">
            <li class="collection-item avatar">
                <i class="material-icons circle">folder</i>
            <span class="title"><a href="device/{{$device->id}}">{{ $device->hostname }}</a></span>
            <p>{{ $device->vendor_id }}<br>
                Second Line
            </p>
                <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
            </li>
        </ul>
    @endforeach
@stop
