```php
<x-app-layout>
    <h1 class="text-xl font-bold mb-4">Service Types</h1>

    <a href="{{ route('service-types.create') }}">Add Service Type</a>

    <table border="1" cellpadding="5">
        <tr>
            <th>Name</th>
            <th>SU Factor</th>
            <th>Actions</th>
        </tr>

        @foreach($serviceTypes as $type)
        <tr>
            <td>{{ $type->name }}</td>
            <td>{{ $type->su_factor }}</td>
            <td>
                <a href="{{ route('service-types.edit', $type) }}">Edit</a>

                <form method="POST" action="{{ route('service-types.destroy', $type) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>
</x-app-layout>
```
