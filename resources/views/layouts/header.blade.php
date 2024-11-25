<header class="navigation sticky-top bg-white">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/skin1004logo.png') }}" alt="Vex" width="100px">
            </a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="collapse" data-target="#navigation"
                    aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto mr-n0 mr-md-n3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('blog') }}">Blog</a>
                    </li>
                    <!-- More navigation items here -->
                </ul>
            </div>
        </nav>
    </div>
</header>
