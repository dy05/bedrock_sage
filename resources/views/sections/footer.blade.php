{{--<footer class="content-info">--}}
{{--  @php(dynamic_sidebar('sidebar-footer'))--}}
{{--</footer>--}}

<footer class="mt-[120px] py-8">
  <div class="px-[18px] md:max-screen">
    <div class="grid">
      <div class="md:col-span-3 hidden md:block">
        <x-logo />
      </div>

      <div class="col-span-6 grid gap-3">
        <div class="hidden md:block md:col-span-4 font-medium text-white">
          <ul class="list-none list-leading-3">
            <li>
              <a href="#">
                Vehicula fringilla suspendisse
              </a>
            </li>
            <li>
              <a href="#">
                Vulputate convallis massa
              </a>
            </li>
            <li>
              <a href="#">
                Aliquam gravida lacinia
              </a>
            </li>
            <li>
              <a href="#">
                Nulla dictum praesent
              </a>
            </li>
          </ul>
        </div>
        <div class="hidden md:block md:col-span-4 font-medium text-white">
          <ul class="list-none list-leading-3">
            <li>
              <a href="#">
                Enim vitae porttitor
              </a>
            </li>
            <li>
              <a href="#">
                Porttitor dapibus imperdiet
              </a>
            </li>
            <li>
              <a href="#">
                Vel aliquam
              </a>
            </li>
          </ul>
        </div>
        <ul class="col-span-12 md:col-span-4 flex flex-col gap-2 list-none p-0 text-primary !font-bold">
          <li>
            <a href="#">
              Facebook
            </a>
          </li>
          <li>
            <a href="#">
              Twitter
            </a>
          </li>
          <li>
            <a href="#">
              Linkedin
            </a>
          </li>
        </ul>
      </div>

      <div class="col-span-6 md:col-span-3 text-right">
        <p class="uppercase font-bold mt-0">
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

    <div class="grid">
      <div class="col-span-12 md:col-span-6 !md:col-start-4">
        <div class="opacity-30 py-4">
          <hr class="border-white" />
        </div>

        <div class="text-white mt-1">
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
      </div>
    </div>
  </div>
</footer>
