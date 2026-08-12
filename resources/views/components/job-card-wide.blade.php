@props(['job'])

<x-panel>
    <div class="flex items-center gap-5">

        <x-employer-logo />

        <div>
            <p class="text-sm text-gray-400 ">
                {{ $job->employer->name }}
            </p>

            <h3 class="mt-1 text-1xl font-bold text-white group-hover:text-blue-400">
                <a href="{{ $job->url }}" target="_blank">
                    {{ $job->title }}
                </a>
            </h3>

            <p class="mt-3 text-sm text-gray-400">
                {{ $job->salary }}
            </p>
        </div>

    </div>

    <div class="flex flex-col items-end justify-between h-full">

        <div class="flex gap-2 mb-8">
            <span class="rounded-full bg-white/10 px-3 py-1 text-xs text-gray-300">
                Remote
            </span>

            <span class="rounded-full bg-white/10 px-3 py-1 text-xs text-gray-300">
                22h
            </span>
        </div>

        <div class="flex gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

    </div>


</x-panel>
