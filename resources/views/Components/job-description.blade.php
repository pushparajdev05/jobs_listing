@props(['company'=> "none",
'position' => "none",
'salary' => "none",
'email' => "none",
])

<!-- job description component -->
<div class="border-2 px-2 rounded-xl">
    <div class="px-4 sm:px-0">
      <h3 class="text-2xl font-bold text-gray-900 pt-2 text-center">Job Description</h3>
    </div>
    <div class="mt-2 border-t border-gray-400">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 border-gray-400">
          <dt class="text-sm/6 font-medium text-gray-900">Company Name</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$company}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 border-gray-400">
          <dt class="text-sm/6 font-medium text-gray-900">Position</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$position}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 border-gray-400">
            <dt class="text-sm/6 font-medium text-gray-900">Salary expectation</dt>
            <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$salary}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 border-gray-400">
          <dt class="text-sm/6 font-medium text-gray-900">Email address</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$email}}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 border-gray-400   ">
          <dt class="text-sm/6 font-medium text-gray-900">About</dt>
          <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$description}}</dd>
        </div>
      </dl>
    </div>
  </div>
