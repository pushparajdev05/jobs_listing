<x-layout>
    <section id="job-description" class="max-auto px-4 mt-4">
        @if (request()->is("jobs/*"))
            <x-job-description company="{{$job['company']}}" position="{{$job['position']}}" salary="{{$job['salary']}}" email="{{$job['email']}}">
                <x-slot:description>{{$job["description"]}}</x-slot:description>
            </x-job-description>
        @endif
    </section>
</x-layout>
