<style>
      .tbody .td:hover{
            cursor: pointer;
      }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sent Box') }}
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
                            {{ $msg->receiver->name ?? "No User found"}}
                        </td>

                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $msg->subject }}
                        </td>

                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            {{ $msg->body }}
                        </td>
                        <td scope="row" class="px-6 py-4 font-medium text-heading whitespace-nowrap">
                            View 
                        </td>


                </tr>
                    @endforeach

            </tbody>


        </table>
    </div>


</x-app-layout>
