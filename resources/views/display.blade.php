<x-layout>
    <h1></h1>
<!--
  
<div class="container mt-5">
    <div class="row">
        
            <div class="col">
            

    @foreach($employees as $employee)
   

    <div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <h5 class="card-title">Name : {{$employee->name}}</h5>
    <p class="card-text">Age:{{$employee->age}}</p>
    <p class="card-text">Salary:{{$employee->salary}}</p>
    <a href="#" class="btn btn-primary">{{$employee->email}}</a>
    <a href="#" class="btn btn-primary mt-1">Edit</a>
    <a href="#" class="btn btn-primary mt-1">Delete</a>
  
  @endforeach
  </div>
</div>

  
                    
        </div>
-->
@if(session('deleted'))
<x-alert text="Deleted!" detail="The employee has been deleted!" class="danger"></x-alert>
@endif

@if(session('updated'))
<x-alert text="Updated!" detail="The employee has been updated!" class="info"></x-alert>
@endif

@if(session('bulkDelete'))
<x-alert text="Failed" detail="No Item selected!" class="warning"></x-alert>
@endif

 <form action="{{ route('bulkDelete') }}" method="POST">
    @csrf
    <button name="bulkDelete"class="btn btn-danger"> Delete</button>

<div class="container">
  <div class="row">

 
  

  @foreach($employees as $employee)
  <div class="col-sm my-2">
    <div class="card" style="width: 18rem;">
  
  <div class="card-body">
    <input type="checkbox" name="ids[]" value="{{ $employee->id }}"/>
    <h5 class="card-title">Name : {{$employee->name}}</h5>
    <p class="card-text">Age: {{$employee->age}}</p>
    <p class="card-text">Salry: {{$employee->salary}}</p>
    <a href="#" class="btn btn-primary">{{$employee->email}}</a>
    <!--<a href="#" class="btn btn-warning mt-1">Edit</a> -->
    <form action="{{ route('update-form', ['id' => $employee->id]) }}"  method="GET">
      @csrf
      <button class="btn btn-warning mt-1">Edit</button>
    </form>
    <form action="{{ route('delete-data', ['id' => $employee->id]) }}"  method="POST">
      @csrf
      <button class="btn btn-danger mt-1">Delete</button>
    </form>
  </div>
</div>

    </div>
    
  @endforeach
 
</form>
  {{$employees->links()}}

  </div>
</div>
<!--

<div class="col-sm">
  <div class="card" style="width: 18rem;">
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
-->


  

              
</x-layout>