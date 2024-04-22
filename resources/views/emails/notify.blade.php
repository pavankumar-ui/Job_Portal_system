<x-mail::message>
# Introduction

Congratulations! you are now a  premium member
<p>Your Purchase Details</p>
<p>Plan:<b>{{$plan}}</b>    </p>
<p>Your billing ends on: <b> {{$BillingEnds}} </b></p>

<x-mail::button :url="{{route('job.create')}}">
   Post a Job Now
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
