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
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          @php
              print_r(auth()->user()->first_name);
          @endphp
        </a>
      </li>
      <li class="nav-item">
        <form action="/logout" method="post">
          @csrf
          <button class="btn btn-sm btn-warning">
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav>