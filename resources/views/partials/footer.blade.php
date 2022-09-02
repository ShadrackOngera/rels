<div class="bg-indigo">
    <div class="py-4"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="align-items-center">
                    <h5>Join Our Mailing List</h5>
                    <div class="input-group mb-3">
                        <form action="{{ route('store.mail') }}" method="POST">
                            @csrf
                            <input type="email" class="form-control" placeholder="Email" aria-label="Recipient's username" name="email" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 fw-bold text-muted">
                <h4>Pages</h4>
                <ul class="navbar-nav">
                    <li class="">
                        <a href="{{ route('home') }}" class="nav-link">View Land Offers</a>
                    </li>
                    <li>
                        <a href="{{ route('create.post') }}" class="nav-link">Post Land Offer</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="nav-link">About Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                Last column
            </div>
        </div>
    </div>
    <div class="py-3"></div>
</div>
