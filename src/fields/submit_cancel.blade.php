<fieldset class="form-group">
    <button type="submit" class="btn btn-outline-success">{!! $submitText !!}</button>
    @if (!empty($cancelText))
        <a href="{{ $cancelRoute }}" class="btn btn-secondary pull-xs-right">{!! $cancelText !!}</a>
    @endif
</fieldset>
