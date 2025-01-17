@extends('layouts.master')
@section('page_title', 'My Dashboard')
@section('content')

@if(Qs::userIsTeamSA())
   <div class="row">
       <div class="col-sm-6 col-xl-3">
           <div class="card card-body bg-blue-400 has-bg-image">
               <div class="media">
                   <div class="media-body">
                       <h3 class="mb-0">{{ DB::table('dorms')->count() }}</h3>
                       <span class="text-uppercase font-size-xs font-weight-bold">Total Places</span>
                   </div>

                   <div class="ml-3 align-self-center">
                    <i class="icon-pin icon-3x opacity-75"></i>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-sm-6 col-xl-3">
           <div class="card card-body bg-danger-400 has-bg-image">
               <div class="media">
                   <div class="media-body">
                       <h3 class="mb-0">{{ $users->where('user_type', 'guest')->count() }}</h3>
                       <span class="text-uppercase font-size-xs">Total Users</span>
                   </div>

                   <div class="ml-3 align-self-center">
                       <i class="icon-users4 icon-3x opacity-75"></i>
                   </div>
               </div>
           </div>
       </div>

       <div class="col-sm-6 col-xl-3">
           <div class="card card-body bg-success-400 has-bg-image">
               <div class="media">
                   <div class="mr-3 align-self-center">
                       <i class="icon-pointer icon-3x opacity-75"></i>
                   </div>

                   <div class="media-body text-right">
                       <h3 class="mb-0">{{ $users->where('user_type', 'admin')->count() }}</h3>
                       <span class="text-uppercase font-size-xs">Total Administrators</span>
                   </div>
               </div>
           </div>
       </div>
   </div>
@endif

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Calendar</h5>
                {!! Qs::getPanelOptions() !!}
            </div>

            <div class="card-body">
                <div class="fullcalendar-basic" data-events='[
                    {
                        "title": "Swahili cultural festival",
                        "start": "2023-05-15",
                        "end": "2023-05-18"
                    },
                    {
                        "title": "The great Serengeti Migration",
                        "start": "2023-06-01",
                        "end": "2023-06-10"
                    }
                ]'></div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card" style="border-radius: 35px;">
            <div class="card-body p-4">
                <div class="d-flex">
                    <h6 id="location" class="flex-grow-1">Loading...</h6>
                    <h6 id="time"></h6>
                </div>

                <div class="d-flex flex-column text-center mt-5 mb-4">
                    <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">29°C</h6>
                    <span class="small" style="color: #868B94">Partly Cloudy</span>
                </div>

                <div class="d-flex align-items-center">
                    <div class="flex-grow-1" style="font-size: 1rem;">
                        <div><i class="fas fa-wind fa-fw" style="color: #868B94;"></i><span class="ms-1">40 km/h</span></div>
                        <div><i class="fas fa-tint fa-fw" style="color: #868B94;"></i><span class="ms-1">84%</span></div>
                        <div><i class="fas fa-sun fa-fw" style="color: #868B94;"></i><span class="ms-1">0.2h</span></div>
                    </div>
                    <div>
                        <img src="{{ asset('global_assets/images/partly-cloudy.jpg') }}" width="100px">
                    </div>
                </div>
            </div>
        </div>

        <!-- Visited places -->
        <div class="card">
            <div class="card-body p-4">
                <h4 class="card-title mb-4">Top Visited Places</h4>
                <div class="" style="height:180px">
                    <div id="visitbylocate" style="height:100%"></div>
                </div>
                <div class="row mb-3 align-items-center mt-1 mt-5">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">Zanzibar</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">28%</span>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">Serengeti</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">21%</span>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">Kilimanjaro</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">18%</span>
                    </div>
                </div>
                <div class="row mb-3 align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">Tanga</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">12%</span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-4 text-right">
                        <span class="text-muted font-14">Others</span>
                    </div>
                    <div class="col-5">
                        <div class="progress" style="height: 5px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-3 text-right">
                        <span class="mb-0 font-14 text-dark font-weight-medium">9%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        // Get user's location
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            document.getElementById("location").innerHTML = "Location not available";
        }

        // Display user's location
        function showPosition(position) {
            const latitude = position.coords.latitude;
            const longitude = position.coords.longitude;

            // Use a geocoding service or API to get the location name based on latitude and longitude
            // Here, we'll use the OpenCage Geocoder API as an example
            const apiKey = "8e17ebf91a364aacf8233d22486575ac";
            const geocoderUrl = `http://api.positionstack.com/v1/json?key=${apiKey}&q=${latitude}+${longitude}`;

            // Make a GET request to the geocoder API
            fetch(geocoderUrl)
                .then(response => response.json())
                .then(data => {
                    const location = data.results[0].formatted;
                    document.getElementById("location").innerHTML = location;
                })
                .catch(error => {
                    console.error("Error fetching location:", error);
                    document.getElementById("location").innerHTML = "Location not available";
                });
        }

        // Display current time
        const currentTime = new Date();
        const timeString = currentTime.toLocaleTimeString([], { hour: "2-digit", minute: "2-digit" });
        document.getElementById("time").innerHTML = timeString;
    </script>

    <script>
        // Visit By Location
        jQuery('#visitbylocate').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            borderColor: '#000',
            borderOpacity: 0,
            borderWidth: 0,
            zoomOnScroll: false,
            color: '#d5dce5',
            regionStyle: {
                initial: {
                    fill: '#d5dce5',
                    'stroke-width': 1,
                    'stroke': 'rgba(255, 255, 255, 0.5)'
                }
            },
            enableZoom: true,
            hoverColor: '#bdc9d7',
            hoverOpacity: null,
            normalizeFunction: 'linear',
            scaleColors: ['#d5dce5', '#d5dce5'],
            selectedColor: '#bdc9d7',
            selectedRegions: [],
            showTooltip: true,
            onRegionClick: function (element, code, region) {
                var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                alert(message);
            }
        });
    </script>

    <style>
        #visitbylocate .jvectormap-zoomin,
        #visitbylocate .jvectormap-zoomout {
            display: none;
        }
    </style>
@endsection
