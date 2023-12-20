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
                <td>Member_Name</td>
                <td>Member_Phone</td>
                <td>Trainer_Name</td>
                <td>Trainer_Batch</td>
                <td>Trainer_id</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        </thead>

        <tbody>
        @foreach($member as $t)
        <tr>
                <td>{{$t->id}}</td>
                <td>{{$t->Member_Name}}</td>
                <td>{{$t->Member_phone}}</td>
                <td>{{$t->mytrainer}}</td>
                <td></td>
                <td></td>
                
                <td><a href=""class='btn btn-warning editBtn' data-toggle="modal" data-target="#myModal">Edit</a></td>

                <form action="{{ route('member.destroy', ['member' => $t->id]) }}" method='POST'>
                  @csrf
                  @method('DELETE')
                    <input type="submit"class='btn btn-dander' value="Delete">
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
        
      <form action="member" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Member Name</label>
            <input type="text" id='Member_Name' name="Member_Name" class="form-control">
        </div>
       <div class="form-group">
            <label for="">Phone</label>
            <input type="text" id='Member_Phone' name="Member_Phone" class="for-control">
        </div>

       <div class="form-group">
            <label for="">Trainer_id</label>
          <!--  <input type="text" id='Trainer_id' name="Trainer_id" class="for-control"> -->
          <select name="Trainer_id"id="Trainer_id" class="form-control">
            <option value=""selected disabled>select Trainer</option>
            @foreach($trainer as $tr)
                    <option value="{{$tr->id}}">{{$tr->Trainer_Name}}</option>
            @endforeach

          </select>
        </div>

        <div class="form-group">
            
            <input type="submit" id='submit' name="submit" class="btn btn-success">
        </div>
      </form>
      </div>
     
    </div>
  </div>
</div>

<script>
    $('.editBtn').class(function(e){

      Trainer_id = e.target.parentElement.previousElementSibling.querySelect('input[type="hidden"]').value;

       member_Name = e.target.parentElement.previousElement.innerTest;
       member_Phone = e.target.parentElement.previousElement.innerTest;
       id = e.target.parentElement.previousElement.innerTest;
      
         console.log(batch + name + id)
         $('#Memberer_Name').val(member_Name);
         $('#Memberer_Phone').val(member_Phone);
         $('#Trainer_id').val(Trainer_id);

         $('#fore').attr('action','membg66er/',id);
         $('#fore').append("<input type='hidden' name='_method' value='PUT'>")

         $('#myModel').modal('show');


        $('#myModal').modal('show');
            $('#myModal').modal('show');
    })
</script>

</body>
</html>