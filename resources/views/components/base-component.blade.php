@props(['title' => '', 'metadescription' => '', 'remixicon' => '', 'jquery' => '', 'slick' => '', 'daisyUi' => '', 'bootstrap' => ''])
<x-MainComponent maintitle="{{ $title }}" mainmetadescription="{{ $metadescription }}" mainremixicon="{{ $remixicon }}" mainjquery="{{ $jquery }}" mainslick="{{ $slick }}" maindaisyui="{{ $daisyUi }}" mainbootstrap="{{ $bootstrap }}">
    <x-slot:maincontent>
        @include('components.essentials.header')
        {{ $slot }}
        @include('components.essentials.footer')
    </x-slot:maincontent>
</x-MainComponent>