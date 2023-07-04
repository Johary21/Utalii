@extends('partials.nav')
@extends('layouts.index')

@section('title', 'Utalii')

@section('content')
<br><br>

<html>
  <head>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style>
        #map {
            height: 100%;
        }
        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .welcome-text {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    .welcome-text h2 {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .welcome-text p {
        font-size: 16px;
        line-height: 1.5;
        color: #666;
        margin-bottom: 10px;
    }
    </style>
    <script>
        // Initialize and add the map
        let map;
        const Tanzania = { lat: -6.3690, lng: 34.8888 };
        const Serengeti = { lat: -2.7, lng: 35.1 };
        const MountKilimanjaro = { lat: -3.0, lng: 37.3 };
        const ZanzibarArchipelago = { lat: -6.1, lng: 39.2 };
        const NgorongoroConservationArea = { lat: -3.2, lng: 35.5 };

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: Tanzania,
                zoom: 7,
            });

            // Add markers
            const marker = new google.maps.Marker({
                position: Serengeti,
                icon: "https://img.icons8.com/emoji/48/000000/lion-emoji.png",
                map: map,
            });
            const marker2 = new google.maps.Marker({
                position: MountKilimanjaro,
                icon: "https://img.icons8.com/emoji/48/000000/mountain-emoji.png",
                map: map,
            });
            const marker3 = new google.maps.Marker({
                position: ZanzibarArchipelago,
                icon: "https://img.icons8.com/emoji/48/000000/beach-with-umbrella-emoji.png",
                map: map,
            });
            const marker4 = new google.maps.Marker({
                position: NgorongoroConservationArea,
                icon: "https://img.icons8.com/emoji/48/000000/zebra-emoji.png",
                map: map,
            });

            // Define key descriptions for markers
            const keyDescriptions = {
                Serengeti: "Serengeti National Park - Explore the stunning wildlife and landscapes.",
                MountKilimanjaro: "Mount Kilimanjaro - Embark on a thrilling climb to Africa's highest peak.",
                ZanzibarArchipelago: "Zanzibar Archipelago - Relax and unwind on beautiful tropical beaches.",
                NgorongoroConservationArea: "Ngorongoro Conservation Area - Witness the incredible wildlife in a unique crater environment."
            };

            // Add event listeners to show key descriptions on marker hover
            const infoWindow = new google.maps.InfoWindow();
            marker.addListener("mouseover", () => {
                infoWindow.setContent(keyDescriptions.Serengeti);
                infoWindow.open(map, marker);
            });
            marker.addListener("mouseout", () => {
                infoWindow.close();
            });
            marker2.addListener("mouseover", () => {
                infoWindow.setContent(keyDescriptions.MountKilimanjaro);
                infoWindow.open(map, marker2);
            });
            marker2.addListener("mouseout", () => {
                infoWindow.close();
            });
            marker3.addListener("mouseover", () => {
                infoWindow.setContent(keyDescriptions.ZanzibarArchipelago);
                infoWindow.open(map, marker3);
            });
            marker3.addListener("mouseout", () => {
                infoWindow.close();
            });
            marker4.addListener("mouseover", () => {
                infoWindow.setContent(keyDescriptions.NgorongoroConservationArea);
                infoWindow.open(map, marker4);
            });
            marker4.addListener("mouseout", () => {
                infoWindow.close();
            });
        }
    </script>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome-text">
                    <h2>Welcome to Tanzania</h2>
                    <p>
                        Tanzania is a true paradise for wilderness and safari enthusiasts. With fifteen national parks, including the famous Serengeti National Park, you can spot the "Big Five" and enjoy a variety of flora and fauna. Visit the Selous Game Reserve and Ruaha National Park in the south or explore Gombe Stream National Park to see monkeys and chimpanzees. Tanzania offers safaris for all tastes, from luxurious lodges to Maasai-guided day safaris in 4x4 vehicles or on foot. Don't miss the iconic Mount Kilimanjaro climb or the scenic hikes in Mount Meru and Usambara Mountains.
                    </p>
                    <p>
                        Immerse yourself in the vibrant culture of Dar Es Salaam, a cosmopolitan city with colonial architecture and a strong Swahili influence. It serves as a starting point for excursions and trips to Zanzibar Island. After your safari adventure, unwind on the white sandy beaches and enjoy the crystal-clear waters of Zanzibar. It's the perfect post-safari retreat!
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h3>Map</h3>
                <p>Hover over a site to learn more about it.</p>
                <div id="map" style="height: 600px;"></div>
                <!-- calling the script -->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgtwk9hM9kskhPEgiftk_ihCMpN23qEb0&callback=initMap&v=weekly" async></script>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center">Overview of the 6 tourist regions</h2>
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzania-centre.jpg') }}" alt="Central Tanzania">
                        <h3>Central Tanzania</h3>
                        <p>The central region is rarely included on tourist itineraries due to its semi-arid climate and poor road network. However, it is the birthplace of some of Tanzania’s people, and there are several sites of interest for curious travellers, including the enigmatic cave paintings of Kolo-Kondoa. This region is also home to many gold and diamond mines; one of the largest diamond mines in the world, the Mwadui Mine, is north of Singida. Dodoma, the country's official capital, is nothing special, but a convenient stopover because of its roads linking Dar Es Salaam and the north of the country.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/dar.jpg') }}" alt="Dar es Salaam and its outskirts">
                        <h3>Dar es Salaam and the Outskirts</h3>
                        <p>Other than being the administrative capital of the country, the port city of Dar Es Salaam was originally a small fishing village until a sultan established a trading post, after which the small Arab village became a cosmopolitan metropolis teeming with life. It’s the real economic heart of the country. South of the city are stretches of beautiful white sandy beaches lined with palm trees and lapping turquoise waters. Some of the most beautiful beaches include Mikadi Beach, Kipepeo Beach and Ras Kutani beach, magnificent spots for relaxation after a safari. The northern coasts rank close behind; Off the beaten track, they offer some truly amazing discoveries. This corner of Tanzania is unique where the jungle and ocean intertwine.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzanie-northern.jpg') }}" alt="Nothern and its parks">
                        <h3>The North and its Parks</h3>
                        <p>The northern region is where most safaris are organised, with some of the most famous and visited sites in Tanzania. Some choose to stick to the more well-known sites, such as Lake Victoria, the Serengeti National Park, a game reserve where lions, leopards, baboons, giraffes, wildebeest and other mammals live freely, the Ngorongoro Crater, and a hike or trek up Kilimanjaro, the highest peak in Africa. The northern region offers a multitude of lesser-known sites, but they are not really worthy of note; this is the region that deserves most of your attention during a visit to Tanzania.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/southern.jpg') }}" alt="The southern highlands">
                        <h3>The Southern Highlands</h3>
                        <p>This region is less touristy than the northern region but has many assets and varied landscapes. Green hills, bustling markets, and wildlife are among the attractions of the southern highlands. National parks in the region include Mikumi, Ruaha, and Selous for wildlife viewing experiences. The beaches of Mtwara and the Mnazi Bay Marine Park are also worth a visit.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzania-west.jpg') }}" alt="The west">
                        <h3>The West</h3>
                        <p>The main asset of this remote area is its nature and wildlife. It’s an ideal destination for seeing chimpanzees, the undisputed rulers of the region. It includes three national parks: Gombe National Park, Mahale Mountains Park, and Katavi Park. The city of Tabora is a good stopover during your trip to the west where you will find buildings dating back to the German colonial era. Traveling in this region takes time; the roads are in poor condition.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/zanzibar.jpg') }}" alt="Zanziabr">
                        <h3>Zanzibar</h3>
                        <p>The Zanzibar Archipelago is only accessible by boat or plane. It’s a semi-autonomous province made up of three islands: Unguja, Pemba, and Mafia. Also known as the "spice island" (thanks mainly to cloves), it has a mysterious and romantic atmosphere and idyllic beaches, making it a popular destination for honeymooners, especially along the east coast which boasts white sand, coral reefs, and sea temperatures between 26°C and 29°C. Nungwi Beach, Paje Beach, and Jambiani Beach are the most beautiful on the island. Stone Town is the name of the historic heart of the city of Zanzibar with its Swahili architecture (wooden doors) still apparent! In the south of the island, in Kizimkazi, you can go on an excursion to admire the humpback dolphins who populate the offshore caves.</p>
                    </div>
                </div>
                <h2>Attractions Maps</h2>
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/Activities.jpg') }}" alt="Regions and Their touristic activities">
                <!-- Insert any additional content here -->
            </div>

        </div>
    </div>
  </body>
</html>

@endsection
