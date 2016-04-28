<fieldset class="form-group{{ $errors->has($name) ? ' has-danger' : '' }}">
    <label>{{ $attributes['label'] or ucwords(str_replace('_', ' ', $name)) }}</label>
    {!! \Collective\Html\FormFacade::password(
            $name,
            [
                'class' => 'form-control',
                'placeholder' => $attributes['placeholder'] ?? ''
            ]
        )
    !!}
    @if ($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif
    @if (!empty($attributes['help']))
        <div class="text-muted">{{ $attributes['help'] }}</div>
    @endif
</fieldset>