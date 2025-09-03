<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Edit Professional Details" mainbootstrap="true">
    <x-slot:maincontent>
        @if(session('userId'))
        @if(session('success'))
        
        @endif
        @else
        <h2>Please fill the Personal details first.</h2>
        @endif
    </x-slot:maincontent>
</x-MainComponent>