@extends('layouts.master')
@section('page_title', 'Places')
@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h6 class="card-title">Review Places</h6>
        {!! Qs::getPanelOptions() !!}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="all-dorms">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Opening Hours</th>
                                <th>Ratings</th>
                                <th>Images</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dorms as $d)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->description}}</td>
                                <td>{{ $d->category->name}}</td>
                                <td>{{ $d->opening_hours}}</td>
                                <td>{{ $d->rating}}</td>
                                <td><img src="{{ asset('global_assets/images/Places/' . $d->image) }}" alt="Image" style="max-width: 250px; height: auto;"></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Places List Ends--}}

@endsection
