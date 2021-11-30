@extends('base')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Abbr</th>
            <th scope="col">Vendor</th>
            <th scope="col">Zone</th>
            <th scope="col">Country</th>
            <th scope="col">Url</th>
            <th scope="col">Notes</th>
            <th scope="col">Rating</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sources as $source)
        <tr>
            <th>{{$source->id}}</th>
            <td>{{$source->abbr}}</td>
            <td>{{$source->vendor}}</td>
            <td>{{$source->country->zoneName}}</td>
            <td>{{$source->country->country}}</td>
            <td><a href="{{$source->url}}">{{$source->url}}</a></td>
            <td>{{$source->notes}}</td>
            <td>{{$source->rating}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
