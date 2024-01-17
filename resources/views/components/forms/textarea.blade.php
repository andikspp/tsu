<div {{ $attributes->merge(['class' => 'form-group mb-2']) }}>
    <label for="{{ $id }}">{{ $label }}{!! $isRequired ? ' <span class="text-danger">*</span>' : '' !!}</label>

    <textarea class="form-control bg-white @error($name) is-invalid @enderror" name="{{ $name }}" id="{{ $id }}" {{
        $isRequired ? 'required' : '' }}>{{ $value ?: old($name) }}</textarea>

    @if($hintText)
    <small class="form-text text-muted">{{ $hintText }}</small>
    @endif

    {{-- With the help of Laravel's Error Bag --}}
    @error($name)
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror
</div>