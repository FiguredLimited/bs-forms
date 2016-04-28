<fieldset class="form-group{{ $errors->has($name) ? ' has-danger' : '' }}">
    <label>{{ $attributes['label'] or ucwords(str_replace('_', ' ', $name)) }}</label>
    {!! \Collective\Html\FormFacade::text(
            $name,
            (isset($attributes['value'])) ? $attributes['value'] : null,
            [
                'class' => 'form-control',
                'placeholder' => (isset($attributes['placeholder'])) ? $attributes['placeholder'] : ''
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