<x-app-layout>
    <!-- resources/views/training/index.php -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Training List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Table Records Training
                    <!-- resources/views/training/index.php -->
                    <table class="min-w-full text-left text-sm font-light">
                        <thead
                            class="border-b bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Training</th>
                            <th scope="col" class="px-6 py-4">Description</th>
                            <th scope="col" class="px-6 py-4">Trainer</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($trainings as $row)
                            <tr
                            class="border-b bg-neutral-100 dark:border-neutral-500 dark:bg-neutral-700">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $row->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->title }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->description }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $row->trainer }}</td>
                            </tr>
                        @endforeach
                            
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
