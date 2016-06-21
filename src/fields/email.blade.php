<fieldset class="form-group{{ $errors->has($name) ? ' has-danger' : '' }}">
    <label>{{ $attributes['label'] or ucwords(str_replace('_', ' ', $name)) }}</label>
    {!! \Collective\Html\FormFacade::email(
            $name,
            (isset($attributes['value'])) ? $attributes['value'] : null,
            array_merge([
                'class' => (isset($attributes['class'])) ? $attributes['class'].' form-control' : 'form-control',
            ],
            // Removes the 'value', 'class' and 'label' keys from the merge
            array_diff_key($attributes, ['value' => null, 'class' => null, 'label' => null]))
        )
    !!}
    @if ($errors->has($name))
        <div class="text-danger">{{ $errors->first($name) }}</div>
    @endif
    @if (!empty($attributes['help']))
        <div class="text-muted">{{ $attributes['help'] }}</div>
    @endif
</fieldset>
