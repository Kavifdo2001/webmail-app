<style>
      .tbody .td:hover{
            cursor: pointer;
      }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Compose a Mail') }}
        </h2>
    </x-slot>


    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
         <form method="POST" action="{{ route('mail.send') }}">
        @csrf


        <!-- Email Address -->
        <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="To : example@gmail.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

         <div class="mt-4">
            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
            <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" :value="old('subject')" required autocomplete="username" placeholder="Subject : subject here" />
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <div class="mt-4">
           <textarea name="body" id="body" class="block mt-1 w-full"  cols="30" rows="10" placeholder="Your Messsage"></textarea>
        </div>

        

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-4">
                {{ __('Send') }}
            </x-primary-button>
        </div>
    </form>
    </div>


</x-app-layout>
