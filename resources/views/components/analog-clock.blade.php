@props([
    'params' => $params,
])
<div x-data="analogClock({{$params}})">
    <svg viewBox="0 0 300 300" x-ref="clockSvg"></svg>
</div>
