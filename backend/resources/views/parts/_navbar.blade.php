<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/tickets">Tickets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users">Users</a>
      </li>
    </ul>
    
    <form action="/logout" class="d-flex" method="post">
      @csrf
      <ul class="navbar-nav d-flex">
        <li class="nav-item">
          <a class="nav-link disabled" href="#">
            @php
                print_r(auth()->user()->first_name);
            @endphp
          </a>
        </li>
      </ul>
      <button type="submit" class="btn btn-sm btn-warning" href="/logout">
        Logout
      </button>
    </form>
  </div>
</nav>