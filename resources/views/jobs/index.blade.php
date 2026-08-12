<x-layout>

    <div class="space-y-10">

        <section class="mx-auto max-w-2xl text-center">

            <h1 class="text-4xl font-bold tracking-tight text-white">
                Let's Find Your Next Job
            </h1>

            <p class="mt-3 text-gray-400">
                Search thousands of jobs from top companies.
            </p>

            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer..."></x-forms.input>
            </x-forms.form>
        </section>

        {{-- ============================================================= --}}

        <section class="max-w-6xl mx-auto">
            <x-section-heading>
                Featured Jobs
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJob as $job)
                    <x-job-card :job="$job" />
                @endforeach
            </div>

        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-x-1 space-y-3">
                @foreach ($jobs as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
