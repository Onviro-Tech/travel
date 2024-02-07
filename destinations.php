<?php include './includes/header.php'; ?>
<main>
    <section class="inner-banner">
        <div class="container">
            <h1 class="text-center">Destinations</h1>
        </div>
    </section>
    <section class="dest-page section-break">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="dest-search">
                        <form action="">
                            <div class="form-group">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="dest-filter">
                        <form action="">
                            <div class="filter-wrapper">
                                <div class="form-dropdown">
                                    <div class="region-dropdown">
                                        <button class="btn btn-secondary dropdown-toggle show" type="button"
                                            id="regionDropdown" data-bs-toggle="dropdown" aria-expanded="false">
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
                                    <div class="activities-dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="activitiesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Activities
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="activitiesDropdown">
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
                                    <div class="budget-dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            id="budgetDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            Budget
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="budgetDropdown">
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
                                        <div class="d-flex">
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
                                    Search Results
                                </button>
                                <button class="clear" type="button">Clear Fliter</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-9">
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
                                <div class="col-md-4">
                                    <div class="dest-box trending-dest">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dest-box trending-dest">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="dest-box trending-dest">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
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
                                                <a href="#!" class="btn-blue">View Details</a>
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