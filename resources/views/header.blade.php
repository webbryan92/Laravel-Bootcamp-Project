<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-bottom: 1em">
    <a class="navbar-brand" href="/">My Blog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/blogposts">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('blogposts.blogpost', 'General') }}">General</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('blogposts.blogpost', 'Gunpla') }}">Gunpla</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('blogposts.blogpost', 'Games') }}">Games</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/blogposts/newblog">New Blogpost</a>
            </li>
        </ul>
        <span class="navbar-text" align="right">
                Under Construction
            </span>
    </div>
</nav>