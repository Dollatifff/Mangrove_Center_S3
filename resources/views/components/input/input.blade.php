<div class="form-group mb-3">
    <label for="">{{ $label }}</label>
    <input 
    type="{{ $type }}" 
    value="{{ old($name) }}"
    class="form-control @error($name) is-invalid @enderror" 
    id={{ $id ?? '' }} 
    name="{{ $name ?? '' }}" 
    placeholder="{{ $placeholder ?? '' }}" 
    
    >
    @error($name)
        <span class="text-danger float-end" style="font-size: 11px">{{ $message }}</span>
    @enderror
</div>