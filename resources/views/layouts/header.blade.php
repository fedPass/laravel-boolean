<header class="fixed-top">
{{-- <header> --}}
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="/">
          <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Careers"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-boolean nav-item {{ Route::currentRouteName() === 'home' ? 'active':''}}" href="/">Home <span class="sr-only">(current)</span></a>
          <a class="nav-boolean nav-item" href="#">Corso</a>
          <a class="nav-boolean nav-item" href="#">Dopo il corso</a>
          <a class="nav-boolean nav-item" href="#">Lezione gratuita</a>
          <a class="nav-boolean nav-item btn btn-success" href="#">Candidati ora</a>
        </div>
      </div>
    </nav>
</header>
