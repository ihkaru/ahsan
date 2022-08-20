<form wire:submit.prevent="authenticate" class="space-y-8">
    {{ $this->form }}

    <x-filament::button type="submit" form="authenticate" class="w-full">
        {{ __('filament::login.buttons.submit.label') }}
    </x-filament::button>
    <div class="flex items-center space-x-4">
        <div class="border-t-2 border-slate-600 w-full h-1"></div>
        <h1>Or</h1>
        <div class="border-t-2 border-slate-600 w-full h-1"></div>
    </div>
    <div class="flex space-x-4 items-center justify-evenly">
        <a href="{{url('/login/google')}}" class="flex items-center justify-center w-full px-4 py-2 border border-4 text-sm text-gray-700 rounded-lg hover:bg-gray-100">
            <span class="iconify w-5 h-5 mr-2" data-icon="flat-color-icons:google"></span> <span>Sign in with Google</span>
        </a>
    </div>
</form>
