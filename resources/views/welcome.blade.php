<x-layout>

    <div class="=space-y-10">

        <section class="mx-auto max-w-2xl text-center">

            <h1 class="text-4xl font-bold tracking-tight text-white">
                Let's Find Your Next Job
            </h1>

            <p class="mt-3 text-gray-400">
                Search thousands of jobs from top companies.
            </p>

            <form action="" class="mt-8">
                <input type="text" placeholder="Web Developer..."
                    class="w-full rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-white placeholder:text-gray-400 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20">
            </form>

        </section>

        {{-- ============================================================= --}}

        <section class="max-w-6xl mx-auto">
            <x-section-heading>
                Featured Jobs
            </x-section-heading>

            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>

        <section>
            <x-section-heading>Featured Jobs</x-section-heading>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
            </div>
        </section>

        <section>
            <x-section-heading>Reacent Jobs</x-section-heading>
            <div class="mt-6 space-x-1 space-y-3">
                <x-job-card-wide />
                <x-job-card-wide />
                <x-job-card-wide />
            </div>
        </section>
    </div>
</x-layout>
