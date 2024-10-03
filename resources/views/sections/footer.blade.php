{{--<footer class="content-info">--}}
{{--  @php(dynamic_sidebar('sidebar-footer'))--}}
{{--</footer>--}}

<footer class="mt-[120px] py-32">
  <div class="grid">
    <div class="col-span-6 text-primary font-bold">
      <ul class="flex flex-col gap-2 list-none p-0 text-primary">
        <li>
          <a href="#" class="">
            Facebook
          </a>
        </li>
        <li>
          <a href="#" class="">
            Twitter
          </a>
        </li>
        <li>
          <a href="#" class="">
            Linkedin
          </a>
        </li>
      </ul>
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
</footer>
