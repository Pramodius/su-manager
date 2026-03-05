<x-app-layout>

<h1 class="text-xl mb-4">Customers</h1>

<a href="{{ route('customers.create') }}">Add Customer</a>

<table border="1" cellpadding="5">
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Actions</th>
</tr>

@foreach($customers as $customer)
<tr>
<td>{{ $customer->name }}</td>
<td>{{ $customer->email }}</td>
<td>{{ $customer->phone }}</td>
<td>
<a href="{{ route('customers.edit',$customer) }}">Edit</a>

<form action="{{ route('customers.destroy',$customer) }}" method="POST" style="display:inline">
@csrf
@method('DELETE')
<button type="submit">Delete</button>
</form>

</td>
</tr>
@endforeach

</table>

</x-app-layout>