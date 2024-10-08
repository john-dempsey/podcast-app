<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            <ul>
                @foreach ($podcasts as $podcast)
                <li><a href="{{ $podcast['url'] }}">{{ $podcast['title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>