
    <x-layout>

        @if(session('saved'))
        <x-alert text="Added!" detail="The employee has been added!" class="success"></x-alert>
        @endif
       
        <div class="container">
            <form method="POST" action="store-data">
            @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="input-group mb-3">
  <input type="text" name="username" class="form-control" placeholder="Recipient’s username" aria-label="Recipient’s username" aria-describedby="basic-addon2">

</div>
<div class="input-group mb-3">
  <input type="text" name="age" class="form-control" placeholder="Recipient’s age" aria-label="Recipient’s age" aria-describedby="basic-addon3">
  
</div>
<div class="input-group mb-3">
  <input type="text" name="salary" class="form-control" placeholder="Recipient’s salary" aria-label="Recipient’s salary" aria-describedby="basic-addon3">
  
</div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>





        

  
  
        

    </x-layout>
