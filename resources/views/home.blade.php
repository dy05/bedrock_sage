@extends('layouts.app', ['active_page' => 'home'])

@section('content')
  <section id="section-1" class="mt-[100px]">
    <div class="">
      <h2 class="uppercase font-bold text-sm text-secondary mb-0">
        Nisi nec velit
      </h2>
      <p class="text-lg subtitle font-light leading-3">
        Nullam pulvinar felis at metus malesuada
      </p>
      <p class="text-md leading-2 font-light">
        Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis. Fusce at egestas libero. Cras convallis egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa dui. Morbi et purus velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla tortor quam quis dolor. Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.
      </p>
      <div>
        <x-link />
      </div>
    </div>
    <div class="mt-16">
      @php
        $asset = \Roots\asset('images/img.png');
      @endphp
      <img src="{{ $asset->uri() }}" alt="image" class="image-387 object-cover" />
    </div>
  </section>

  <section class="mt-[100px]">
    <div>
      <h2 class="uppercase font-bold text-sm text-secondary mb-0">
        Bibendum curabitur magna
      </h2>
      <p class="text-lg font-light leading-3">
        Aenean sed nibh a magna posuere
      </p>
      <div>
        <p>
          Maecenas interdum lorem eleifend orci aliquam mollis aliquam non rhoncus magna :
        </p>
        <ul class="list-primary">
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
      @php
        $asset = \Roots\asset('images/img-section2.png');
      @endphp
      <img src="{{ $asset->uri() }}" alt="image" class="image-387 object-cover" />
    </div>
  </section>

  <section class="mt-[100px]">
    <div>
      <h2 class="uppercase font-bold text-sm text-secondary mb-0">
        Massa metus proin
      </h2>
      <p class="text-lg font-light leading-3">
        Dolor imperdiet
      </p>
      <p>
        Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
      </p>
      <div>
        <x-link />
      </div>
    </div>
    <div>
      <div>
        @foreach(['img-slide1.png', 'img-slide2.png', 'img-slide3.png', 'img-slide4.png', ] as $image)
        <div>
          @php
            $asset = \Roots\asset('images/' . $image);
          @endphp
          <img src="{{ $asset->uri() }}" alt="image" class="image-387 object-cover" />
        </div>
        @endforeach
      </div>
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
                    id="message" required></textarea>
        </div>

        <div class="grid gap-2 p-0">
          <input type="checkbox" name="checkbox" class="p-0 m-0" required />
          <label for="checkbox" class="col-span-11">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis risus mi. Ut placerat quam lectus. Curabitur dictum velit non lacus ornare tempor.
          </label>
        </div>

        <div class="mt-[28px]">
          <button type="submit" class="btn">
            Envoyer
          </button>
        </div>
      </form>
    </div>
  </section>
@endsection

@section('sidebar')
  @include('sections.sidebar')
@endsection
