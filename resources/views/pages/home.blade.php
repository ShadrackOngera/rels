@extends('layouts.app')
@section('content')
    <div id="">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-4 d-grid">
                    <button onclick="darkTheme()" class="btn btn-dark">
                        Dark theme
                    </button>
                </div>
                <div class="col-sm-4 d-grid">
                    <button onclick="lightTheme()" class="btn btn-outline-secondary text-dark">
                        <a href="#" class="nav-link">
                            Light Theme
                        </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/pics/slider.jpg') }}" class="d-block w-100 rounded-3" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/pics/slider-two.jpg') }}" class="d-block w-100 rounded-4" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/pics/slider-three.jpg') }}" class="d-block w-100 rounded-5" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="py-5">`</div>
        <div>
            <div class="container">
                <h2 class="text-center">{{ config('app.name') }}</h2>
                <p class="text-center">We care about your dreams Lorem ipsum dolor sit amet.</p>
            </div>
        </div>

        <div class="py-5">`</div>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 class="fw-bold">Why Us</h2>
                        <p>
                            Land use is central to addressing sustainability issues, including biodiversity conservation, climate change, food security,
                            poverty alleviation, and sustainable energy. In this paper, we synthesize knowledge accumulated in land system science, the
                            integrated study of terrestrial social-ecological systems, into 10 hard truths that have strong, general, empirical support.
                            These facts help to explain the challenges of achieving sustainability in land use and thus also point toward solutions.
                        </p>
                        <p>
                            When looking at land, it is always good to get your builder to have a look, compare it to others for a square metre rate, start by assuming the block is flat and square, then subtract from there for things like slope, trees, irregular shapes etc. This will help you determine a fair market value.
                        </p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('images/pics/bare-land.jpg') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <div class="py-5"></div>

                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{ asset('images/pics/snow-bare-land.jpg') }}" alt="..." class="img-fluid rounded-3">
                    </div>
                    <div class="col-sm-8 align-self-center">
                        <h2 class="text-center fw-bold">Why Buy With us</h2>
                        <p>
                            Before you decide to buy any piece of land, it is important to know the intended purpose of the land i.e. if it is for agricultural, residential, commercial or industrial purposes. The seller should have this information.
                        </p>
                        <p>
                            Another crucial aspect to look at before buying vacant land is the presence of utilities such as water and electricity or lack thereof. In some areas, the seller has already installed these on the property.
                        </p>
                        <p>
                            You could also add these for yourself at a cost, like digging a borehole. Because most people buy land to build on, knowing this information will help you include some of these costs in your budget for better planning.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5"></div>

        <div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 mb-4 mb-sm-0">
                        <h2 class="fw-bold mb-5">How To Get Started</h2>

                        <div class="d-flex align-items-center mb-4">
                            <div class="pe-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-node-plus-fill" viewBox="0 0 16 16">
                                    <path d="M11 13a5 5 0 1 0-4.975-5.5H4A1.5 1.5 0 0 0 2.5 6h-1A1.5 1.5 0 0 0 0 7.5v1A1.5 1.5 0 0 0 1.5 10h1A1.5 1.5 0 0 0 4 8.5h2.025A5 5 0 0 0 11 13zm.5-7.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-bold fs-5 mb-2">Create an account</h6>
                                <p class="mb-0">
                                    Easily create a <span class="fst-italic">{{ config('app.name') }}</span> account on the <a href="{{ route('register') }}">Sign Up</a> page
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="pe-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-bold fs-5 mb-2">Search For Offers</h6>
                                <p class="">
                                    Search For Land Offers on the <a href="{{ route('land.home') }}">Land Offers Page</a>
                                </p>
                                <p class="mb-0">
                                    Search For House Offers on the <a href="{{ route('housePublish.home') }}">House Offers Page</a>
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="pe-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-primary bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h6 class="fw-bold fs-5 mb-2">Chat With the Sellers for Clarity on any Info</h6>
                                <p class="mb-0">
                                    The Chat is Private Between The Seller and the buyer.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <img src="{{ asset('images/pics/math.jpg') }}" class="img-fluid rounded-2 shadow" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5"></div>
        <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6 mb-5 mb-sm-0">
                        <h2 class="fw-bold mb-4">Testimonials</h2>
                        <p class="mb-4">
                            We have seen many people asking how trustful is <span class="fst-italic">{{ config('app.name') }}</span> and is it affordable? Therefore we have created this section by showing success stories from REAL <span class="fst-italic">{{ config('app.name') }}</span> users.
                        </p>

                        <div class="d-grid">
                            <a  href="{{ route('land.home') }}" class="btn btn-primary">
                                <span class="me-2">View Land Offers</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card shadow mb-3">
                            <div class="card-body d-flex p-4">
                                <div class="">
                                    <p>
                                        “I've been on <span class="fst-italic">{{ config('app.name') }}</span> for over a year and done very well. Easy to use website, best rates for Land, great support staff, and plenty of trading partners. You can't go wrong.”
                                    </p>
                                    <h6 class="fw-bold mb-0">Johnson W.</h6>
                                    <p class="mb-0">
                                        <small>MAY 1, 2022</small>
                                    </p>
                                </div>

                                <div class="d-flex flex-column justify-content-between">
                                    <div class="text-end">
                                    <span class="badge badge-custom badge-success">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="14"
                                            height="14"
                                            fill="currentColor"
                                            class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                        </svg>
                                        <span>5</span>
                                    </span>
                                    </div>

                                    <img src="{{ asset('images/pics/smile.jpg') }}" alt="..." width="80" height="80" class="rounded-5">
                                </div>

                            </div>
                        </div>

                        <div class="card shadow mb-3" id="back">
                            <div class="card-body d-flex p-4">
                                <div class="">
                                    <p>
                                        “Being a Land vender has been great. Support is always responsive and helpful, and best of all I've been able to help many new Land Buyers Land. It`s always rewarding to be the first on-ramp to the currency of the future.”
                                    </p>
                                    <h6 class="fw-bold mb-0">Mary S.</h6>
                                    <p class="mb-0">
                                        <small>DEC 12, 2021</small>
                                    </p>
                                </div>

                                <div class="d-flex flex-column justify-content-between">
                                    <div class="text-end">
                                    <span class="badge badge-custom badge-success">
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="14"
                                            height="14"
                                            fill="currentColor"
                                            class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                        </svg>
                                        <span>5</span>
                                    </span>
                                    </div>

                                    <img src="{{ asset('images/pics/janes.png') }}" alt="..." width="80" height="80" class=" ">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5"></div>

        <div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 mb-5 mb-sm-0">
                        <h2 class="fw-bold mb-4">Want To Become a Seller?</h2>
                        <p class="mb-4">
                            Want to sell a piece or whole of your land for whatever reason? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                        <p>
                            {{ config('app.name') }} makes sure you get Legit buyers and all lands sold are sold and proof of title deed is provided. Our legal team is fully responsible
                            for all lands sold on our website.
                        </p>
                        <p>
                            Fell free to leave us a message for any concerns :)
                        </p>

                        <div class="d-grid">
                            <a  href="{{ route('contact') }}" class="btn btn-primary">
                                <span class="me-2">Leave a Message</span>

                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-5"></div>

        <div class="end-page text-white py-5 mb-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 text-center">
                        <h2 class="mb-4 fw-bold">Start Buying land on {{ config('app.name') }}</h2>

                        <p class="mb-5">
                            Dive right in without the commission fees
                        </p>

                        <a href="{{ route('land.home') }}" class="btn btn-outline-light me-3">Browse Land Offers</a>
                        <a href="{{ route('housePublish.home') }}" class="btn btn-outline-light">Browse Housing Offers</a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-0">
    </div>
    <script>
        function lightTheme() {
            location.reload();
        }

        function darkTheme() {

            document.getElementById("back").style.color = "white";
            document.getElementById("back").style.backgroundColor = "black";
            // document.getElementById('back').innerHTML = document. = "red";
            // x = document.getElementById('back').innerHTML = document.write('Hello');
        }
    </script>
@endsection
