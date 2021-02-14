@component('mail::message')
# Your post was liked

{{ $liker->name }} liked one of your posts.

@component('mail::button', ['url' => route('post.show', $post)])
Your post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
