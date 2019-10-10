@component('mail::message')
# Introduction
Name    : {{$name}}
Message : {{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
