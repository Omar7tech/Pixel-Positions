
<x-layout>
    <div class="space-y-10">

        {{-- Hero Section --}}



        {{-- Recent Jobs Section --}}
        <section>
            <div class="flex justify-between">
                <x-section-heading>Results For : {{ $tag->name}}</x-section-heading>
                <div>
                    <a href="/" class="bg-white/10 rounded">go back</a>
                </div>
            </div>
            <div class="mt-6 space-y-3">
                @foreach ($positions as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all elements with the class 'job-card'
            const jobCards = document.querySelectorAll('.job-card');

            // Attach a click event listener to each card
            jobCards.forEach(card => {
                card.addEventListener('click', function() {
                    const url = card.getAttribute('data-url');
                    // Redirect to the URL when the card is clicked
                    window.location.href = url;
                });
            });
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Get all elements with the class 'job-card'
        const jobCards = document.querySelectorAll('.job-card');

        // Attach a click event listener to each card
        jobCards.forEach(card => {
            card.addEventListener('click', function() {
                const url = card.getAttribute('data-url');
                // Redirect to the URL when the card is clicked
                window.location.href = url;
            });
        });
    });
</script>
</x-layout>
