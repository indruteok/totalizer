@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Rezultatų</h1>

                <table class="table">
                    <tr>
                        <th>Nr</th>
                        <th>Komanda</th>
                        <th>Laimėjimų</th>
             
                        <th>Pralaimėjimų</th>
                        <th>Taškai</th>
                    </tr>
                    @forelse($teams as $team)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->won }}</td>
                            
                            <td>{{ $team->lost }}</td>
                            <td>{{ $team->points }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">Nėa komandų.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
