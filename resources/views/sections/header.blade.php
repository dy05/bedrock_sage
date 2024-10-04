@php
  $active_page = $active_page ?? null;
@endphp
{{--<header class="banner">--}}
{{--  <a class="brand" href="{{ home_url('/') }}">--}}
{{--    {!! $siteName !!}--}}
{{--  </a>--}}

{{--  @if (has_nav_menu('primary_navigation'))--}}
{{--    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">--}}
{{--      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}--}}
{{--    </nav>--}}
{{--  @endif--}}
{{--</header>--}}

<header class="pb-[48px]">
  <nav class="p-[18px]">
    <div class="grid items-center md:max-screen">
      <div class="col-span-6">
        <a href="/">
          <x-logo />
        </a>
      </div>

      <div class="col-span-6 flex justify-end">
        <button type="button" class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none">
          <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect id="Rectangle_30" data-name="Rectangle 30" width="32" height="32" fill="#fff" opacity="0"/>
            <g id="Group_2929" data-name="Group 2929" transform="translate(2.667 14.667)">
              <path id="Path_221" data-name="Path 221"
                    d="M27.333,13.667h-24a1.333,1.333,0,0,1,0-2.667h24a1.333,1.333,0,1,1,0,2.667Z"
                    transform="translate(-2 -11)" fill="#fff"/>
            </g>
            <g id="Group_2930" data-name="Group 2930" transform="translate(2.667 6.667)">
              <path id="Path_222" data-name="Path 222"
                    d="M27.333,7.667h-24A1.333,1.333,0,0,1,3.333,5h24a1.333,1.333,0,1,1,0,2.667Z"
                    transform="translate(-2 -5)" fill="#fff"/>
            </g>
            <g id="Group_2931" data-name="Group 2931" transform="translate(2.667 22.667)">
              <path id="Path_223" data-name="Path 223"
                    d="M27.333,19.667h-24a1.333,1.333,0,1,1,0-2.667h24a1.333,1.333,0,1,1,0,2.667Z"
                    transform="translate(-2 -17)" fill="#fff"/>
            </g>
          </svg>
        </button>
        <button type="button" class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none hidden">
          <svg id="x-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect id="Rectangle_75" data-name="Rectangle 75" width="32" height="32" fill="#fff" opacity="0"/>
            <path id="Path_445" data-name="Path 445"
                  d="M16.219,14.333l7.057-7.057a1.333,1.333,0,0,0-1.885-1.885l-7.057,7.057L7.276,5.391A1.333,1.333,0,0,0,5.391,7.276l7.057,7.057L5.391,21.391a1.333,1.333,0,1,0,1.885,1.885l7.057-7.057,7.057,7.057a1.333,1.333,0,0,0,1.885-1.885Z"
                  transform="translate(1.667 1.667)" fill="#fff"/>
          </svg>
        </button>
      </div>
    </div>

    <div id="nav-menu" class="hidden">
      <div class="md:max-screen">
        <div>
          <h3>
            Création de site internet
            <x-arrow-right/>
          </h3>
          <div>
            <div>
              <a href="#">
                Sodales gravida nunc
              </a>
              <a href="#">
                Amet imperdiet
              </a>
              <a href="#">
                Ultrices vestibulum
              </a>
            </div>
            <div>
              <a href="#">
                Etiam magna vestibulum
              </a>
              <a href="#">
                Fringilla gravida
              </a>
            </div>
          </div>
        </div>
        <div>
          <h3>
            Marketing digital
            <x-arrow-right/>
          </h3>
          <div>
            <div>
              <a href="#">
                Dapibus est arcu
              </a>
              <a href="#">
                Amet auctor
              </a>
              <a href="#">
                Praesent condimentum
              </a>
            </div>
            <div>
              <a href="#">
                Velit ornare auctor
              </a>
              <a href="#">
                Nisl ipsum mauris
              </a>
              <a href="#">
                Ipsum dapibus rhoncus
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  @if($active_page === 'home')
    <div class="px-[18px] md:max-screen">
      <div class="my-[100px] md:grid">
        <div class="md:col-span-6">
          <h1 class="font-light">
            Test d’intégration d’un site internet pour un
            <br/>
            <span class="font-bold">
          <span>poste de développeur</span>
          <span class="text-primary -ml-2">.</span>
        </span>
          </h1>

          <div class="leading-2 opacity-80 mt-8">
            Réalisez ce test d’intégration web pour évaluer vos compétences et tentez de rejoindre l’équipe Web Idea !
          </div>
        </div>
      </div>

      <div class="hero-buttons">
        <a href="#section-1" class="text-white flex items-center gap-8 text-sm">
          <span class="ruler"></span>
          Faites défiler
        </a>
      </div>
    </div>
  @endif
</header>
