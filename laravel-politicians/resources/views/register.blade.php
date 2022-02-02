<x-layout>
    <x-slot name='title'>
        Registration
    </x-slot>
    <div class='col-4'>
        <h3>Registration</h3>
        <form action="/api/register" method="post">
            @csrf
            <label>Name</label>
            <input type="text" class='form-control' name='name'>
            <label>Email</label>
            <input type="text" class='form-control' name='email'>
            <label>Password</label>
            <input type="password" class='form-control' name='password'>


            <button class='btn btn-primary form-control mt-2'>Register</button>
        </form>

    </div>

</x-layout>