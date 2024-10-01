<x-layout>
    <section class="text-center pt-6 space-y-3">
        <h1 class="font-bold lg:text-5xl text-2xl mb-6">Login</h1>



        <form class="flex flex-col items-center space-y-3" method="POST" action="{{ route('login') }}">
            @csrf

            <x-forms.text-input-daisy name="email" type="email" placeholder="Email" />


            <x-forms.text-input-daisy name="password" type="password" placeholder="Password" />
            @if (session('credentials'))
            <div class="w-72">
                <x-forms.alert type="error">
                    {{ session('credentials') }}
                </x-forms.alert>
            </div>
        @endif

            <hr>

            <x-forms.btn type="submit">Submit</x-forms.btn>
            <x-forms.btn type="reset">Reset</x-forms.btn>

        </form>
    </section>
</x-layout>
