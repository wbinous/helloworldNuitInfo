<header class="container">
  <nav class="navbar" role="navigation" aria-label="main navigation" height="150">
    <div class="navbar-brand">
      <a class="navbar-item">
        <img src="{{ asset('image/solidarite.png') }}" width="150" height="150" style="max-height:inherit;">
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="/">
          Accueil
        </a>

        <a class="navbar-item">
          Annonce
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Article
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item" href="/article/associations">
              Associations
            </a>
            <a class="navbar-item" href="/article/alimentaire">
              Alimentaire
            </a>
            <a class="navbar-item" href="/article/finance">
              Finance
            </a>
            <a class="navbar-item" href="/article/logement">
              Logement
            </a>
            <a class="navbar-item" href="/article/transport">
              Transport
            </a>
            <a class="navbar-item" href="/article/sante">
              Santé
            </a>
            <a class="navbar-item" href="/article/loisir">
              Loisir
            </a>
          </div>
        </div>
        <a class="navbar-item">
          Forum
        </a>
        <a class="navbar-item">
          Contact
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light">
              Log in
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
