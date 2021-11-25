{{-- https://laracasts.com/discuss/channels/laravel/sending-a-welcome-email-after-user-verify-his-account --}}
{{-- php artisan make:listener WelcomeEmail
php artisan make:mail WelcomeMail -m emails.welcome --}}

@component('mail::message')
# Welcome to {{ env('APP_NAME') }}

Dear {{ $user->nickname }}, we are happy to have you among us. Have fun publishing ads.

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
