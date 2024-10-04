@extends('layouts.app', ['active_page' => 'home'])

@section('content')
  <section id="section-1" class="mt-[100px]">
    <div class="">
      <x-title text="Nisi nec velit" />
      <x-subtitle text="Nullam pulvinar felis at metus malesuada" />
      <div>
        <x-section-text>
          Pellentesque tincidunt tristique neque, eget venenatis enim gravida quis. Fusce at egestas libero. Cras convallis egestas ullamcorper. Suspendisse sed ultricies nisl, pharetra rutrum mauris. Vestibulum at massa dui. Morbi et purus velit. Etiam tristique, justo eu condimentum efficitur, purus velit facilisis sem, id fringilla tortor quam quis dolor. Praesent ultricies dignissim ex, at volutpat sapien ullamcorper rhoncus.
        </x-section-text>
      </div>
      <div>
        <x-link />
      </div>
    </div>
    <div class="mt-16">
      <div>
        @php
          $asset = \Roots\asset('images/img.png');
        @endphp
        <img src="{{ $asset->uri() }}" alt="image" class="image-387 object-cover" />
      </div>
    </div>
  </section>

  <section class="mt-[100px]">
    <div>
      <x-title text="Bibendum curabitur magna" />
      <x-subtitle text="Aenean sed nibh a magna posuere" />
      <div>
        <x-section-text>
          Maecenas interdum lorem eleifend orci aliquam mollis aliquam non rhoncus magna :
        </x-section-text>
        <ul class="list-primary list-inside text-md leading-2">
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
      <div class="mt-5">
        <x-link />
      </div>
    </div>
    <div class="mt-16">
      <div class="bg-section2">
        @php
          $asset = \Roots\asset('images/img-section2.png');
        @endphp
        <img src="{{ $asset->uri() }}" alt="image" class="image-599 object-cover -ml-2" />
      </div>
    </div>
  </section>

  <section class="mt-[100px]">
    <div>
      <x-title text="Massa metus proin" />
      <x-subtitle text="Dolor imperdiet" />
      <div>
        <x-section-text>
          Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
        </x-section-text>
      </div>
    </div>
    <div>
      <div class="flex gap-2 w-full overflow-x-auto">
        <x-card text="Duis porta ligula rhoncus euismod pretium"
                :link="\Roots\asset('images/img-slide1.png')" />
        <x-card text="Etiam aliquet congue consequat"
                :link="\Roots\asset('images/img-slide2.png')" />
        <x-card text="Maecenas a venenatis enim"
                :link="\Roots\asset('images/img-slide3.png')" />
        <x-card text="Sed a magna semper, porta purus eu, ullamcorper ligula"
                :link="\Roots\asset('images/img-slide4.png')" />
      </div>
      <div class="mt-4 flex gap-2">
        <button type="button" class="slide-button cursor-pointer text-gray opacity-40">
          <svg id="arrow-right-icon" class="icon reverse-180" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path id="Path_224" data-name="Path 224" d="M25.231,15.176a1.337,1.337,0,0,0-.289-1.453L15.609,4.391a1.333,1.333,0,0,0-1.885,1.885l7.057,7.057H5.333a1.333,1.333,0,1,0,0,2.667H20.781l-7.057,7.057a1.333,1.333,0,1,0,1.885,1.885l9.332-9.332A1.334,1.334,0,0,0,25.231,15.176Z" transform="translate(1.333 1.333)" fill="current"/>
          </svg>
        </button>
        <button type="button" class="slide-button cursor-pointer">
          <svg id="arrow-right-icon" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path id="Path_224" data-name="Path 224" d="M25.231,15.176a1.337,1.337,0,0,0-.289-1.453L15.609,4.391a1.333,1.333,0,0,0-1.885,1.885l7.057,7.057H5.333a1.333,1.333,0,1,0,0,2.667H20.781l-7.057,7.057a1.333,1.333,0,1,0,1.885,1.885l9.332-9.332A1.334,1.334,0,0,0,25.231,15.176Z" transform="translate(1.333 1.333)" fill="current"/>
          </svg>
        </button>
      </div>
    </div>
  </section>

  <section class="mt-[100px]">
    <div>
      <x-title text="Sodales aliquam" />
      <x-subtitle text="Odio mauris diam" />
      <div>
        <x-section-text>
          Phasellus risus turpis, pretium sit amet magna non, molestie ultricies enim. Nullam pulvinar felis at metus malesuada.
        </x-section-text>
      </div>
    </div>
    <div class="mt-8">
      <form id="contact-form">
        <x-input name="firstname" placeholder="Dupond" label="Nom" />
        <x-input name="lastname" placeholder="" label="Prénom" />
        <x-input name="email" placeholder="" label="Adresse email" type="email" />
        <x-input name="phone" placeholder="" label="Téléphone (facultatif)" type="tel" :required="false" placeholder="+33" />

        <div class="relative flex items-center my-4">
          <label for="subject" class="absolute top-0 h-full text-gray w-[64px] flex items-center left-3">
            Sujet
          </label>
          <select id="subject" name="subject" class="pl-[72px] w-full" required>
            <option value="" disabled selected>Choisissez un sujet</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
          </select>
        </div>
        <div class="relative my-4">
          <label for="message" class="absolute top-2 h-full text-gray w-[64px] left-3 h-[16px]">
            Message
          </label>
          <textarea name="message" class="pt-[20px] w-full"
                    id="message" required></textarea>
        </div>

        <div class="grid gap-2 p-0 my-4">
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
