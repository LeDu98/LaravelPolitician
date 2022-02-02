<x-layout>
    <x-slot name='title'>
        Login
    </x-slot>
    <div class='col-4'>
        <h3>Login</h3>
        <form action="/api/login" method="post">
            @csrf
            <label>Email</label>
            <input type="text" class='form-control' name='email'>
            <label>Password</label>
            <input type="password" class='form-control' name='password'>


            <button class='btn btn-primary form-control mt-2'>Login</button>
        </form>
        <a href="/register">Registration</a>
    </div>

</x-layout>