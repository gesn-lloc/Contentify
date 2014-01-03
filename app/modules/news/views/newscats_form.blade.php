{{-- Form Template generated by SmartFormGenerator --}}

{{ Form::errors($errors) }}

@if (isset($entity))
{{ Form::model($entity, ['route' => ['admin.newscats.update', $entity->id], 'files' => true, 'method' => 'PUT']) }}
@else
{{ Form::open(['url' => 'admin/newscats']) }}
@endif
        {{ Form::smartText('title', 'Title') }}
        {{ Form::smartImageFile('image', 'Image') }}
        
    {{ Form::actions() }}
{{ Form::close() }}