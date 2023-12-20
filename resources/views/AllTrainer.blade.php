<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Fitness GYM</h1>
  <div class="float-righter-5"> 
    <a href="" class="btn btn-primary"  data-toggle="modal" data-target="myModal">> Add New Trainer</a>
</div>
  
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
     <div class="col-10">
        <ul class="list-group">
  <li class="list-group-item">Trainer</li>
  <li class="list-group-item">Member</li>
 </ul>


     </div>

    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>Trainer Name</td>
                <td>Trainer Batch</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>

        <tbody>
        @foreach($trainer as $t)
        <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->Trainer_Name}}</td>
                <td>{{$t->Trainer_Batch}}</td>
                <td><a href=""class='btn btn-warning editBtn' data-toggle="modal" data-target="#myModal">Edit</a></td>

               
                <td><a href=""class='btn btn-warning'>Delete</a></td>
                
            </tr>


        @endforeach

        </tbody>

    </div>
   
<div class="model" id='#myModel'>
    <div class="model-diolog">
        <div class="model-content">



<!-- Modal -->
      <div class="modal-header">
        <h5 class="modal-title">Add Trainer</h4>
        <button type="button" class="close" data-dismiss="modal"> 
                  </button>
      </div>
      <div class="modal-body">
        
      <form action="trainer" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Trainer Name</label>
            <input type="text" id='Trainer_Name' name="Trainer_Name" class="for control">
        </div>

        <div class="form-group">
            <label for="">Trainer Batch</label>
            <input type="text" id='Trainer_Batch' name="Trainer_Batch" class="for control">
        </div>

        <div class="form-group">
            
            <input type="submit" id='submit' name="submit" class="btn btn-success">
        </div>
      </form>
     
    </div>
  </div>
</div>

<script>
    $('.editBtn').class(function(e){
      console.log(e.target.parentElement.previous)
      // batch = e.target.parentElement.previousElement.innerTest;
       //name = e.target.parentElement.previousElement.innerTest;
       //id = e.target.parentElement.previousElement.innerTest;
       //console.log(batch + name + id)

        $('#myModal').modal('show');
            $('#myModal').modal('show');
    })
</script>

</body>
</html>