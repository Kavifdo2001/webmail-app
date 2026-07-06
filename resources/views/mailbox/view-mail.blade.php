<style>
      .tbody .td:hover{
            cursor: pointer;
      }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Mail') }}
        </h2>
    </x-slot>


    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
      


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Sender')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{$mail->sender->email}}" readonly/>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

         <div class="mt-4">
            <x-input-label for="email" :value="__('Subject')" />
            <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject" value="{{$mail->subject}}" readonly/>
            {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" /> --}}
        </div>

        <!-- Password -->
        <x-input-label for="email" :value="__('Message')" />
        <div class="mt-4">
           <textarea name="body" id="body" class="block mt-1 w-full"  cols="30" rows="10" placeholder="Your Messsage" readonly>{{$mail->body}}</textarea>
        </div>
    </div>


</x-app-layout>
