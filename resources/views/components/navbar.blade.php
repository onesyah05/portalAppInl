<nav class="navbar fixed-top" style="background-color: #ffffff;">
    <div class="container-fluid">
    <a class="navbar-brand"><h3>{{$title = isset($mainTitle) ? $mainTitle : 'Title Not Found 404'}}</h3></a>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <a href="/logout" class="btn btn-outline-danger">Logout</a>
    </div>
</nav>
