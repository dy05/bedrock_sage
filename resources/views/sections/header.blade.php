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

<header class="pb-[48px] z-10">
  <nav id="nav-bar">
    <div class="grid items-center md:max-screen p-[18px]" id="first-menu">
      <div class="col-span-6">
        <a href="/">
           <x-logo />
        </a>
      </div>

      <div class="col-span-6 flex justify-end">
        <button id="menu-icon" type="button"
                class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
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
      </div>
    </div>

    <div id="nav-menu" class="relative bg-white text-gray z-20 hidden">
      <div class="fixed top-0 right-0 left-0">
        <div class="md:max-screen pt-5 pb-5">
          <div class="grid items-center px-[18px] md:px-0">
            <div class="col-span-6">
              <a href="/">
                @php
                  $asset = \Roots\asset('images/logo-color.png');
                @endphp
                <img src="{{ $asset->uri() }}" alt="image" class="object-cover logo" />
              </a>
            </div>

            <div class="col-span-6 flex justify-end pr-4">
              <button id="menu-icon-close" type="button"
                      class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                  <path id="Path_445" data-name="Path 445"
                        d="M16.219,14.333l7.057-7.057a1.333,1.333,0,0,0-1.885-1.885l-7.057,7.057L7.276,5.391A1.333,1.333,0,0,0,5.391,7.276l7.057,7.057L5.391,21.391a1.333,1.333,0,1,0,1.885,1.885l7.057-7.057,7.057,7.057a1.333,1.333,0,0,0,1.885-1.885Z"
                        fill="currentColor"/>
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="md:max-screen px-[18px] py-8 md:py-16 grid border-t border-gray">
          <div class="col-span-12 md:col-span-5 grid">
            <a class="col-span-12 text-lg text-base" href="#">
              Création de site internet
              <x-arrow-right class="text-secondary ml-3"/>
            </a>
            <div class="col-span-12 grid !text-base !font-light text-md mt-4">
              <div class="col-span-12 md:col-span-6">
                <ul class="list-none list-leading-4">
                  <li>
                    <a href="#">
                      Sodales gravida nunc
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Amet imperdiet
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Ultrices vestibulum
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-12 md:col-span-6 mt-5 md:mt-0">
                <ul class="list-none list-leading-4">
                  <li>
                    <a href="#">
                      Etiam magna vestibulum
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Fringilla gravida
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-span-12 md:col-span-5 grid mt-8 md:mt-0">
            <a class="col-span-12 text-base text-lg" href="#">
              Marketing digital
              <x-arrow-right class="text-secondary ml-3"/>
            </a>
            <div class="!text-base col-span-12 grid font-light text-md mt-4">
              <div class="col-span-12 md:col-span-6">
                <ul class="list-none list-leading-4">
                  <li>
                    <a href="#">
                      Dapibus est arcu
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Amet auctor
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Praesent condimentum
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-span-12 md:col-span-6 mt-5 md:mt-0">
                <ul class="list-none list-leading-4">
                  <li>
                    <a href="#">
                      Velit ornare auctor
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Nisl ipsum mauris
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      Ipsum dapibus rhoncus
                    </a>
                  </li>
                </ul>
              </div>
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

          <div class="leading-2 opacity-80 mt-8 md:pr-16">
            <div class="md:pr-16">
              Réalisez ce test d’intégration web pour évaluer vos compétences et tentez de rejoindre l’équipe
              <span class="whitespace-nowrap">Web Idea !</span>
            </div>
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
