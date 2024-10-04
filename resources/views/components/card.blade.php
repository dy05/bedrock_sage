@props([
  'link' => '',
  'text' => 'Title',
])

<div>
  <div class="slide-div">
    <img src="{{ $link }}" alt="image" class="slide-img object-cover -mb-2" />
    <div class="slide-text grid absolute w-full p-4 bottom-0 text-white cursor-pointer">
      <span class="col-span-9 text-md md:text-lg font-bold">
        {{ $text }}
      </span>

      <div class="col-span-3 flex justify-end items-end h-full">
        <span>
          <svg id="arrow-right-icon" class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
  {{--        <rect id="Rectangle_31" data-name="Rectangle 31" width="32" height="32" fill="#fff" opacity="0"/>--}}
            <path id="Path_224" data-name="Path 224" d="M25.231,15.176a1.337,1.337,0,0,0-.289-1.453L15.609,4.391a1.333,1.333,0,0,0-1.885,1.885l7.057,7.057H5.333a1.333,1.333,0,1,0,0,2.667H20.781l-7.057,7.057a1.333,1.333,0,1,0,1.885,1.885l9.332-9.332A1.334,1.334,0,0,0,25.231,15.176Z" transform="translate(1.333 1.333)" fill="currentColor"/>
          </svg>
        </span>
      </div>
    </div>
  </div>
</div>
