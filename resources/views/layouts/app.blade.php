@php
$active_page = $active_page ?? null;
@endphp
<!doctype html>
<html @php(language_attributes())>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="csrf-token" content="{{ csrf_token() }}" />
    @php(do_action('get_header'))
    @php(wp_head())
  </head>

  <body @php(body_class())>
    @php(wp_body_open())

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        {{ __('Skip to content') }}
      </a>

      @include('sections.header', ['active_page' => $active_page])

      <main id="main" class="main md:max-screen">
        @yield('content')
      </main>

      @include('sections.footer')
    </div>


    <script>
      window.addEventListener('load', () => {
        const _navBar = document.getElementById('nav-bar');
        const _navMenu = document.getElementById('nav-menu');
        const _firstMenu = document.getElementById('first-menu');
        const _openMenuButton = document.getElementById('menu-icon');
        const _closeMenuButton = document.getElementById('menu-icon-close');

        if (_navMenu) {
          if (_openMenuButton) {
            _openMenuButton.addEventListener('click', () => {
              if (_navBar) {
                _navBar.classList.add('show');
              }

              _navMenu.classList.remove('hidden');
              document.body.style.overflowY = 'hidden';
              if (_firstMenu) {
                _firstMenu.classList.add('hidden');
              }
            });
          }

          if (_closeMenuButton) {
            _closeMenuButton.addEventListener('click', () => {
              if (_firstMenu) {
                _firstMenu.classList.remove('hidden');
              }

              if (_navBar) {
                _navBar.classList.remove('show');
              }

              _navMenu.classList.add('hidden');
              document.body.style.overflowY = 'auto';
            });
          }
        }
      });
    </script>
    @hasSection('scripts')
      @yield('scripts')
    @endif

    @php(do_action('get_footer'))
    @php(wp_footer())
  </body>
</html>
