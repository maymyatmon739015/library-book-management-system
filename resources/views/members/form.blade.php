<div class="mb-3">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $member->name ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $member->email ?? '') }}" class="form-control" required>
</div>
<div class="mb-3">
    <label>Password</label>
    <input type="password" name="password" class="form-control" {{ isset($member) ? '' : 'required' }}>
</div>
<div class="mb-3">
    <label>Phone</label>
    <input type="text" name="phone_number" value="{{ old('phone_number', $member->phone_number ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label>Address</label>
    <textarea name="address" class="form-control">{{ old('address', $member->address ?? '') }}</textarea>
</div>
