<x-layout :title="$title">
    <h1 class="title-blue">{{ $title }}</h1>

    <div class="mt-5">
        <livewire:counter/>
    </div>

    <div class="mt-5">
        <ul id="articles">

        </ul>
    </div>
</x-layout>