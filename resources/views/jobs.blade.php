<x-layout>
    <section id="jobs-page" class="mx-3 my-4">
        <h1 class="text-2xl font-bold font-sans mx-2 capitalize">Jobs Lists based on user skills and qualification</h1>
        <div id="jobs-list">
            {{-- jobs listing loop through --}}
            @foreach ( $jobs as $nJob )
            @php
                $id= $nJob["id"];
            @endphp
            <div id="job-card" class="bg-blue-200 my-3 rounded-2xl p-4 flex justify-between items-center">
                <div class="details">
                    <div class="slot flex">
                        <label for="" class="font-semibold text-xl pr-2">Position :</label>
                        <p class="text-xl">{{$nJob["position"]}}</p>
                    </div>
                    <div class="slot flex">
                        <label for="" class="font-semibold text-xl pr-2">Componay :</label>
                        <p class="text-xl">{{$nJob["company"]}}</p>
                    </div>
                </div>
                <div id="rounded-nav" class="h-10 w-10 pt-0.5 rounded-full bg-blue-900 text-white font-bold text-xl hover:scale-120 duration-150 flex justify-center items-center">
                    <a href="jobs/{{$id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-layout>
