<x-layout>
   <div class='text-center'>
    <h1>All political parties</h1>
   </div>
    @foreach($political_parties as $politicalParty)
    <div class='row mt-5'>
   <div class='col-8'>
   <h2>{{$politicalParty->name}}</h2>
   
   </div>
   <div class='col-2'>
   <a href="/political_party/{{$political_party->id}}">
        <button class='btn form-control mt-2 btn-secondary'>Edit</button>
    </a>
   </div>
   <div class='col-2'>
   <form action="/city/{{$city->id}}/delete" method="post">
    @csrf
   <button class='btn form-control mt-2 btn-danger'>Delete</button>
   </form>
   </div>
    </div>
    @endforeach
  
  

</x-layout>