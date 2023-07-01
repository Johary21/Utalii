@extends('layouts.master')
@section('page_title', 'Places')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Review Places</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <div class="row">
            @foreach($dorms as $d)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('global_assets/images/Places/' . $d->image) }}" alt="Image" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->name }}</h5>
                        <p class="card-text">{{ $d->description }}</p>
                        <p><strong>Category: </strong>{{ $d->category->name }}</p>
                        <p><strong>Opening Hours: </strong>{{ $d->opening_hours }}</p>
                        <p><strong>Ratings: </strong>{{ $d->rating }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{--Places List Ends--}}

@endsection
