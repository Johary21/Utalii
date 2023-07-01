@extends('layouts.master')
@section('page_title', 'Prediction')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Budget Prediction</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                @if(Qs::userIsTeamSA())
                <li class="nav-item"><a href="#add-tt" class="nav-link active" data-toggle="tab">Review Questions</a></li>
                @endif
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edit Questions</a>
                    {{-- <div class="dropdown-menu dropdown-menu-right">
                        @foreach($my_classes as $mc)
                            <a href="#ttr{{ $mc->id }}" class="dropdown-item" data-toggle="tab">{{ $mc->name }}</a>
                        @endforeach
                    </div> --}}
                </li>
            </ul>


            <div class="tab-content">
                <form method="POST" action="#">
                    @csrf

                    <div class="form-group">
                      <label for="country">Select a country:</label>
                      <select id="country" name="country" class="form-control">
                        <option value="SWITZERLAND">SWITZERLAND</option>
                        <option value="UNITED KINGDOM">UNITED KINGDOM</option>
                        <option value="CHINA">CHINA</option>
                        <option value="SOUTH AFRICA">SOUTH AFRICA</option>
                        <option value="UNITED STATES OF AMERICA">UNITED STATES OF AMERICA</option>
                        <option value="NIGERIA">NIGERIA</option>
                        <option value="INDIA">INDIA</option>
                        <option value="BRAZIL">BRAZIL</option>
                        <option value="CANADA">CANADA</option>
                        <option value="MALT">MALT</option>
                        <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                        <option value="RWANDA">RWANDA</option>
                        <option value="AUSTRIA">AUSTRIA</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="age">Select your age group:</label>
                      <select id="age" name="age" class="form-control">
                        <option value="1-24">1-24</option>
                        <option value="25-44">25-44</option>
                        <option value="45-64">45-64</option>
                        <option value="65+">65+</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="travelWith">Who do you plan to travel with:</label>
                      <select id="travelWith" name="travelWith" class="form-control">
                        <option value="Friends/Relatives">Friends/Relatives</option>
                        <option value="Alone">Alone</option>
                        <option value="Spouse">Spouse</option>
                        <option value="Children">Children</option>
                        <option value="Spouseandchildren">Spouse and Children</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="purpose">What is the purpose of visiting Tanzania:</label>
                      <select id="purpose" name="purpose" class="form-control">
                        <option value="Leisure and Holidays">Leisure and Holidays</option>
                        <option value="Visiting friends and Relatives">Visiting friends and Relatives</option>
                        <option value="Business">Business</option>
                        <option value="Meetings and Conference">Meetings and Conference</option>
                        <option value="Volunteering">Volunteering</option>
                        <option value="Scientific and Academic">Scientific and Academic</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="numberofpeople">How many people are you are coming with in Tanzania:</label>
                      <input type="number" id="numberofpeople" name="numberofpeople" min="1" max="100" class="form-control" required>
                    </div>

                    <label for="activity">What is the main activity you want to do when you are in Tanzania:</label>
                    <select id="activity" name="activity" class="form-control">
                        <option value="Wildlife tourism">Wildlife tourism</option>
                        <option value="Cultural tourism">Cultural tourism</option>
                        <option value="Mountain Climbing">Mountain Climbing</option>
                        <option value="Beach Tourism">Beach Tourism</option>
                        <option value="Conference Tourism">Conference Tourism</option>
                        <option value="Bird Watching">Bird Watching</option>
                        <option value="Business">Business</option>
                        <option value="Diving and Sport fishing">Diving and Sport fishing</option>
                    </select>
                    <br><br>

                    <label for="tourArrangement">How do you arrange your tour:</label>
                    <select id="tourArrangement" name="tourArrangement" class="form-control">
                        <option value="Independent">Independent</option>
                        <option value="Package tour">Package tour</option>
                    </select>
                    <br><br>

                    <label for="paymentmode">What is your payment mode for tourism service:</label>
                    <select id="paymentmode" name="paymentmode" class="form-control">
                        <option value="Cash">Cash</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Other">Other</option>
                        <option value="TravellerCheque">Traveller's Cheque</option>
                    </select>
                    <br><br>

                    <label for="Tzmainland">How many days you plan to spend in Tanzania Mainland:</label>
                    <input type="number" id="Tzmainland" name="Tzmainland" min="0" max="100" required class="form-control">
                    <br><br>

                    <label for="Zanzibar">How many days you plan to spend in Zanzibar:</label>
                    <input type="number" id="Zanzibar" name="Zanzibar" min="0" max="100" required class="form-control">
                    <br><br>

                    {{-- <input type="submit" value="Make Prediction" class="btn btn-primary"> --}}
                    <div class="text-right">
                        <button id="ajax-btn" type="submit" class="btn btn-primary">Make Prediction <i class="icon-paperplane ml-2"></i></button>
                    </div>



            </div>
        </div>
    </div>

    {{--TimeTable Ends--}}

@endsection
