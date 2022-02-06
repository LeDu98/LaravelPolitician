<x-layout>
    <x-slot name='title'>
        Politicians
    </x-slot>
    <div class='row mt-2'>
        <div class='col-8'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                        <th>Political party</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($politician as $politician)
                    <tr>
                        <td>{{$politician->first_name}}</td>
                        <td>{{$politician->last_name}}</td>
                        <td>{{$politician->gender==1?'M':'W'}}</td>
                        <td>{{isset($politician->political_party)?$politician->political_party->name:'NA'}}</td>
                        <td>
                            <form action="/politician/{{$politician->id}}/delete" method="post">
                                @csrf
                                <button class='btn btn-danger form-control' name='delete'>Delete</button>
                            </form>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
        <div class='col-4'>
            <h3>Create politician</h3>
            <form action="/politician" method="post">
                @csrf
                <label>First name</label>
                <input type="text" class='form-control' name='first_name'>
                <label>Last name</label>
                <input type="text" class='form-control' name='last_name'>
                <label>Gender</label>
                <select class='form-control' name="gender">
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
                <label>Political party</label>
                <select class='form-control' name="political_party_id">
                    @foreach($political_party as $political_party)
                    <option value="{{$political_party->id}}">{{$political_party->name}}</option>
                    @endforeach
                </select>
                <button class='btn btn-primary form-control mt-2'>Create</button>
            </form>
        </div>
    </div>
</x-layout>