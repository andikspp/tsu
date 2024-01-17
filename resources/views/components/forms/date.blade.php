<div {{ $attributes->merge(['class' => 'form-group mb-2']) }}>
    <label for="{{ $id }}">{{ $label }}{!! $isRequired ? ' <span class="text-danger">*</span>' : '' !!}</label>

    <input type="date" class="form-control bg-white @error($name) is-invalid @enderror" name="{{ $name }}"
        id="{{ $id }}" value="{{ $value }}" {{ $isRequired ? 'required' : '' }}>

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