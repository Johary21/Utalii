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
                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Edit Questions</a>
                    <div class="dropdown-menu dropdown-menu-right">
                        @foreach($my_classes as $mc)
                            <a href="#ttr{{ $mc->id }}" class="dropdown-item" data-toggle="tab">{{ $mc->name }}</a>
                        @endforeach
                    </div>
                </li> --}}
            </ul>

            <div class="tab-content">
                <form method="POST" action="#" onsubmit="showEstimatedBudget(event)">
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
                        <label for="numberofpeople">How many people are you coming with in Tanzania:</label>
                        <input type="number" id="numberofpeople" name="numberofpeople" min="1" max="100" class="form-control" required>
                    </div>

                    <div class="form-group">
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
                    </div>

                    <div class="form-group">
                        <label for="tourArrangement">How do you arrange your tour:</label>
                        <select id="tourArrangement" name="tourArrangement" class="form-control">
                            <option value="Independent">Independent</option>
                            <option value="Package tour">Package tour</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Package Tour Inclusions</h4>
                            <div class="form-group">
                                <label for="int_transport">International Transportation:</label>
                                <select id="int_transport" name="int_transport" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="accomodation">Accommodation Service:</label>
                                <select id="accomodation" name="accomodation" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="food">Food Service:</label>
                                <select id="food" name="food" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="local_transport">Local Transportation:</label>
                                <select id="local_transport" name="local_transport" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Package Tour Services</h4>
                            <div class="form-group">
                                <label for="sightseeing">Sightseeing Service:</label>
                                <select id="sightseeing" name="sightseeing" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tour_guide">Tour Guiding Service:</label>
                                <select id="tour_guide" name="tour_guide" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="insurance">Insurance:</label>
                                <select id="insurance" name="insurance" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="first_trip">First Trip in Tanzania:</label>
                                <select id="first_trip" name="first_trip" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="paymentmode">Payment Mode for Tourism Service:</label>
                        <select id="paymentmode" name="paymentmode" class="form-control">
                            <option value="Cash">Cash</option>
                            <option value="Credit Card">Credit Card</option>
                            <option value="Other">Other</option>
                            <option value="TravellerCheque">Traveller's Cheque</option>
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Duration in Tanzania Mainland</h4>
                            <div class="form-group">
                                <label for="Tzmainland">Number of Days:</label>
                                <input type="number" id="Tzmainland" name="Tzmainland" min="0" max="100" required class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4>Duration in Zanzibar</h4>
                            <div class="form-group">
                                <label for="Zanzibar">Number of Days:</label>
                                <input type="number" id="Zanzibar" name="Zanzibar" min="0" max="100" required class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#predictModal">
                            Make Prediction <i class="icon-paperplane ml-2"></i>
                          </button>

                    </div>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="predictModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Estimated Budget:</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <div id="resultContainer" class="result-container">
                            <p id="budgetAmount" class="budget-amount"></p>
                        </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save Budget</button> --}}
                        </div>
                    </div>
                    </div>
                </div>
                <!--modal end-->
            </div>
    <script>
        function showEstimatedBudget(event) {
            event.preventDefault(); // Prevent form submission

            // Perform calculations to estimate the budget
            var estimatedBudget = calculateEstimatedBudget();

            // Display the estimated budget in a pop-up window
            alert("Estimated Budget: $" + estimatedBudget);
        }

        function calculateEstimatedBudget() {
            // Perform your budget estimation calculations here
            // Return the estimated budget value
            return "The predicted amount of money you will spend is: 500,000"; // Replace with your actual calculation
        }
    </script>

<script>
    function showEstimatedBudget(event) {
        event.preventDefault(); // Prevent form submission

        // Perform calculations to estimate the budget
        var estimatedBudget = calculateEstimatedBudget();

        // Display the estimated budget on the page
        var budgetAmountElement = document.getElementById("budgetAmount");
        budgetAmountElement.textContent = estimatedBudget + "Tsh" ;

        // Show the result container
        var resultContainer = document.getElementById("resultContainer");
        resultContainer.style.display = "block";
    }

    // Rest of the JavaScript code...
</script>


        </div>
    </div>

    {{--Budgeting Ends--}}

@endsection
