<div {{$attributes->merge(['class' => 'bg-$color-100 border-1-4 border-$color-500 text-$color-700 p4'])}} role="alert">
<p class="font-bold">{{$title}}</p>
<p>{{$slot}}</p>
</div>