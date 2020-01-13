<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <a class="navbar-brand" href="/">{{ config("app.name", "LARAVEL-BLOG") }}</a>
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/services">Services</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/about">About</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="/categories/create">Create Category</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts/create">Create Post</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/posts">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/logout">Logout</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/users/login">Login</a>
      </li>
  </ul>
</nav>
