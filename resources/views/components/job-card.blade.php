@props(['job'])

<div
    class="flex flex-col rounded-2xl border border-white/10 bg-white/5 p-6 transition duration-300 hover:border-blue-500 group hover:bg-white/10">

    <div class="mb-6 text-sm font-medium text-gray-400">
        {{ $job->employer->name }}
    </div>

    <div class="flex-1 text-center">
        <h3 class="text-xl font-bold text-white group-hover:text-blue-400">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>

        <p class="mt-4 text-sm text-gray-300 font-bold">
            {{ $job->salary }}
        </p>
    </div>

    <div class="mt-8 flex items-center justify-between">

        <div class="flex flex-wrap gap-2">
            @foreach ($job->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>

        <x-employer-logo :employer="$job->employer" :width="42" />

        {{-- <img src="https://placehold.co/42x42" alt="Company Logo" class="h-10 w-10 rounded-full border border-white/10"> --}}
    </div>

</div>
