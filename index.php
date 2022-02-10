<!DOCTYPE html>
<html lang="en">
<head>
  <title>To-Do</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
</head>
<body>

  <div class="container">
    <h2>Add Task</h2>
    <form>
      <div class="form-group">
        <label>Title:</label>
        <input type="text" class="form-control" id="title" placeholder="">
      </div>
      <div class="form-group">
        <label>Description:</label>
        <input type="text" class="form-control" id="description" placeholder="">
      </div>
 
      <input type="button" onClick="addTask()" class="btn btn-warning" value="Add">
    </form>
  </div>

  <!-- <button onClick="buildTable()">show</button> -->


    <div class="container">
              
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Delete</th>
          
          </tr>
        </thead>
    
        <tbody id="my"></tbody>
      </table>
    </div>
            
            

    <script src="index.js"></script>

</body>


</html>
