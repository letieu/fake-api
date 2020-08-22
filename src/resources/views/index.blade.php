@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="post" action="{{ route('api.store') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Entry point</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="entry">
            </div>
            <div class="form-group">
                <label for="data">Data</label>
                <textarea id="data" name="data" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="data">Method</label>

                <select class="form-control" id="method" name="method">
                    <option value="post">Post</option>
                    <option value="get">Get</option>

                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    @if($apis->isEmpty() )
        <h2> No have one </h2>
    @else
        <table class="table" style="margin-top: 100px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Entry</th>
                <th scope="col">Data</th>
                <th scope="col">Method</th>

            </tr>
            </thead>
            <tbody>

            @foreach(@$apis as $api)
                <tr>
                    <th scope="row">{{ @$api['id'] }}</th>
                    <td > {{ @$api['entry'] }}</td>
                    <td>
                        <textarea rows="3">
                            {{ @$api['data'] }}
                        </textarea>
                    </td>
                    <td>{{ @$api['method'] }}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
    @endif

    </div>

@endsection
