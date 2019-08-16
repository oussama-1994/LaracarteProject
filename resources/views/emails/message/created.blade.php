@component('mail::message')
# Introduction
{{$msg->name}}
{{$msg->email}}
{{$msg->contenu}}

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
