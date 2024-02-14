<?php include './includes/header.php'; ?>

<main>
    <section class="h-banner">
        <div class="container">
            <div class="d-flex flex-wrap text-center justify-content-center   ">
                <div class="banner-info text-center">
                    <h1>Your Friend for <span>Traveling</span></h1>
                    <p>Welcome to our cozy cabin nestled in the heart of the mountains!
                        Our cabin is the perfect getaway for
                        <span>those seeking peace and relaxation in a natural environment.</span>
                    </p>
                </div>
                <div class="travel-info flex-grow-1 ">
                    <form action="">
                        <div class="row">
                            <div class="col">
                                <div class="input-group">
                                    <img src="assets/images/svg/location.svg" alt="location">
                                    <select class="form-control form-select">
                                        <option selected disabled>Destinations</option>
                                        <option>Pokhara</option>
                                        <option>kathmandu</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group"><img src="assets/images/svg/weather.svg" alt="weather">
                                    <select class="form-select">
                                        <option selected disabled>Weather</option>
                                        <option>Winter</option>
                                        <option>Spring</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <img src="assets/images/svg/activites.svg" alt="Activities">
                                    <select class="form-select">
                                        <option selected disabled>Activities</option>
                                        <option>Hiking</option>
                                        <option>Tour</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group"><img src="assets/images/svg/calendar.svg" alt="duration">
                                    <select class="form-select">
                                        <option selected disabled>duration</option>
                                        <option>1 day</option>
                                        <option>2 days</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn-blue">
                                        Search Results
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <figure class="banner-img">
            <img src="assets/images/banner.jfif" alt="">
        </figure>
    </section>
    <section class="h-destinations section-break">
        <div class="container">
            <h2 class="heading">Top Vacation Destinations</h2>
            <div class="slider-wrapper">
                <div class="destination-slider">
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/bkt.jfif" alt="destination">
                                <figcaption>Bhaktapur, Nepal</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/dharan.jfif" alt="destination">
                                <figcaption>Dharan, Nepal</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/sarangkot.jfif" alt="destination">
                                <figcaption>Sarangkot, Pokhara</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/pokhara.jfif" alt="destination">
                                <figcaption>Pokhara, Nepal</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/bkt.jfif" alt="destination">
                                <figcaption>Bhaktapur, Nepal</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <figure>
                                <img src="assets/images/destination/dharan.jfif" alt="destination">
                                <figcaption>Dharan, Nepal</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="#" class="btn-blue">Explore More</a>
            </div>
        </div>
    </section>
    <section class="h-activites">
        <div class="container">
            <h2 class="heading">Explore Activities in Map</h2>
            <div class="treks-wrapper">
                <div class="row">
                    <div class="col-8">
                        <figure>
                            <img src="assets/images/map.png" alt="map">
                        </figure>
                    </div>
                    <div class="col-4">
                        <div class="treks">
                            <h4 class="stylist-btn">Base Camp Treks</h4>
                            <ul>
                                <li><a href="#">Kanchanjunga Base Camp</a></li>
                                <li><a href="#">Annapurna Base Camp </a></li>
                                <li><a href="#">Makalu Base Camp</a></li>
                                <li><a href="#">Everest Base Camp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="activites-links">
                <div class="row">
                    <div class="col">
                        <a href="#">
                            <figure><img src="assets/images/activites/helicopter.png" alt="helicopter"></figure>
                            <h6>Heli Tour</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <figure><img src="assets/images/activites/mountain-range.png" alt="Mountaineering">
                            </figure>
                            <h6>Mountaineering</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">

                            <figure><img src="assets/images/activites/safari.png" alt="Safari Tour"></figure>
                            <h6>Safari Tour</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">

                            <figure><img src="assets/images/activites/lake.png" alt="Lake Treks"></figure>
                            <h6>Lake Treks</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">

                            <figure><img src="assets/images/activites/military-base.png" alt="Base Camp Treks">
                            </figure>
                            <h6>Base Camp Treks</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">

                            <figure><img src="assets/images/activites/trekking-pole.png" alt="Circuit Treks">
                            </figure>
                            <h6>Circuit Treks</h6>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">

                            <figure><img src="assets/images/activites/baggages.png" alt="Beyond Nepal"></figure>
                            <h6>Beyond Nepal</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-categories">
        <div class="container">
            <div class="text-center categories-info">
                <p>Categories You would Love to Explore</p>
                <h2 class="heading">Majestic Peaks,
                    Safaris & More
                    Categories</h2>
            </div>
            <div class="categories-wrapper">
                <div class="row gx-5">
                    <div class="col-md-4">
                        <div class="cate-box">
                            <figure>
                                <img src="assets/images/cate/1.png" alt="">
                                <figcaption>Jungle
                                    Safaris</figcaption>
                            </figure>
                            <p>Browse our example trips and get in contact
                                to start planning your very own advanture.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cate-box m-top">
                            <figure>
                                <img src="assets/images/cate/2.png" alt="">
                                <figcaption>Base Camp
                                    Trekkings</figcaption>
                            </figure>
                            <p>Browse our example trips and get in contact
                                to start planning your very own advanture.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="cate-box">
                            <figure>
                                <img src="assets/images/cate/3.png" alt="">
                                <figcaption>Festival
                                    Tour</figcaption>
                            </figure>
                            <p>Browse our example trips and get in contact
                                to start planning your very own advanture.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrapper">
                <a href="#" class="btn-blue">Explore More</a>
            </div>
        </div>
    </section>
    <section class="h-packages">
        <div class="container ">
            <h2 class="heading">
                Our Trending Packages
            </h2>
            <div class="packages-warpper">
                <div class="row gy-4">
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hill.jfif" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Climbing Mount
                                    Annapurna Trek</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg"
                                            alt="">Kilimanjaro, Tanzania</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/trekking.svg"
                                            alt="">Trekking</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hatti.png" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Royal Chitwan National
                                    Park</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg" alt="">Chitwan,
                                        Nepal</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/forest.svg" alt="">Jungle
                                        Safari</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hill.jfif" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Mount Kailash Climb, Tibet
                                    Route</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg"
                                            alt="">Kilimanjaro, Tanzania</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/trekking.svg"
                                            alt="">Trekking</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hill.jfif" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Climbing Mount
                                    Annapurna Trek</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg"
                                            alt="">Kilimanjaro, Tanzania</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/trekking.svg"
                                            alt="">Trekking</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hatti.png" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Royal Chitwan National
                                    Park</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg" alt="">Chitwan,
                                        Nepal</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/forest.svg" alt="">Jungle
                                        Safari</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="packages-box">
                            <div class="packages-img">
                                <figure>
                                    <img src="assets/images/destination/hill.jfif" alt="">
                                </figure>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-eye"></i>1250 Views
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="fa-regular fa-star"></i>1244 reviews
                                    </li>
                                </ul>
                            </div>
                            <div class="packages-info">
                                <h3>Mount Kailash Climb, Tibet
                                    Route</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><img src="assets/images/svg/loc.svg"
                                            alt="">Kilimanjaro, Tanzania</li>
                                    <li class="list-inline-item"><img src="assets/images/svg/caal.svg" alt="">7 Day
                                    </li>
                                    <li class="list-inline-item"><img src="assets/images/svg/trekking.svg"
                                            alt="">Trekking</li>
                                </ul>
                                <div class="btn-wrapper">
                                    <a href="#!" class="btn-blue">Explore</a>
                                    <p class="packages-price">Price Rs.2,299</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="btn-wrapper">
                <a href="#" class="btn-blue">Explore More</a>
            </div>
        </div>
    </section>
    <section class="h-testimonials">
        <div class="container">
            <h2 class="heading">What Travelers Say About Us</h2>
            <div class="testimonials-wrapper">
                <div class="row justify-content-between ">
                    <div class="col-md-3">
                        <div class="clients-wrapper">
                            <h4>Clients
                                Testimonials</h4>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="testimonials-slide-wrapper">
                            <div class="testimonials-slider">
                                <div>
                                    <div class="testimonials-box">
                                        <div class="testimonial-details">
                                            <figure>
                                                <img src="assets/images/client/1.jfif" alt="">
                                            </figure>
                                            <div class="client-details">
                                                <h5>Esther Hills </h5>
                                                <p>Lead Intranet Technician</p>
                                            </div>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonials-box">
                                        <div class="testimonial-details">
                                            <figure>
                                                <img src="assets/images/client/2.jfif" alt="">
                                            </figure>
                                            <div class="client-details">
                                                <h5>Esther Hills </h5>
                                                <p>Lead Intranet Technician</p>
                                            </div>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. </p>
                                    </div>
                                </div>
                                <div>
                                    <div class="testimonials-box">
                                        <div class="testimonial-details">
                                            <figure>
                                                <img src="assets/images/client/1.jfif" alt="">
                                            </figure>
                                            <div class="client-details">
                                                <h5>Esther Hills </h5>
                                                <p>Lead Intranet Technician</p>
                                            </div>
                                        </div>
                                        <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include './includes/footer.php'; ?>