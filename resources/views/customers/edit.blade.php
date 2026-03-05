<x-app-layout>

<h1>Edit Customer</h1>

<form method="POST" action="{{ route('customers.update',$customer) }}">
@csrf
@method('PUT')

Name
<input type="text" name="name" value="{{ $customer->name }}">

Email
<input type="text" name="email" value="{{ $customer->email }}">

Phone
<input type="text" name="phone" value="{{ $customer->phone }}">

<button type="submit">Update</button>

</form>

</x-app-layout>