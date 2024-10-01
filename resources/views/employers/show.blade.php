<x-layout>
    <div class="space-y-10">

        <section class="pt-6">
            <div class="flex justify-center place-items-center">
                <h1 class="font-bold text-4xl">{{ $employer->name }}</h1>

            </div>
            <div class="my-10">
                <div class="divider divider-neutral">
                    <x-employer-logo :width="52" />
                </div>
            </div>
        </section>

        <section class="mx-7">
            <div class="overflow-x-auto">
                <table class="table">

                    <tbody>
                        <tr>
                            <td>Jobs Posted : </td>
                            <td class="font-bold">{{ $employer->positions->count() }}</td>
                        </tr>
                        <tr>
                            <td>Joined at : </td>
                            <td class="font-bold">{{ $employer->created_at }}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </section>


    </div>

</x-layout>
