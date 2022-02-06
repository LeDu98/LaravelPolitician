<x-layout>
    <x-slot name='title'>
        Search
    </x-slot>
    <div class='text-center'>
        <h1>Search political parties</h1>
    </div>
    <div class='row mt-2 text-center'>
        <div class='col-12'>
            <select class='form-control' id="political_party">
                <option value="0">Select political parties</option>
                @foreach($political_parties as $political_party)
                <option value="{{$political_party->id}}">{{$political_party->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class='row mt-2'>
        <div hidden id='content' class='col-12'>
            <table class='table'>
                <thead>
                    <tr>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Gender</th>
                    </tr>
                </thead>
                <tbody id='politician'>


                </tbody>
            </table>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        let politicians = [];
        $(document).ready(function() {
            $.getJSON('http://localhost:8000/api/politician', function(data) {

                politicians = data;
            });
            $('#political_party').change(function() {

                const selected = $('#political_party').val();

                render(politicians.filter(element => selected == '0' || element.political_party_id == selected))
            })
        })

        function render(data) {
            $('#content').attr('hidden', false);
            $('#politician').html('');

            for (let politician of data) {

                $('#politician').append(`
                    <tr>
                        <td>${politician.first_name}</td>
                        <td>${politician.last_name}</td>
                        <td>${politician.gender === 1 ? 'Male' : 'Female'}</td>
                    </tr>
                `)
            }
        }
    </script>
</x-layout>