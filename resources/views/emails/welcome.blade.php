@component('mail::message')
# Hello {{ $user->name }}

The body of your message.

1. 
2. 
3. 

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
