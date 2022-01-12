<x-layout>
    <x-slot name='title'>
    Edit political party
    </x-slot>
    <div class='row mt-2 text-center'>
        <h1>Edit {{$political_party->name}}</h1>
    </div>
    <div class='row mt-2'>
    <div class='col-8'>
    <form action="/political_party/{{$political_party->id}}" method="post">
        @csrf
        <label >ID</label>
        <input type="text" class='form-control' disabled value='{{$political_party->id}}'>
        <label >Name</label>
        <input type="text" name='name' class='form-control' value='{{$political_party->name}}'>
        <label >State</label>
        <select name="country_id" class='form-control'>
            @foreach($states as $state)
                <option value="{{$country->id}}" {{$country->id==$political_party->country_id?'selected':''}} >{{$country->name}}</option>

            @endforeach
        </select>
        <button class='form control btn btn-success mt-4'>Update</button>
    </form>
    </div>
    </div>
</x-layout>