@props(["active" => false])

<a {{$attributes}} class="{{ $active ? ' bg-gray-700 text-white' : 'text-gray-300 ' }} block rounded-md px-3 py-2 text-base font-medium hover:bg-gray-900 hover:text-white " aria-current={{ $active ? "page" : "false"}}>{{$slot}} </a>
