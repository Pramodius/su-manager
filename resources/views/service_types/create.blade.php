```php
<x-app-layout>

<h1 class="text-xl font-bold mb-4">Add Service Type</h1>

<form method="POST" action="{{ route('service-types.store') }}">
    @csrf

    <div>
        <label>Name</label><br>
        <input type="text" name="name" required>
    </div>

    <div>
        <label>SU Factor</label><br>
        <input type="number" step="0.01" name="su_factor" required>
    </div>

    <div>
        <label>Description</label><br>
        <textarea name="description"></textarea>
    </div>

    <br>

    <button type="submit">Save</button>

</form>

</x-app-layout>
```
