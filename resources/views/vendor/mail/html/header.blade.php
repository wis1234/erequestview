@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://www.jualink.com/storage/event_images/654d15b39dd7e.png" class="logo" alt="LATESC Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
