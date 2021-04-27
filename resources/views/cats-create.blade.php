<form method="POST" action="/cats">

  @csrf

  <label>Name</label>  
  <input name="name">
    
  <label>Breed</label>  
  <input name="breed">
    
  <label>Age</label>  
  <input name="age" type="number">
  
  <button>Submit</button>

</form>