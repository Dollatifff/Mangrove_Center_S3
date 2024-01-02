<div class="form-group mb-3">
    <label for="">{{ $label }}</label>
    <textarea type="{{ $type }}" class="form-control @error($field) is-invalid @enderror" id={{ $id ?? '' }} name="{{ $field }}" placeholder="{{ $placeholder ?? '' }}" >{{ old($field) }}</textarea>
    @error($field)
        <span class="text-danger float-end" style="font-size: 11px">{{ $message }}</span>
    @enderror
</div>