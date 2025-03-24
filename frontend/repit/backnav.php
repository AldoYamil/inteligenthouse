<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="../../css/stylecss" rel="stylesheet">
    <script src="../../js/theme_swicher.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary" class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Back</a>
        </li>
      </ul>
      <button class="btn btn-link nav-link ms-2" id="theme-switcher" aria-label="Toggle Theme">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-sun icon-tabler icon-tabler-sun" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <circle cx="12" cy="12" r="4" />
                <path d="M3 12h1m16 0h1" />
                <path d="M12 3v1m0 16v1" />
                <path d="M5.6 5.6l.7 .7m12.1 12.1l.7 .7" />
                <path d="M18.4 5.6l-.7 .7m-12.1 12.1l-.7 .7" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon-moon icon-tabler icon-tabler-moon d-none" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
            </svg>
        </button>
        <script>
            // Apply saved theme immediately
            const savedTheme = localStorage.getItem('theme') || 
                              (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.setAttribute('data-bs-theme', savedTheme);
        </script>
    </div>
  </div>
</nav>