@extends('partials.nav')


{{-- @section('content')
<div class="container mt-5">
    <h1>About Us</h1>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <img src="/images/about-image.jpg" alt="About Us" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h3>Our Story</h3>
            <p>kama masihara vile.</p>
            <p>Phasellus et velit euismod, lobortis nulla at, facilisis mi. Praesent efficitur tortor nec eros sollicitudin, id convallis dolor convallis. Sed venenatis elit et ligula auctor, ut sodales urna aliquam. Nunc sodales purus a sem imperdiet, ac efficitur lorem tincidunt. Ut euismod elit nec enim bibendum, nec semper lacus ultricies. Nullam mollis ex et mi ultricies, vitae tincidunt purus venenatis.</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <h3>Our Mission</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt sapien eu massa vulputate, at faucibus libero tristique. Sed bibendum urna ac diam bibendum pharetra. Morbi laoreet ipsum sed magna venenatis, id dignissim mauris auctor. Nullam eu aliquam libero, id luctus risus. Suspendisse hendrerit mollis nibh in lacinia. Nulla aliquam ultricies orci vel venenatis. Aenean eget nibh sapien.</p>
            <p>Phasellus et velit euismod, lobortis nulla at, facilisis mi. Praesent efficitur tortor nec eros sollicitudin, id convallis dolor convallis. Sed venenatis elit et ligula auctor, ut sodales urna aliquam. Nunc sodales purus a sem imperdiet, ac efficitur lorem tincidunt. Ut euismod elit nec enim bibendum, nec semper lacus ultricies. Nullam mollis ex et mi ultricies, vitae tincidunt purus venenatis.</p>
        </div>
        <div class="col-md-6">
            <h3>Why Choose Us</h3>
            <ul>
                <li>Experienced and knowledgeable guides</li>
                <li>Flexible and customized tour packages</li>
                <li>High-quality and comfortable accommodations</li>
                <li>Personalized customer service</li>
                <li>Commitment to responsible and sustainable tourism</li>
            </ul>
        </div>
    </div>
</div>
@endsection --}}

@section('content')
    <section class="section bg-light" style="margin-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Discover the Beauty of Tanzania</h2>
                    <p class="section-text">Welcome to Utalii, your gateway to the breathtaking wonders of Tanzania. We are passionate about showcasing the rich cultural heritage, stunning landscapes, and diverse wildlife of this East African nation.</p>
                    <p class="section-text">At Utalii, we believe that travel is not just about visiting new places, but also about creating meaningful experiences. Whether you're an adventurous soul, a wildlife enthusiast, or a culture lover, we have something extraordinary to offer.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('global_assets/images/Places/Dar.png') }}" class="img-fluid rounded" alt="Tanzania">
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('global_assets/images/Places/culture.jpg') }}" class="img-fluid rounded" alt="Culture">
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Immerse Yourself in Tanzanian Culture</h2>
                    <p class="section-text">Tanzania is a land of vibrant cultures and traditions. Experience the warmth and hospitality of the Tanzanian people as you explore local villages, participate in traditional dances, and taste the authentic flavors of Tanzanian cuisine.</p>
                    <p class="section-text">Discover the ancient customs, rituals, and folklore that have been passed down through generations. Our carefully crafted cultural experiences will leave you with a deep appreciation for the diversity and heritage of Tanzania.</p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">Embark on Thrilling Adventures</h2>
                    <p class="section-text">Calling all adventure seekers! Tanzania offers a playground of thrilling activities. From climbing the majestic Mount Kilimanjaro, Africa's highest peak, to going on a safari in the world-famous Serengeti National Park, prepare to be captivated by the untamed beauty of the wilderness.</p>
                    <p class="section-text">Dive into the crystal-clear waters of Zanzibar's pristine beaches, go snorkeling in the vibrant coral reefs, or hike through the lush rainforests of the Usambara Mountains. Whatever your adrenaline-fueled desire, Tanzania has it all.</p>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('global_assets/images/Places/zanzibar.png') }}" class="img-fluid rounded" alt="Adventure">
                </div>
            </div>
        </div>
    </section>
@endsection
