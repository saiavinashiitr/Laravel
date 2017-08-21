<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
            
  <table class="table table-striped">

     <thead>
          <tr>
             <th>Name</th>                                                                           
             <th>Email</th>
           </tr>
     </thead>

    <tbody>
      @foreach ($databitch as $value)  
      <tr> 

        <td>{{ $value->name }}</td><!-- name is taken from database table -->
        <td>{{ $value->email }}</td><!-- email is taken from database table -->
 
      </tr>
      @endforeach
    </tbody>

    <!-- https://docs.google.com/document/d/13tBrCiuJEvsN2RcJVb24IOUyCbONJmllCLIXM9pG3mE/edit?usp=sharing -->

  </table>
</div>

</body>
</html>

