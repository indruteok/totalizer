@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>{{ $team->name }}: Players</h1>

                <table class="table">
                    <tr>
                        <th>Vardas</th>
                        <th>Gimimo data</th>
                    </tr>
                    @forelse($players as $player)
                        <tr>
                            <td>{{ $player->name . ' ' . $player->surname }}</td>
                            <td>{{ $player->birth_date }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Žaidėjų duomenų nėra.</td>
                        </tr>
                    @endforelse
                </table>

            </div>
        </div>
    </div>
@endsection
