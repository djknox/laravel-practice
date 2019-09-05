@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Organizations</div>

                <div class="card-body">
                    <h1>Organizations</h1>
                    <hr>
                    <div>
                        @foreach ($organizations as $organization)
                            <div>
                                <h3>{{ $organization->name }}</h3>
                                <br>
                                {{ $organization->location }}
                                <br>
                                {{ $organization->description }}
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
