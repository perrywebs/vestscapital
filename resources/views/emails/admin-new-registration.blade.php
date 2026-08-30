@component('mail::message')

# New User Registration

A new user has successfully registered on **{{ $settings->site_name }}**.

@component('mail::panel')
**User Details**

- **Name:** {{ $user->name }}
- **Email:** {{ $user->email }}
- **Username:** {{ $user->username }}
- **Registration Date:** {{ $user->created_at->format('M d, Y h:i A') }}
@endcomponent

You can view this user in the admin dashboard.

@component('mail::button', ['url' => config('app.url').'/admin/users/' . $user->id])
View User Profile
@endcomponent

Thanks,<br>
{{ $settings->site_name }}
@endcomponent
