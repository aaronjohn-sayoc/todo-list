<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<title>Mod08-07</title>
</head>
<body>

	<div class="container-fluid m-3 p-0">
		<div class="row justify-content-center">
			<div class="col-6 text-center">
				<form class="form-group">
					<label for="new-task" class="lead">New Task</label>
					<input type="text" name="name" id="new-task" class="form-control">
					<button id="add-task" class="btn btn-primary my-3 btn-lg">Add Task</button>
				</form>			
			</div>
		</div>
	</div>




    <script>
        $(document).ready(function(){
            $("#add-task").click(function(){
                const newtask=$("#new-task").val();
                $.ajax({
                    url:'controllers/add_task.php',
                    method:'GET',
                    data:{
                        name:newtask,
                    },
                   success:function(data){
                   }
                });
            });
        });
    </script>


	<div class="container-fluid m-0 p-0">
		<div class="row justify-content-center">
			<div id="taskList" class="col-4 text-center">			
					<?php

					require_once ("controllers/connection.php");

					$sql = "SELECT * FROM tasks";

					$result = mysqli_query($conn, $sql);

					while($row = mysqli_fetch_assoc($result)) { ?>
					<div data-id="<?php echo $row['id'] ; ?>">
						<?php echo " Task number " . $row['id'] . " is " . $row['name']  ; ?>
						<button class="btn btn-danger deleteBtn my-2">Delete</button>
					</div>
					<?php } ?>
			</div>
		</div>
	</div>


		<script>
	      $('#taskList').on('click', '.deleteBtn', function() {
	        const task_id = $(this).parent().attr('data-id');
	        alert(task_id);
	        $.ajax({
	          method: 'POST',
	          url: 'controllers/remove_task.php',
	          data: { task_id : task_id }
	        }).done( data => {
	          $(this).parent().fadeOut();
	        });
	      });
		</script>


	







<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>