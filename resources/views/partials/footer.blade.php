<div class="bg-indigo">
    <div class="py-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 align-self-center">
                <div class="">
                    <h5 class="text-white">Join Our Mailing List</h5>
                    <div class="input-group mb-3">
                        <div class="w-100">
                            <form action="{{ route('store.mail') }}" method="POST">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username" name="email" aria-describedby="button-addon2">
                                    <button class="btn btn-outline-secondary text-white" type="submit" id="button-addon2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">
                                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 fw-bold text-white text-center">
                <h4>Pages</h4>
                <ul class="navbar-nav">
                    <li class="">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                    <li class="">
                        <a href="{{ route('housePublish.home') }}" class="nav-link">View House Offers</a>
                    </li>
                    <li class="">
                        <a href="{{ route('land.home') }}" class="nav-link">View Land Offers</a>
                    </li>
                    @can('create post')
                        <li>
                            <a href="/admin/create" class="nav-link">Post Land Offer</a>
                        </li>
                    @endcan
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 align-self-center text-white fw-bold text-center">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'REAL ESTATE LISTING SYSTEM') }}
                </a>
            </div>
        </div>
    </div>
    <div class="py-3"></div>
</div>
