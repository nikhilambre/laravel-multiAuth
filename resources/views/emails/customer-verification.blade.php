@component('mail::message')
# WelCome to StoresBuzz

Hello {{ $user->name }}, 

Click on the below button to verify your email address.

@component('mail::button', ['url' => 'http://localhost:8080/laravel/stores_duo/customer/register/verify/'.$user->email_token])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
