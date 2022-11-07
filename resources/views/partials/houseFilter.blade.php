<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid mx-auto">
            <a class="navbar-brand" href="{{ route('land.home') }}">All Posts</a>
            <a class="navbar-brand" href="#">Filters</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('hundred.h') }}">1 - 100,000</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('three.hundred.h') }}">100,000 - 300,000</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('seven.hundred.h') }}">300,000 - 750,000</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('one.mill.h') }}">750,000 - 1,000,000</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('two.mill.h') }}">1,000,000 - 1,500,000</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('two.mill.h') }}">1,500,000 - 2,000,000</a>
                    </li>
                    @can('create post')
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('my.posts.h') }}">My Posts</a>
                        </li>
                    @endcan
                </ul>
            </div>
        </div>
    </nav>
</div>
