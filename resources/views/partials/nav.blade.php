<nav class="navbar navbar-dark bg-dark navbar-custom d-flex justify-content-between align-items-center px-3">
  <a class="navbar-brand text-white mb-0" href="#">SocialNetwork</a>

  <ul class="navbar-nav flex-row gap-3">
    <li class="nav-item">
      <a class="nav-link text-white p-0" href="{{ route('homepage') }}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-white p-0" href="{{ route('profiles.index') }}">Profiles</a>
    </li>
   
    <li class="nav-item">
      <a class="nav-link text-white p-0" href="{{ route('settings.index') }}">Settings</a>
    </li>
  </ul>
</nav>

<style>
  .navbar-custom {
    font-size: 1rem;
    padding: 0.5rem 1rem;
  }

  @media (max-width: 768px) {
    .navbar-custom {
      font-size: 0.85rem;
    }

    .navbar-brand {
      font-size: 1rem;
    }

    .navbar-nav {
      gap: 0.5rem;
    }
  }

  @media (max-width: 480px) {
    .navbar-custom {
      font-size: 0.75rem;
      flex-direction: column;
      align-items: flex-start;
    }

    .navbar-nav {
      flex-direction: column;
      align-items: flex-start;
      width: 100%;
    }

    .nav-item {
      width: 100%;
    }

    .nav-link {
      width: 100%;
      padding: 0.3rem 0;
    }
  }
</style>
