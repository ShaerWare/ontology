<x-app-layout>
    <x-slot name="header">

            <div class="flex flex-wrap items-center justify-between mb-4">
              <h2 class="text-lg font-medium leading-6 text-gray-900" >
                <a href="">{{ __('Общая') }}</a>
              </h2>
              <h2 class="text-lg font-medium leading-6 text-gray-900" >
                <a href="">{{ __('Пользователи') }}</a>
              </h2>
              <h2 class="text-lg font-medium leading-6 text-gray-900">
                <a href="">{{ __('Роли') }}</a>
              </h2>
            </div>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
