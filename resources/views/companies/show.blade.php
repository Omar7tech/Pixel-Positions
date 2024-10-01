<x-layout>

    <section>
        <x-section-heading>Recent Jobs</x-section-heading>
        <div class="mt-6 space-y-3">
            @foreach ($positions as $job)
                <x-job-card-wide :job="$job"
                     />
            @endforeach
        </div>
    </section>


   
</x-layout>
