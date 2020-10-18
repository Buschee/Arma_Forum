@extends('layout.master')
@section('content')
    <h2>Alle Beitraege</h2>
    <table class="table table-striped table-bordered">
        <thead>
        <th>Id</th>
        <th>Creator</th>
        <th>Title</th>
        <th colspan="3">Actions</th>
        </thead>
        <tbody>
        @foreach($beitraege as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->creator }}</td>
                <td>{{ $b->title }}</td>
                <td>
                    <a href="{{ route('beitraege.show', $b->id) }}" class="btn bg-light btn-outline-dark">Show</a>
                </td>
                <td>
                    <a href="{{ route('beitraege.edit', $b->id) }}" class="btn bg-light btn-outline-dark">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{ route('beitraege.destroy', $b->id) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn bg-light btn-outline-dark">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection