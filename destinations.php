<?php include './includes/header.php'; ?>
<main class="dest-page">
    <section class="inner-banner">
        <div class="container">
            <h1 class="text-center">Destinations</h1>
        </div>
        <figure class="banner-img">
            <img src="assets/images/banner/dest.jfif" alt="">
        </figure>
    </section>
    <section class="section-break">
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
                        <div class="sidebar-close d-md-none" id="sidebar-close">
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
                                            <span aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 41 41" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M13.8305 18.8313C13.5182 19.144 13.3428 19.5679 13.343 20.0099C13.3432 20.4518 13.5188 20.8756 13.8314 21.188L23.2632 30.6129C23.417 30.772 23.601 30.8989 23.8044 30.9862C24.0077 31.0734 24.2265 31.1193 24.4478 31.1212C24.6691 31.123 24.8885 31.0808 25.0933 30.9969C25.2981 30.913 25.4841 30.7892 25.6406 30.6326C25.797 30.4761 25.9207 30.29 26.0044 30.0851C26.0881 29.8802 26.1302 29.6608 26.1282 29.4395C26.1262 29.2182 26.0802 28.9995 25.9927 28.7962C25.9053 28.5929 25.7783 28.409 25.619 28.2553L17.366 20.0084L25.6129 11.7553C25.9164 11.4409 26.0842 11.0198 26.0803 10.5828C26.0763 10.1458 25.9009 9.72786 25.5917 9.41896C25.2826 9.11006 24.8645 8.93493 24.4275 8.93129C23.9905 8.92766 23.5696 9.09581 23.2554 9.39952L13.8305 18.8313Z"
                                                        fill="var(--primary)" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-next" href="#" aria-label="Next">
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 41" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M26.1851 18.8313C26.4974 19.144 26.6728 19.5679 26.6726 20.0099C26.6725 20.4518 26.4968 20.8756 26.1842 21.188L16.7524 30.6129C16.5986 30.772 16.4146 30.8989 16.2113 30.9862C16.0079 31.0734 15.7892 31.1193 15.5679 31.1212C15.3466 31.123 15.1271 31.0808 14.9223 30.9969C14.7175 30.913 14.5315 30.7892 14.3751 30.6326C14.2186 30.4761 14.0949 30.29 14.0112 30.0851C13.9275 29.8802 13.8854 29.6608 13.8874 29.4395C13.8894 29.2182 13.9355 28.9995 14.0229 28.7962C14.1103 28.5929 14.2374 28.409 14.3966 28.2553L22.6497 20.0084L14.4027 11.7553C14.0992 11.4409 13.9314 11.0198 13.9354 10.5828C13.9393 10.1458 14.1147 9.72786 14.4239 9.41896C14.733 9.11006 15.1511 8.93493 15.5881 8.93129C16.0251 8.92766 16.446 9.09581 16.7602 9.39952L26.1851 18.8313Z"
                                                        fill="var(--primary)" />
                                                </svg>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="dest-groups">
                            <div class="row gy-4">
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>

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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/pokhara.jfif" alt="">
                                            </figure>
                                            <h6>Pokhara</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box trending-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/mount.jfif" alt="">
                                            </figure>
                                            <h6>Mount annapurna base camp</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>

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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/pokhara.jfif" alt="">
                                            </figure>
                                            <h6>Pokhara</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/mount.jfif" alt="">
                                            </figure>
                                            <h6>Mount annapurna base camp</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box ">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/everest.jfif" alt="">
                                            </figure>
                                            <h6>Mount Everest Base Camp</h6>
                                        </div>

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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/pokhara.jfif" alt="">
                                            </figure>
                                            <h6>Pokhara</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-12 ">
                                    <div class="dest-box">
                                        <div class="dest-info">
                                            <figure>
                                                <img src="assets/images/destination/mount.jfif" alt="">
                                            </figure>
                                            <h6>Mount annapurna base camp</h6>
                                        </div>
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
                                                <li>
                                                    <p>(1 review)</p>
                                                </li>
                                            </ul>
                                            <div class="btn-wrapper">
                                                <a href="destinations-details.php" class="btn-blue">View Details</a>
                                            </div>
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