<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>One</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                    One
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/tickets">Tickets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/departments">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/jobtitles">Job Title</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">{{auth()->user()->first_name}}</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <a class="nav-link">
                                           <span class="text-center text-xs">
                                              <button class="btn btn-sm btn-danger text-light"><i class="bi bi-box-arrow-right"></i> &nbsp; Sign Out</button>
                                           </span>
                                        </a>
                                     </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-2 col-lg-2 bg-dark pt-5">
                <ul class="nav flex-column mt-5">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets">All Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/mytickets">My Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/newtickets">New Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/opentickets">Open Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/resolvedtickets">Resolved Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/closedtickets">Closed Tickets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/cancelledtickets">Cancelled Tickets</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <main style="height: 100vh;">
                    @yield('content')
                </main>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 bg-dark pt-5">
                <ul class="nav flex-column mt-5">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/tickets/createticket">Create Ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/users/newuser">Create User</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>