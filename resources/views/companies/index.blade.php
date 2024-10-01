<x-layout>

    @foreach ($employers as $index => $employer)
        <x-companies-card :employer="$employer"/>
    @endforeach

   
    </script>

</x-layout>
