```php
<x-app-layout>

<h1 class="text-xl font-bold mb-4">Edit Service Type</h1>

<form method="POST" action="{{ route('service-types.update', $serviceType) }}">
    @csrf
    @method('PUT')

    <div>
        <label>Name</label><br>
        <input type="text" name="name" value="{{ $serviceType->name }}" required>
    </div>

    <div>
        <label>SU Factor</label><br>
        <input type="number" step="0.01" name="su_factor" value="{{ $serviceType->su_factor }}" required>
    </div>

    <div>
        <label>Description</label><br>
        <textarea name="description">{{ $serviceType->description }}</textarea>
    </div>

    <br>

    <button type="submit">Update</button>

</form>

</x-app-layout>
```
