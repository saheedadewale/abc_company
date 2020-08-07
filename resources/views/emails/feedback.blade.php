@component('mail::message')


<h3>{{$details['subject']}}</h3>
<p><b>Sent By:</b>{{$details['name']}}</p>
<p><b>preference:</b>{{$details['preference']}}</p>
<p>{{$details['message']}}</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
