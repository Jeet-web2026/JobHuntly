@props(['title' => '', 'metadescription' => '', 'remixicon' => '', 'jquery' => '', 'slick' => '', 'daisyUi' => '', 'bootstrap' => '', 'sweetalert' => ''])
<x-MainComponent maintitle="{{ $title }}" mainmetadescription="{{ $metadescription }}" mainremixicon="{{ $remixicon }}" mainjquery="{{ $jquery }}" mainslick="{{ $slick }}" maindaisyui="{{ $daisyUi }}" mainbootstrap="{{ $bootstrap }}" mainsweetalert="{{ $sweetalert }}">
    <x-slot:maincontent>
        @include('components.essentials.header')
        {{ $slot }}
        @include('components.essentials.footer')
    </x-slot:maincontent>
</x-MainComponent>