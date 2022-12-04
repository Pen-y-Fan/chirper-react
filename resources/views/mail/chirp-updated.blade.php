<x-mail::message>
<div style="text-align:right;">
    <img src="{{url('/images/gb-wls.svg')}}" alt="Welsh flag" width="206" height="124" />
</div>

# Chirp updated

{{ $message }}

<x-mail::button :url="$url">
Go to Chirper
</x-mail::button>

Thank you for using our application!<br>
{{ config('app.name') }}
</x-mail::message>
