<div role="user-description">
    <div class="flex justify-center items-center">
        <p class="bg-black text-4xl px-5.5 py-2.5 rounded-full text-h">{{ Auth::user()->name[0] }}</p>
    </div>
    <h3 class="text-center capitalize mt-2 font-semibold text-b text-lg">{{ Auth::user('web')->name }}</h3>
</div>
<nav role="navigation" class="flex justify-center items-center mt-8">
    <ul class="w-full px-5">
        <a href="{{ route('user.dashboard') }}">
            <li class="{{ request()->is('user-dashboard') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize  font-medium text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="{{ request()->is('user-dashboard') ? 'text-h' : 'text-b' }} ri-dashboard-line me-2 font-semibld"></i>dashboard</li>
        </a>
        <a href="{{ route('user.performance') }}">
            <li class="{{ request()->is('user-performance') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-bar-chart-line me-2 {{ request()->is('user-performance') ? 'text-h' : 'text-b' }}"></i>performance</li>
        </a>
        <a href="{{ route('user.opportunities') }}">
            <li class="{{ request()->is('user-opportunities') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-briefcase-line me-2 {{ request()->is('user-opportunities') ? 'text-h' : 'text-b' }}"></i>opprtunities</li>
        </a>
        <a href="{{ route('user.help') }}">
            <li class="{{ request()->is('user-help') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-chat-1-line me-2 {{ request()->is('user-help') ? 'text-h' : 'text-b' }}"></i>chat for help</li>
        </a>
        <a href="{{ route('user.settings') }}">
            <li class="{{ request()->is('user-settings') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-settings-5-line me-2 {{ request()->is('user-settings') ? 'text-h' : 'text-b' }}"></i>settings</li>
        </a>
        <a href="{{ route('user.feedback') }}">
            <li class="{{ request()->is('user-feedback') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-mail-open-line me-2 {{ request()->is('user-feedback') ? 'text-h' : 'text-b' }}"></i>feedback & rate</li>
        </a>
        <a href="{{ route('user.about') }}">
            <li class="{{ request()->is('user-about') ? 'text-h bg-black shadow-sm' : 'text-b bg-gray-100' }} capitalize font-medium mt-2 text-start ps-3 py-1.5 rounded-sm text-lg w-full"><i class="ri-error-warning-line me-2 {{ request()->is('user-about') ? 'text-h' : 'text-b' }}"></i>about us</li>
        </a>
    </ul>
</nav>
<div class="flex justify-center items-center">
    <button command="show-modal" commandfor="dialog" class="absolute bottom-3 text-base font-medium items-center cursor-pointer" style="color: #000 !important;"><i class="ri-shut-down-line me-2" style="color: #000 !important;"></i>Logout</button>
    <x-DialogBox link="{{ route('auth.logout') }}">
        Are you sure want to logout?
    </x-DialogBox>
</div>