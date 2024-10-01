<div class="bg-white/10 p-4 rounded border border-white/20 transition-transform duration-200 ease-in-out transform hover:scale-105 hover:bg-white/20">
    <div class="flex flex-col md:flex-row justify-between items-center">
        <div class="flex items-center gap-x-2 mb-2 md:mb-0">
            <x-employer-logo :width="30" />
            <h1 class="text-xl text-gray-400 font-bold">{{ $employer->name }}</h1>
            <h1>
                @php
                    $positions_salary_count = 0;
                    foreach ($employer->positions as $positions) {
                        $positions_salary_count += $positions->salary;
                    }
                @endphp
                <span class="text-sm">
                    Total Salaries: <span class="text-lime-300">{{ number_format($positions_salary_count) }} $</span>
                </span>
            </h1>
        </div>

        <div class="flex space-x-2 items-center">
            <a href="{{route('companies.show' , ['employer' => $employer->id])}}" class="btn btn-sm flex items-center transition-colors duration-200 hover:bg-blue-500 hover:text-white">
                See All Jobs
                <div class="badge ml-1">{{ $employer->positions->count() }}</div>
            </a>
            <a href="mailto:{{ $employer->user->email }}" class="btn btn-sm flex items-center transition-colors duration-200 hover:bg-blue-500 hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <p class="ml-1">Email</p>
            </a>
        </div>
    </div>
</div>
