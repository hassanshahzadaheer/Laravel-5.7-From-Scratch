@component('mail::message')
# Introduction {{$project->title}}

{{$project->description}}

@component('mail::button', ['url' => url('/projects/'.$project->id)])
View project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
