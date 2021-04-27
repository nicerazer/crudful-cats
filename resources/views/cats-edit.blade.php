{{-- Update Form --}}
<form method="POST" action="/cats/{{ $cat->id }}">
  
  @csrf
  @method('PUT')
  
  <div class="mb-3">
    <label class="form-label">Name</label>  
    <input name="name" value="{{ $cat->name }}" class="form-control">
  </div>

  <div class="mb-3">
    <label class="form-label">Breed</label>  
    <input name="breed" value="{{ $cat->breed }}" class="form-control">
  </div>
    
  <div class="mb-3">
    <label class="form-label">Age</label>  
    <input name="age" value="{{ $cat->age }}" type="number" class="form-control">
  </div>
  
  <button class="btn btn-primary">Submit</button>

</form>

{{-- Delete Form --}}
<form method="POST" action="/cats/{{ $cat->id }}">
  
  @csrf
  @method('DELETE')
  
  <button>Delete The Cat</button>

</form>