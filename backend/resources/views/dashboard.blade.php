@include('parts._head')
    <form action="/logout" method="post">
        @csrf
        <button class="btn btn-sm btn-warning">
            Logout
        </button>
    </form>
    <h1>This is the dashboard</h1>
@include('parts._foot')