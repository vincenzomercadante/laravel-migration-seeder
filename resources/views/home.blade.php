@extends('layouts.app')

@section('title', 'Trains')

@section('main-content')
    <section>
        <div class="container py-4">
            <h1 class="text-center text-warning text-uppercase mb-5">Laravel Trains</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-uppercase">company</th>
                        <th class="text-uppercase">departure station</th>
                        <th class="text-uppercase">arrival station</th>
                        <th class="text-uppercase">departure hours</th>
                        <th class="text-uppercase">arrival hours</th>
                        <th class="text-uppercase">train code</th>
                        <th class="text-uppercase">number of carriages</th>
                        <th class="text-uppercase">is late</th>
                        <th class="text-uppercase">is canceled</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- table row generator --}}
                    @forelse ($trains as $train)
                        <tr>
                            <td>{{ $train->company }}</td>
                            <td>{{ $train->departure_station }}</td>
                            <td>{{ $train->arrival_station }}</td>
                            <td>{{ $train->departure_hours }}</td>
                            <td>{{ $train->arrival_hours }}</td>
                            <td>{{ $train->train_code }}</td>
                            <td>{{ $train->n_carriages }}</td>
                            <td>{{ $train->is_late ? 'Yes' : 'No' }}</td>
                            <td>{{ $train->is_canceled ? 'Yes' : 'No' }}</td>
                        </tr>
                    @empty
                        <tr colspan="9">
                            <td class="text-danger text-uppercase">No trains founded, please retry!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
