
@props (['url'=>'/', 'bgClass'=>'bg-yellow-500', 'hoverClass'=> 'hover:bg-yellow-600', 'textClass'=>'text-black', 'icon'=> null, 'block'=>false])


<a href="{{$url}}" class="px-4 py-2 rounded hover:shadow-md transition duration-300 {{$bgClass}} {{$hoverClass}} {{$textClass}} {{$block? 'block' : ''}}">{{$slot}} <i class="fa fa-{{$icon}}"></i> </a>