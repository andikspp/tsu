<div {{ $attributes->merge(['class' => 'form-group mb-2']) }}>
    <label for="{{ $id }}">{{ $label }}{!! $isRequired ? ' <span class="text-danger">*</span>' : '' !!}</label>
    <input type="{{ $type }}" class="form-control bg-white @error($name) is-invalid @enderror" name="{{ $name }}"
        id="{{ $id }}" @if( $value !==null && $value !=="" ) value="{{ $value }}" @else value="{{ old($name) }}" @endif
        {{ $isRequired ? 'required' : '' }}>

    @if($hintText)
    <small class="form-text text-muted">{{ $hintText }}</small>
    @endif

    {{-- Dengan Bantuan Error Bag dari Laravel --}}
    @error($name)
    <span class="invalid-feedback" role="alert">
        {{ $message }}
    </span>
    @enderror

</div>