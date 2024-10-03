<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <style>
    @font-face {
      font-family: 'Rubik';
      font-style: normal;
      font-weight: 800;
      src: url("@asset('/fonts/Rubik-Bold.ttf')") format('truetype');
    }

    @font-face {
      font-family: 'Rubik';
      font-style: normal;
      font-weight: 500;
      src: url("@asset('/fonts/Rubik-Regular.ttf')") format('truetype');
    }

    @font-face {
      font-family: 'Rubik';
      font-style: normal;
      font-weight: 400;
      src: url("@asset('/fonts/Rubik-Light.ttf')") format('truetype');
    }

    :root {
      --default-color: #49545D;
      --base-color: #7F878D;
      --white-color: #FFFFFF;
      --gray-white-color: #EEEEEE;
      --gray-color: #DDDDDD;
      --gray-button-color: #707070;
      --primary-color: #64CEFF;
      --secondary-color: #009DEA;
      --fore-color: #006FB7;
      --error-color: #F44D2F;
    }

    * {
      box-sizing: border-box;
      font-weight: 500;
      font-family: Rubik, Helvetica, Arial, sans-serif;
    }

    input, select, textarea {
      border: 1px solid var(--gray-color, #DDDDDD);
    }

    .text-xs {
      font-size: 14px !important;
    }

    .font-light {
      font-weight: 400 !important;
    }

    .font-light * {
      font-weight: 400;
    }

    .font-bold {
      font-weight: 800 !important;
    }

    .font-bold * {
      font-weight: 800;
    }

    .btn {
      cursor: pointer;
      font-weight: 800;
      border-radius: 3px;
      padding: 20px 40px;
      font-size: 18px;
      border: none;
      color: var(--white-color, #FFFFFF);
      background-color: var(--secondary-color, #009DEA);
      /*background-color: var(--primary-color, #64CEFF);*/
    }

    .btn:disabled {
      background-color: var(--gray-white-color, #EEEEEE);
      color: var(--default-color, #49545D);
      cursor: not-allowed;
    }

    /*.btn:focus {*/
    /*  background-color: var(--secondary-color, #009DEA);*/
    /*}*/

    .btn:hover {
      background-color: var(--fore-color, #006FB7);
    }

    .btn.btn-secondary:hover {
      background-color: var(--gray-button-color, #707070) !important;
    }

    .btn.btn-secondary:disabled {
      background-color: var(--gray-white-color, #EEEEEE);
      color: var(--default-color, #49545D);
      cursor: not-allowed;
    }

    /*.btn.btn-secondary:focus {*/
    /*  background-color: var(--secondary-color, #009DEA);*/
    /*}*/

    .btn.btn-secondary:hover {
      background-color: var(--fore-color, #006FB7);
    }

    .btn.btn-menu {
      height: 48px !important;
      width: 48px !important;
    }

    .leading-2 {
      line-height: 24px !important;
    }

    .leading-3 {
      line-height: 30px !important;
    }

    .leading-4 {
      line-height: 35px !important;
    }

    .text-lg {
      font-size: 28px;
    }

    .text-md {
      font-size: 14px;
    }

    .text-sm {
      font-size: 12px;
    }

    h1 {
      font-size: 32px;
    }

    @media screen and (min-width: 600px) {
      h1 {
        font-size: 64px !important;
      }

      /*h2 {*/
      /*  font-size: 64px !important;*/
      /*}*/

      h3 {
        font-size: 32px;
      }

      h4 {
        font-size: 24px;
      }
    }

    body {
      font-family: Arial, sans-serif;
      padding: 0;
      margin: 0;
      font-size: 12px;
    }

    a {
      text-decoration: none;
    }

    .bg-white {
      background-color: var(--white-color, #FFFFFF) !important;
    }

    .shadow-none {
      box-shadow: none !important;
    }

    .border-none {
      border: none;
    }

    .border-white {
      border-color: var(--white-color, #FFFFFF) !important;
    }

    .text-white {
      color: var(--white-color, #FFFFFF);
    }

    .text-white * {
      color: var(--white-color, #FFFFFF) !important;
    }

    .bg-primary {
      background-color: var(--primary-color, #64CEFF) !important;
    }

    .text-primary {
      color: var(--primary-color, #64CEFF) !important;
    }

    .text-primary * {
      color: var(--primary-color, #64CEFF) !important;
    }

    .text-gray {
      color: var(--gray-color, #DDDDDD) !important;
    }

    .text-secondary {
      color: var(--secondary-color, #009DEA) !important;
    }

    .text-right {
      text-align: right;
    }

    .uppercase {
      text-transform: uppercase;
    }

    .rounded {
      border-radius: 3px;
    }

    .opacity-30 {
      opacity: 0.3;
    }

    .opacity-80 {
      opacity: 0.8;
    }

    .m-0 {
      margin: 0 !important;
    }

    .mt-1 {
      margin-top: 0.25rem;
    }

    .mt-2 {
      margin-top: 0.5rem;
    }

    .mt-3 {
      margin-top: 0.75rem;
    }

    .mt-4 {
      margin-top: 1rem;
    }

    .mt-5 {
      margin-top: 1.25rem;
    }

    .-ml-1 {
      margin-left: -0.25rem;
    }

    .-ml-2 {
      margin-left: -0.5rem;
    }

    .p-0 {
      padding: 0 !important;
    }

    .p-1 {
      padding: 0.25rem;
    }

    .p-2 {
      padding: 0.5rem;
    }

    .p-3 {
      padding: 0.75rem;
    }

    .p-4 {
      padding: 1rem;
    }

    .p-5 {
      padding: 1.25rem;
    }

    .px-3 {
      padding-left: 0.75rem;
      padding-right: 0.75rem;
    }

    .py-4 {
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .py-32 {
      padding-top: 32px;
      padding-bottom: 32px;
    }

    .pr-2 {
      padding-right: 0.5rem;
    }

    .pr-4 {
      padding-right: 1rem;
    }

    .flex {
      display: flex;
    }

    .flex-col {
      flex-direction: column;
    }

    .gap-2 {
      gap: 0.5rem;
    }

    .gap-4 {
      gap: 1rem;
    }

    .gap-8 {
      gap: 20px;
    }

    .w-1\/2 {
      width: 50%;
    }

    .items-center {
      align-items: center;
    }

    .justify-center {
      justify-content: center;
    }

    .justify-end {
      justify-content: end;
    }

    .rounded-full {
      border-radius: 50%;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      /*grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));*/
      gap: 1rem;
    }

    .col-span-6 {
      grid-column: span 6;
    }

    .hidden {
      display: none !important;
    }

    footer {
      margin-top: 24px;
      padding: 2rem 1.25rem;
      background-color: var(--fore-color, #006FB7);
      color: var(--white-color, #FFFFFF);
    }

    section {
      margin-top: 24px;
      padding: 2rem 1.25rem;
    }

    footer * {
      font-size: 14px;
    }

    nav {
      padding: 0;
      width: 100%;
    }

    header {
      font-size: 16px;
      padding: 24px;
      padding-bottom: 48px;
      color: var(--white-color, #FFFFFF);
      background: url("@asset('img/img-bg.png')") no-repeat center center;
    }

    .w-full {
      width: 100%;
    }

    .logo {
      width: 147px;
      height: 26px;
    }

    .ruler {
      content: '';
      width: 20px;
      height: 2px;
      display: inline-block;
      background: var(--white-color, #FFFFFF);
    }

    .hero-buttons {
      height: 176px;
      display: flex;
      justify-content: left;
      align-items: flex-end;
      padding-bottom: 64px;
    }

    .hero-buttons a {
      transform: rotate(-90deg) translateY(-56px);
    }
  </style>
</head>
<body>
<header>
  <nav>
    <div class="flex items-center">
      <div class="w-1/2">
        <a href="/" class="logo">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 282.039 50">
            <g id="Logo" transform="translate(-39.046 -37.047)">
              <g id="Group_339" data-name="Group 339" transform="translate(39.046 37.047)">
                <path id="Path_209" data-name="Path 209" d="M68.82,45.506c-.989,1.739-1.9,3.55-2.806,5.076a.561.561,0,0,0-.1.378c0,.764,1.615.377,1.615,1.135a2.563,2.563,0,0,1,2.3-.758,3.037,3.037,0,0,0,2.569-.756,1.611,1.611,0,0,1,.942-.2,2.218,2.218,0,0,1,1.811.862A4.468,4.468,0,0,1,76.5,53.822a2.046,2.046,0,0,1-.386,1.044C74.017,57.15,68.97,55.915,66.3,58.2c2,3.436,6.183,5.245,7.716,8.769,0,.1.279.663.279.767,0,.76-.086,2.761-.951,3.044a2.664,2.664,0,0,1-1.81.667,1.636,1.636,0,0,1-.659-.094c-1.626-1.237-6.1-6.961-7.626-8.864a2.324,2.324,0,0,0-1.711-.853A1.338,1.338,0,0,0,60.2,62.781a14.823,14.823,0,0,1-.943,4c-.392.846-.779,1.613-1.148,2.469-1.15,2.854-1.812,6.1-4.582,7.919A3.173,3.173,0,0,1,52,77.637c-2.845,0-1.142-2.954-3.422-2.573.95-4.571,5.337-7.716,5.234-12.67v-.477c-.189,0-.478-.086-.663-.086-3.235,0-6.287,3.046-9.533,3.046a4.66,4.66,0,0,1-3.247-1.436c-.37-.384-1.325-.762-1.325-1.235a4.369,4.369,0,0,1,2.85-3.635c1.058-.474,2.493-.374,3.632-.654,3.329-.767,6.389-2.388,9.806-3.051-.951-4.1-7.62-7.336-7.62-9.623,0-1.43,2.571-2.383,3.812-2.383a3.143,3.143,0,0,1,1.624.382c2.184,1.613,2.377,6.566,5.809,6.566a1.532,1.532,0,0,0,.673-.088c2.383-2.862,3.618-6.383,5.617-9.428a12.806,12.806,0,0,1,2-2.478,2.243,2.243,0,0,1,2-.766c3.049,0,1.344,2.673,2.862,3.808a22.068,22.068,0,0,0-3.292,4.651" transform="translate(-39.046 -37.047)" fill="#fff"/>
                <g id="Group_338" data-name="Group 338" transform="translate(50.506 7.738)">
                  <path id="Path_210" data-name="Path 210" d="M87.631,44.674h3.217L98.33,66.481,105.512,44.6h2.432l7.181,21.882,7.482-21.808h3.105L116.36,71.045h-2.506L106.671,49.8,99.453,71.045H96.984Z" transform="translate(-87.631 -44.487)" fill="#fff"/>
                  <path id="Path_211" data-name="Path 211" d="M136.6,44.671h18.927v2.655H139.56v9.016h14.289V59H139.56v9.2h16.159v2.656H136.6Z" transform="translate(-85.694 -44.484)" fill="#fff"/>
                  <path id="Path_212" data-name="Path 212" d="M167.91,44.671h11.126a11.881,11.881,0,0,1,3.975.615,7.8,7.8,0,0,1,2.857,1.7,5.836,5.836,0,0,1,1.681,4.182v.074a6.692,6.692,0,0,1-.356,2.26,5.722,5.722,0,0,1-.951,1.717,6.542,6.542,0,0,1-1.325,1.232,8.612,8.612,0,0,1-1.51.84,11.547,11.547,0,0,1,2.184.88,7.348,7.348,0,0,1,1.773,1.293,5.709,5.709,0,0,1,1.194,1.78,5.928,5.928,0,0,1,.449,2.38V63.7a6.616,6.616,0,0,1-.672,3.018,6.288,6.288,0,0,1-1.923,2.249,9.2,9.2,0,0,1-3.006,1.4,14.481,14.481,0,0,1-3.884.487H167.91ZM178.588,56.3a7.364,7.364,0,0,0,4.344-1.174,3.985,3.985,0,0,0,1.661-3.484v-.074a3.711,3.711,0,0,0-1.493-3.092,6.89,6.89,0,0,0-4.29-1.156h-7.945V56.3ZM179.634,68.2a7.916,7.916,0,0,0,4.7-1.234,4,4,0,0,0,1.716-3.442v-.074a3.763,3.763,0,0,0-1.754-3.311,9.344,9.344,0,0,0-5.187-1.178h-8.246V68.2Z" transform="translate(-84.456 -44.484)" fill="#fff"/>
                  <path id="Path_213" data-name="Path 213" d="M200.8,44.671h5.761V70.855H200.8Z" transform="translate(-83.156 -44.484)" fill="#fff"/>
                  <path id="Path_214" data-name="Path 214" d="M219.834,44.671h10.211a15.474,15.474,0,0,1,5.63.992,13.285,13.285,0,0,1,4.414,2.749,12.241,12.241,0,0,1,2.862,4.134,13,13,0,0,1,1.009,5.143v.075a13.135,13.135,0,0,1-1.009,5.162,12.2,12.2,0,0,1-2.862,4.152,13.515,13.515,0,0,1-4.414,2.767,15.2,15.2,0,0,1-5.63,1.01H219.834Zm10.211,20.985a8.913,8.913,0,0,0,3.217-.561,6.921,6.921,0,0,0,2.488-1.609,7.538,7.538,0,0,0,1.608-2.469,8.336,8.336,0,0,0,.58-3.178v-.076a8.525,8.525,0,0,0-.58-3.179,7.449,7.449,0,0,0-1.608-2.506,7.147,7.147,0,0,0-2.488-1.628,8.656,8.656,0,0,0-3.217-.579H225.6V65.656Z" transform="translate(-82.403 -44.484)" fill="#fff"/>
                  <path id="Path_215" data-name="Path 215" d="M254.9,44.671h19.713v5.124H260.58v5.313h12.344v5.124H260.58v5.5H274.8v5.125H254.9Z" transform="translate(-81.016 -44.484)" fill="#fff"/>
                  <path id="Path_216" data-name="Path 216" d="M294.877,44.491h5.312l11.222,26.371h-6.023l-2.394-5.872H291.923l-2.4,5.872h-5.872Zm6.06,15.411-3.479-8.491L293.979,59.9Z" transform="translate(-79.879 -44.491)" fill="#fff"/>
                </g>
              </g>
              <g id="Group_341" data-name="Group 341" transform="translate(250.226 77.232)">
                <g id="Group_340" data-name="Group 340" transform="translate(6.551 1.685)">
                  <path id="Path_217" data-name="Path 217" d="M309.308,84.1h1.466V78.79H312.8V77.438h-5.522V78.79h2.028Zm-7.931,0h5.074V82.8h-3.619V81.4h3.143v-1.3h-3.143V78.742H306.4v-1.3h-5.026Zm-4.258.114a4.326,4.326,0,0,0,2.847-1.056v-2.9h-2.894v1.266h1.476v.952a2.335,2.335,0,0,1-1.381.4,2,2,0,0,1-2.02-2.113v-.02a2,2,0,0,1,1.914-2.076,2.45,2.45,0,0,1,1.743.677l.923-1.114a3.656,3.656,0,0,0-2.619-.914,3.419,3.419,0,0,0-3.493,3.447v.019a3.334,3.334,0,0,0,3.5,3.427m-12.3-.114h4.865v-.685h-4.113V81.084h3.637V80.4h-3.637V78.123h4.066v-.685h-4.817Zm-5.608-3.037V78.133H280.9c1.076,0,1.79.495,1.79,1.448V79.6c0,.876-.725,1.467-1.83,1.467Zm-.752,3.037h.752V81.75h1.619c1.419,0,2.619-.741,2.619-2.179v-.02c0-1.314-.99-2.113-2.494-2.113h-2.495Zm-4.561.1a2.626,2.626,0,0,0,2.78-2.95V77.438h-.752v3.875c0,1.456-.781,2.2-2.008,2.2a1.966,1.966,0,0,1-2.039-2.248V77.438h-.752v3.875a2.61,2.61,0,0,0,2.77,2.893m-7.646-.684a2.65,2.65,0,0,1-2.628-2.752v-.02a2.618,2.618,0,0,1,2.609-2.733,2.65,2.65,0,0,1,2.628,2.753v.019a2.619,2.619,0,0,1-2.609,2.733m-.019.694a3.375,3.375,0,0,0,3.408-3.446v-.02a3.4,3.4,0,1,0-6.8.02v.019a3.344,3.344,0,0,0,3.39,3.427M257,80.838v-2.7h2.057c1.076,0,1.7.495,1.7,1.315v.019c0,.857-.714,1.371-1.714,1.371Zm-.751,3.265H257V81.512h1.905l1.932,2.591h.923l-2.047-2.724a1.948,1.948,0,0,0,1.809-1.942v-.019a1.845,1.845,0,0,0-.514-1.315,2.63,2.63,0,0,0-1.9-.665h-2.865Zm-4.371.114a4.031,4.031,0,0,0,2.675-1.019V80.542h-2.751v.675h2.028v1.658a3.143,3.143,0,0,1-1.924.666,2.576,2.576,0,0,1-2.638-2.77v-.02a2.606,2.606,0,0,1,2.534-2.733,2.836,2.836,0,0,1,2.028.762l.485-.572a3.514,3.514,0,0,0-2.486-.885,3.343,3.343,0,0,0-3.341,3.447v.019a3.267,3.267,0,0,0,3.389,3.427" transform="translate(-248.494 -77.324)" fill="#fff"/>
                </g>
                <rect id="Rectangle_26" data-name="Rectangle 26" width="0.866" height="9.815" transform="translate(0)" fill="#fff"/>
              </g>
            </g>
          </svg>
        </a>
      </div>

      <div class="w-1/2 flex justify-end">
        <button type="button" class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none">
          <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect id="Rectangle_30" data-name="Rectangle 30" width="32" height="32" fill="#fff" opacity="0"/>
            <g id="Group_2929" data-name="Group 2929" transform="translate(2.667 14.667)">
              <path id="Path_221" data-name="Path 221" d="M27.333,13.667h-24a1.333,1.333,0,0,1,0-2.667h24a1.333,1.333,0,1,1,0,2.667Z" transform="translate(-2 -11)" fill="#fff"/>
            </g>
            <g id="Group_2930" data-name="Group 2930" transform="translate(2.667 6.667)">
              <path id="Path_222" data-name="Path 222" d="M27.333,7.667h-24A1.333,1.333,0,0,1,3.333,5h24a1.333,1.333,0,1,1,0,2.667Z" transform="translate(-2 -5)" fill="#fff"/>
            </g>
            <g id="Group_2931" data-name="Group 2931" transform="translate(2.667 22.667)">
              <path id="Path_223" data-name="Path 223" d="M27.333,19.667h-24a1.333,1.333,0,1,1,0-2.667h24a1.333,1.333,0,1,1,0,2.667Z" transform="translate(-2 -17)" fill="#fff"/>
            </g>
          </svg>
        </button>
        <button type="button" class="btn btn-menu p-3 rounded-full flex items-center justify-center border-none hidden">
          <svg id="x-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <rect id="Rectangle_75" data-name="Rectangle 75" width="32" height="32" fill="#fff" opacity="0"/>
            <path id="Path_445" data-name="Path 445" d="M16.219,14.333l7.057-7.057a1.333,1.333,0,0,0-1.885-1.885l-7.057,7.057L7.276,5.391A1.333,1.333,0,0,0,5.391,7.276l7.057,7.057L5.391,21.391a1.333,1.333,0,1,0,1.885,1.885l7.057-7.057,7.057,7.057a1.333,1.333,0,0,0,1.885-1.885Z" transform="translate(1.667 1.667)" fill="#fff"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="hidden">
      <div>
        <h3>
          Création de site internet
          <x-arrow-right />
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
          <x-arrow-right />
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
  </nav>

  <div class=" py-32">
    <h1 class="leading-4 font-light flex flex-col pr-4">
      <span>
        Test d’intégration d’un site internet pour un
      </span>
      <span class="font-bold">
        <span>poste de développeur</span>
        <span class="text-primary -ml-2">.</span>
      </span>
    </h1>

    <div class="leading-2 opacity-80">
      Réalisez ce test d’intégration web pour évaluer vos compétences et tentez de rejoindre l’équipe Web Idea !
    </div>
  </div>

  <div class="hero-buttons">
    <a href="#section-1" class="text-white flex items-center gap-8 text-md">
      <span class="ruler"></span>
      Faites défiler
    </a>
  </div>
</header>

<section id="section-1">
  <div>
    <h2 class="uppercase text-sm text-secondary">
      Nisi nec velit
    </h2>
    <p class="text-lg font-light leading-3">
      Nullam pulvinar felis at metus malesuada
    </p>
    <p>
      Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis. Fusce at egestas libero. Cras convallis egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa dui. Morbi et purus velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla tortor quam quis dolor. Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.
    </p>
    <div>
      <x-link />
    </div>
  </div>
  <div>
    img
  </div>
</section>

<section>
  <div>
    <h2 class="uppercase text-sm text-secondary">
      Bibendum curabitur magna
    </h2>
    <p class="text-lg font-light leading-3">
      Aenean sed nibh a magna posuere
    </p>
    <div>
      <p>
        Maecenas interdum lorem eleifend orci aliquam mollis aliquam non rhoncus magna :
      </p>
      <ul>
        <li>
          Suscipit libero
        </li>
        <li>
          Duis et risus accumsan sem tempus porta nec sit amet est
        </li>
        <li>
          Libero adipiscing
        </li>
      </ul>
    </div>
    <div>
      <x-link />
    </div>
  </div>
  <div>
    img
  </div>
</section>

<section>
  <div>
    <h2 class="uppercase text-sm text-secondary">
      Massa metus proin
    </h2>
    <p class="text-lg font-light leading-3">
      Dolor imperdiet
    </p>
    <p>
      Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
    </p>
    <div>
      Slide
    </div>
  </div>
  <div>
    img
  </div>
</section>

<section>
  <div>
    <h2 class="uppercase text-sm text-secondary">
      Sodales aliquam
    </h2>
    <p>
      Odio mauris diam
    </p>
    <p>
      Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
    </p>
  </div>
  <div>
    <form>
      <x-input name="firstname" placeholder="Dupond" label="Nom" />
      <x-input name="lastname" placeholder="" label="Prénom" />
      <x-input name="email" placeholder="" label="Adresse email" type="email" />
      <div>
        <label for="subject" class="">
          Sujet
        </label>
        <select id="subject" name="subject" required>
          <option value="" disabled selected>Choisissez un sujet</option>
          <option value="1">Option 1</option>
          <option value="2">Option 2</option>
          <option value="3">Option 3</option>
        </select>
      </div>
      <div>
        <label for="message">
          Message
        </label>
        <textarea name="message" class=""
                  id="message" cols="30" rows="10" required></textarea>
      </div>

      <div>
        <input type="checkbox" name="checkbox" class="" required />
        <label for="checkbox">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis risus mi. Ut placerat quam lectus. Curabitur dictum velit non lacus ornare tempor.
        </label>
      </div>

      <div>
        <button type="submit" class="btn">
          Envoyer
        </button>
      </div>
    </form>
  </div>
</section>

<footer>
  <div class="grid">
    <div class="col-span-6 flex flex-col gap-2 text-primary font-bold">
      <a href="#" class="">
        Facebook
      </a>
      <a href="#" class="">
        Twitter
      </a>
      <a href="#" class="">
        Linkedin
      </a>
    </div>
    <div class="col-span-6 text-right">
      <p class="uppercase font-bold">
        Nous contacter
      </p>
      <p>
        2, rue Maurice Barrès
      </p>
      <p>
        57000 METZ
      </p>
      <p>
        +33 3 87 52 12 12
      </p>
      <p class="font-bold text-primary">
        hello@webidea.fr
      </p>
    </div>
  </div>

  <div class="opacity-30">
    <hr class="border-white shadow-none" />
  </div>

  <div class="text-white font-light">
    <p>
      &copy; {{ (new DateTime())->format('Y') }} Web idea. Tous droits réservés.
    </p>
    <div class="divide-y">
      <a href="#">
        Mentions légales
      </a>
      <a href="#">
        Plan du site
      </a>
    </div>
  </div>
</footer>

</body>
</html>
