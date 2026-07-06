<style>
    .tbody .td:hover {
        cursor: pointer;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inbox') }}
        </h2>
    </x-slot>


    <div class="relative overflow-x-auto bg-neutral-primary-soft shadow-xs rounded-base border border-default">
        <table class="w-full text-sm text-left rtl:text-right text-body">
            <thead class="text-sm text-bold text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                <tr>
                    <th scope="col" class="px-6 py-3 font-small">
                        Sender
                    </th>
                    <th scope="col" class="px-6 py-3 font-small">
                        Subject
                    </th>
                    <th scope="col" class="px-6 py-3 font-small">
                        Message
                    </th>

                </tr>
            </thead>


            <tbody>

                @foreach ($inbox as $msg)
                    <tr class="bg-neutral-primary border-b border-default">

                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $msg->sender->name }}
                        </td>

                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $msg->subject }}
                        </td>

                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ Str::limit($msg->body, 5, ' xxx view to see more') }}
                        </td>


                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            <a href="{{ route('mail.view',$msg->id) }}">
                                <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6 text-gray-600 hover:text-blue-600 transition-colors">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>
                            </a>
                        </td>




                    </tr>
                @endforeach

            </tbody>


        </table>
    </div>


</x-app-layout>
