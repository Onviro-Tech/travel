<?php include './includes/header.php'; ?>
<main class="dest-page packages-page">
    <section class="inner-banner">
        <div class="container">
            <h1 class="text-center">Packages</h1>
        </div>
        <figure class="banner-img">
            <img src="assets/images/banner/package.jfif" alt="">
        </figure>
    </section>
    <section class=" section-break">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-5">
                    <div class="sidebar-filter" id="sidebar-filter">

                        <div class="dest-search">
                            <form action="">
                                <div class="form-group">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn" type="submit"><i
                                            class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="dest-filter">
                            <form action="">
                                <div class="filter-wrapper">
                                    <div class="form-dropdown">
                                        <div class="region-dropdown custom-dropdown">
                                            <button class="btn btn-secondary dropdown-toggle show" type="button"
                                                id="regionDropdown">
                                                Region
                                            </button>
                                            <ul class="dropdown-menu show" aria-labelledby="regionDropdown">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="All">
                                                        <label class="form-check-label" for="All">
                                                            All
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Kathmandu">
                                                        <label class="form-check-label" for="Kathmandu">
                                                            Kathmandu Valley
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Everest">
                                                        <label class="form-check-label" for="Everest">
                                                            Mount Everest Region
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Annapurna">
                                                        <label class="form-check-label" for="Annapurna">
                                                            Annapurna Region
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Chitwan">
                                                        <label class="form-check-label" for="Chitwan">
                                                            Chitwan National Park
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Lumbini">
                                                        <label class="form-check-label" for="Lumbini">
                                                            Lumbini
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Langtang">
                                                        <label class="form-check-label" for="Langtang">
                                                            Langtang Valley
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Rara">
                                                        <label class="form-check-label" for="Rara">
                                                            Rara Lake Region
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Bandipur">
                                                        <label class="form-check-label" for="Bandipur">
                                                            Bandipur
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Mustang">
                                                        <label class="form-check-label" for="Mustang">
                                                            Mustang Region
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Eastern">
                                                        <label class="form-check-label" for="Eastern">
                                                            Eastern Nepal
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Western">
                                                        <label class="form-check-label" for="Western">
                                                            Western Nepal
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Mid">
                                                        <label class="form-check-label" for="Mid">
                                                            Mid Western Nepal
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="activities-dropdown custom-dropdown">
                                            <button class="btn btn-secondary dropdown-toggle show" type="button"
                                                id="activitiesDropdown">
                                                Activities
                                            </button>
                                            <ul class="dropdown-menu show" aria-labelledby="activitiesDropdown">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="All">
                                                        <label class="form-check-label" for="All">
                                                            All
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="heli">
                                                        <label class="form-check-label" for="heli">
                                                            heli Tour
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Mountaineering">
                                                        <label class="form-check-label" for="Mountaineering">
                                                            Mountaineering
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Safari">
                                                        <label class="form-check-label" for="Safari">
                                                            Safari Tour
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Lake">
                                                        <label class="form-check-label" for="Lake">
                                                            Lake Treks
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Base">
                                                        <label class="form-check-label" for="Base">
                                                            Base Camp Treks
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Circuit">
                                                        <label class="form-check-label" for="Circuit">
                                                            Circuit Treks
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Beyond">
                                                        <label class="form-check-label" for="Beyond">
                                                            Beyond Nepal
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="budget-dropdown custom-dropdown">
                                            <button class="btn btn-secondary dropdown-toggle show" type="button"
                                                id="budgetDropdown">
                                                Budget
                                            </button>
                                            <ul class="dropdown-menu show" aria-labelledby="budgetDropdown">
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Budget">
                                                        <label class="form-check-label" for="Budget">
                                                            Budget-friendly
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Mid">
                                                        <label class="form-check-label" for="Mid">
                                                            Mid-range
                                                        </label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="Luxury">
                                                        <label class="form-check-label" for="Luxury">
                                                            Luxury
                                                        </label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-rating-days">
                                        <div class="form-ratings">
                                            <h6>Ratings</h6>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa-regular fa-star"></i></li>
                                            </ul>
                                            <button class="clear" type="button">Clear Fliter</button>
                                        </div>
                                        <div class="form-days">
                                            <h6>Days Range</h6>
                                            <div class="d-flex gap-4">
                                                <div class="form-group">
                                                    <label for="min_days" class="form-label">Min Days</label>
                                                    <input type="email" class="form-control" id="min_days">
                                                </div>
                                                <div class="form-group">
                                                    <label for="max_days" class="form-label">Max Days</label>
                                                    <input type="email" class="form-control" id="max_days">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-wrapper">
                                    <button type="submit" class="btn-blue">
                                        Submit
                                    </button>
                                    <button class="clear" type="button">Clear Fliter</button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-close  d-md-none " id="sidebar-close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                    </div>
                    <div class="sidebar-btn d-md-none " id="sidebar-btn">
                        <i class="fa-solid fa-filter"></i>Filter
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-7">
                    <div class="dest-list">
                        <div class="pagination-wrapper">
                            <p>Showing 9 out of 100 </p>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link page-prev page-disabled" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><img src="assets/images/svg/arrow-2.svg"
                                                    alt=""></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-next" href="#" aria-label="Next">
                                            <span aria-hidden="true"><img src="assets/images/svg/arrow-2.svg"
                                                    alt=""></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="dest-groups">
                            <div class="row gy-4">
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box packages-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <div class="dest-review-details">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <p>(1 review)</p>
                                                    </li>
                                                </ul>

                                            </div>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>
                                        <div class="dest-details">
                                            <ul>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                                                            fill="none">
                                                            <path
                                                                d="M10.9987 12.3748C11.6065 12.3748 12.1894 12.1334 12.6192 11.7036C13.0489 11.2739 13.2904 10.691 13.2904 10.0832C13.2904 9.47538 13.0489 8.89249 12.6192 8.46272C12.1894 8.03295 11.6065 7.7915 10.9987 7.7915C10.3909 7.7915 9.80802 8.03295 9.37824 8.46272C8.94847 8.89249 8.70703 9.47538 8.70703 10.0832C8.70703 10.691 8.94847 11.2739 9.37824 11.7036C9.80802 12.1334 10.3909 12.3748 10.9987 12.3748Z"
                                                                fill="var(--primary)" />
                                                            <path
                                                                d="M17.4832 3.14318H17.4841C21.0637 6.72277 21.0637 12.5271 17.4841 16.1067L12.5314 21.0594C12.1257 21.4647 11.5758 21.6924 11.0024 21.6924C10.429 21.6924 9.87902 21.4647 9.47337 21.0594L4.54629 16.1324L4.52062 16.1067C0.941042 12.5271 0.941042 6.72277 4.52062 3.14318C8.09929 -0.4364 13.9036 -0.4364 17.4832 3.14318ZM5.49229 4.11485C4.0313 5.57604 3.21054 7.55864 3.21054 9.62493C3.21054 11.6912 4.0313 13.6729 5.49229 15.1341L5.51338 15.1561L5.51521 15.1579L10.445 20.0878C10.5927 20.2352 10.7928 20.318 11.0015 20.318C11.2101 20.318 11.4102 20.2352 11.5579 20.0878L16.5106 15.1341C17.9544 13.6693 18.7604 11.6932 18.7531 9.63652C18.7457 7.57986 17.9254 5.60953 16.4712 4.15518C15.017 2.70083 13.0467 1.88043 10.9901 1.87288C8.9334 1.86532 6.95717 2.67122 5.49229 4.11485Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    Kilimanjaro, Tanzania
                                                </li>
                                                <li>
                                                    <div class="svg-wrapper">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 20"
                                                            fill="none">
                                                            <path
                                                                d="M9 11H14V16H9V11ZM16 2H15V0H13V2H5V0H3V2H2C0.9 2 0 2.9 0 4V18C0 19.1 0.9 20 2 20H16C17.1 20 18 19.1 18 18V4C18 2.9 17.1 2 16 2ZM16 4V6H2V4H16ZM2 18V8H16V18H2Z"
                                                                fill="var(--primary)" />
                                                        </svg>
                                                    </div>
                                                    7 Day
                                                </li>
                                                <li><div class="svg-wrapper">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12" fill="none">
                                                <path
                                                    d="M22 12H0L7.25 2.33L9.25 5L13 0L22 12ZM10.5 6.67L13 10H18L13 3.33L10.5 6.67ZM4 10H10.5L7.25 5.67L4 10Z"
                                                    fill="var(--primary)" />
                                            </svg>
                                        </div>
Trekking</li>
                                            </ul>
                                        </div>
                                        <div class="btn-wrapper">
                                            <a href="packages-details.php" class="btn-blue">Explore</a>
                                            <p class="price-details">
                                                <b>Rs.2,299</b>
                                                per person
                                            </p>
                                        </div>


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