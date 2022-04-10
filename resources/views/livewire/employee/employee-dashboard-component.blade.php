<div>
<form class="container" method="post" action="{{route('NewUser')}}">
@csrf

   <div class="form-group">
      <label for="inputName">Name</label>
      <input type="text" class="form-control"  name="name" id="name" :value="old('name')" placeholder="Name">
      
   </div>

   <div class="form-group">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" name="email" id="email" :value="old('email')" placeholder="Email">
   </div>

   <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>

   <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Customer</legend>
         <div class="col-sm-10">

            <div class="form-check">
               <input class="form-check-input" type="radio" name="utype" id="gridRadios1" value="C" checked>
               <label class="form-check-label" for="gridRadios1">
                  Customer
               </label>
            </div>
         </div>
   </div>

  <button type="submit" class="btn btn-primary">Add</button>

</form>

</div>
