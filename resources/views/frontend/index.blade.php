<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your Website</title>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Gotham:wght@300;400;500;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="{{ url('css/frontend/style.css') }}">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
        <!-- Left Side Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ url('/storage/' . $logo->logo_path) }}" alt="Logo" height="30">
        </a>

        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Centered Horizontal List -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">COMPARISON</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">BOND</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">TESTIMONIALS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>

        <!-- Right Side Button with Mobile Number -->
        <div class="d-flex align-items-center">
            <button class="btn mr-2 submit-btn-color submit-btn-brd-color">Call us: +971 12 345 6789</button>
        </div>
    </nav>

    <div>
        <!-- Section 1 -->
        <section class="container mt-0 mb-0" id="section1">
            <div class="row">
                <!-- Left Text Column -->
                <div class="col-md-6 pt-5 pb-5 pr-3">
                    <div class="mb-3">
                        <h1 class="h1-font-size f-weight-600">Fixed Rate Bonds</h1>
                        <h1 class="sec-1-h2 h1-font-size">With Risk-Free Guranteed Returns</h1>
                    </div>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur <br>adipiscing elit, sed do eiusmod tempor</p>
                    <button class="btn submit-btn-color submit-btn-brd-color">Fill Out a Questionare</button>
                </div>
                <!-- Right Images Column -->
                <div class="col-md-6 text-right banner-image">
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image 1" class="img-fluid border-rounded-bottom">
                        </div>
                        <div class="col-md-6 mb-2">
                            <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image 2" class="img-fluid larger-height border-rounded-bottom">
                        </div>
                        <div class="col-md-6 mb-2">
                            <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image 3" class="img-fluid larger-height img-3-margin-top border-rounded-top">
                        </div>
                        <div class="col-md-6 mb-2">
                            <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image 4" class="img-fluid border-rounded-top">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Section 2: Our Properties -->
    <div id="sec2" class="pb-5">
        <section class="container pt-5 mt-5" >
            <div class="get-in-touch-container">
                <h6 class="font-clr-b3">BOOK NOW</h6>
                <hr class="small-hr">
            </div>
            <h1 class="mb-4 f-weight-200">Our Properties</h1>
            <p class="mb-0"><small>Choose from our spectacular range of iconic properties in Dubai starting from AED 1,000,000 only.</small></p>
            <p class="font-clr-b3 mb-5"><small>20% Guaranteed Rental Income Per Annum*</small></p>
            <div class="row">
                @foreach($properties as $property)
                <div class="col-md-4">
                    <div class="card border-rounded">
                        <div id="property1Carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner border-rounded-inner">
                                <!-- Image 1 -->
                                <div class="carousel-item active">
                                    <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Image 1">
                                </div>
                                <!-- Image 2 -->
                                <div class="carousel-item">
                                    <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Image 2">
                                </div>
                                <!-- Image 3 -->
                                <div class="carousel-item">
                                    <img src="https://images.pexels.com/photos/145683/pexels-photo-145683.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100" alt="Image 3">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5>{{ $property->name }}</h5>
                            <p><small>{{ $property->description }}</small></p>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="price-color f-weight-600">AED {{ $property->amount }}</h5>
                                </div>
                                <div class="col-md-6 text-right">
                                    <h6>On-plan</h4>
                                </div>
                            </div>
                            <div class="row pt-2 pb-2 pr-4 pl-4 sec-back-color auto-margin border-rounded">
                                <div class="col-md-6">
                                    <h6 class="f-weight-600">Quarterly</h6>
                                    <h6 class="g-font-color">paid returns</h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="f-weight-600">20%</h6>
                                    <h6 class="g-font-color">annual yield</h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 d-flex justify-content-center mt-2">
                                    <button class="d-flex align-items-center btn submit-btn-color submit-btn-brd-color e-font-size pl-4 pr-4 pt-2 pb-2">Enquire Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Load More Section -->
            <div class="row">
                <div class="col-md-12 text-center mt-3">
                    {{-- <button id="loadMoreBtn" class="btn btn-primary" data-page="{{ $currentPage + 1 }}">Load More</button> --}}

                    <button id="loadMoreBtn" class="btn down-arrow-btn f-weight-600">
                        Load More <i class="fas fa-chevron-down ml-2"></i>
                    </button>
                </div>
            </div>
        </section>
    </div>

    <div>
        <!-- Section 3: Contact -->
        <section class="container mt-5" id="contact">
            <div class="get-in-touch-container">
                <h6 class="font-clr-b3">GET IN TOUCH</h6>
                <hr class="small-hr">
            </div>
            <h1 class="mb-5 f-weight-200">Interested To Know More?</h1>
        
            <form id="contactForm" action="" method="post">
                @csrf
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control sec-back-color" id="name" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control sec-back-color" id="email" name="email" required>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select class="custom-select  sec-back-color" id="countryCode" name="countryCode" required>
                                        <option value="+1">+1 (USA)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <input type="text" class="form-control sec-back-color" id="phone" name="phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="investmentAmount">Investment Amount</label>
                            <div class="input-group">
                                <input type="text" class="form-control sec-back-color" id="investmentAmount" name="investmentAmount" required>
                                <div class="input-group-append">
                                    <select class="custom-select sec-back-color" id="currency" name="currency" required>
                                        <option value="usd">USD</option>
                                        <option value="eur">EUR</option>
                                        <option value="gbp">GBP</option>
                                        <!-- Add more currency options as needed -->
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control sec-back-color" id="message" name="message" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
        
                <!-- Submit Button -->
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <button type="submit" class="btn submit-btn-color submit-btn-brd-color btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </section>
    </div>

    <!-- Bootstrap JS and Popper.js CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        // JavaScript to change the carousel images automatically
        $(document).ready(function() {
            setInterval(function() {
                $('#property1Carousel').carousel('next');
            }, 3000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $('#property2Carousel').carousel('next');
            }, 3000);
        });

        $(document).ready(function() {
            setInterval(function() {
                $('#property3Carousel').carousel('next');
            }, 3000);
        });

        // $(document).ready(function () {
        //     $('#loadMoreBtn').click(function () {
        //         var currentPage = $(this).data('page');

        //         // Assuming you have a Laravel route to fetch the next set of properties
        //         var url = '/get-more-properties?page=' + currentPage;

        //         $.ajax({
        //             url: url,
        //             type: 'GET',
        //             success: function (data) {
        //                 // Append new cards to the container
        //                 $('#propertyContainer').append(data.html);

        //                 // Update the "Load More" button's data-page attribute
        //                 $('#loadMoreBtn').data('page', data.nextPage);

        //                 // Hide the "Load More" button if there are no more pages
        //                 if (!data.hasPages) {
        //                     $('#loadMoreBtn').hide();
        //                 }
        //             }
        //         });
        //     });
        // });

        $(document).ready(function () {
            $('#countryCode').select2();
            $('#currency').select2();
        });
    </script>
</body>

</html>
