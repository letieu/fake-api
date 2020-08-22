@extends('layouts.app')

@section('content')
    <div class="container">
    <table id="tb" class="table">
        <thead class="thead">
            <tr>
                <th>id</th>
                <th>original</th>
                <th>short</th>
            </tr>
        </thead>

        <tbody>
            @foreach($links as $link)

                <tr>
                    <td>{{$link->id}}</td>
                    <td>{{$link->original}}</td>
                    <td>{{$link->short}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

@endsection


