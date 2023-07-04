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
            {{-- <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Categories</h6>
                        <ul class="list-group">
                            @foreach($dorms as $category)
                                <li class="list-group-item">{{ $category->category->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div> 9--}}
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <form action="" method="GET" class="form-inline justify-content-end mb-3">
                            <div class="input-group w-100">
                                <input type="text" name="filter" class="form-control" placeholder="Type to Filter" value="{{ request()->input('filter') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    @foreach($dorms as $d)
                        @if(request()->has('filter') && !str_contains(strtolower($d->name), strtolower(request()->input('filter'))) && !str_contains(strtolower($d->category->name), strtolower(request()->input('filter'))))
                            @continue
                        @endif
                        <div class="col-md-3 mb-3">
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

                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="pagination">
                            @if ($dorms->onFirstPage())
                                <li class="page-item disabled"><span class="page-link">Previous</span></li>
                            @else
                                <li class="page-item"><a href="{{ $dorms->previousPageUrl() }}" class="page-link">Previous</a></li>
                            @endif

                            @if ($dorms->hasMorePages())
                                <li class="page-item"><a href="{{ $dorms->nextPageUrl() }}" class="page-link">Next</a></li>
                            @else
                                <li class="page-item disabled"><span class="page-link">Next</span></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Places List Ends--}}

@endsection
