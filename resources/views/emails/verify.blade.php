@component('mail::message')

Dear {{$data["name"]}} , <br>

Welcome to SMARTFORCE. Please verify your email.
To verify your email Please click on the provided link <a href="{{env('APP_URL')}}/verify-me/{{$data['email']}}/{{$data['token']}}">click here</a>.




@component('mail::button', ['url' => env('APP_URL').'/verify-me/'.$data["email"].'/'.$data["token"]])
VERIFY ME
@endcomponent

Thanks and Regards,<br>
Team {{ config('app.name') }}
@endcomponent