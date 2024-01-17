<div {{ $attributes->merge(['class' => 'mb-3']) }}>
    <label for="{{ $id }}" class="form-label">{{ $label }}{!! $isRequired ? ' <span class="text-danger">*</span>' : ''
        !!}</label> <br>

    <input type="file" class="form-control bg-white @error($name) is-invalid @enderror" name="{{ $name }}"
        id="{{ $id }}" {{ $isRequired ? 'required' : '' }}>

    @if($hintText)
    <small class="form-text text-muted">{{ $hintText }}</small>
    @endif

    @error($name)
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>