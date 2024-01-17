<div {{ $attributes->merge(['class' => 'form-group mb-2']) }}>
    <label for="{{ $id }}">{{ $label }}{!! $isRequired ? ' <span class="text-danger">*</span>' : '' !!}</label>

    <select class="form-control bg-white @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $id }}" {{
        $isRequired ? 'required' : '' }}>
        @foreach($options as $key => $value)
        <option value="{{ $key }}" @if($selected==$key) selected @endif>{{ $value }}</option>
        @endforeach
    </select>

    @if($hintText)
    <small class="form-text text-muted">{{ $hintText }}</small>
    @endif

    @error($name)
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>