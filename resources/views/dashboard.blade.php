<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in nigga!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 text-gray-900 dark:text-gray-100"
    >
    <h3 class="bg-blue-400 p-8 rounded-lg text-black"
    >Lorem ipsum dolor sit amet consectetur adipisicing elit. A unde maiores in optio exercitationem ducimus praesentium fugit, officiis sit soluta quibusdam saepe dicta minima! Fuga vero eius dolorem deleniti libero.</h3>
        
    </div>
</x-app-layout>
