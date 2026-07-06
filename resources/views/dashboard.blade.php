<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Welcome Back') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}

<aside
   class="bg-white border-r border-slate-300 w-full top-0 left-0 max-w-[264px] py-6 px-4 ">

   <nav aria-label="Primary sidebar navigation">

      <div class="mt-6">
         <div class="text-blue-700 text-sm font-semibold px-3">Mail Box</div>
         <ul class="mt-2 space-y-0.5 text-sm text-slate-800 font-medium">
            <li>
               <a href="#"
                  class="block hover:text-slate-900 hover:bg-slate-100 rounded-md px-3 py-2 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                  Unread Mails
               </a>
            </li>
            <li>
               <a href="#"
                  class="block hover:text-slate-900 hover:bg-slate-100 rounded-md px-3 py-2 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                  Received Mails
               </a>
            </li>
            <li>
               <a href="#"
                  class="block hover:text-slate-900 hover:bg-slate-100 rounded-md px-3 py-2 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500">
                  Sent Mails
               </a>
            </li>
            
         </ul>
      </div>

   </nav>
</aside>


</x-app-layout>
