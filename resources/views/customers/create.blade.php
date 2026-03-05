<x-app-layout>

<h1>Add Customer</h1>

<form method="POST" action="{{ route('customers.store') }}">
@csrf

Name
<input type="text" name="name">

Email
<input type="text" name="email">

Phone
<input type="text" name="phone">

<button type="submit">Save</button>

</form>

</x-app-layout>