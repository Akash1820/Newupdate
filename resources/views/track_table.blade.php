<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


</head>
<body>


  <form action="track_detail" method="post">
    
  {{csrf_field()}}
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 120%;">
      <div class="modal-header text-center">
        <h4>TRACK YOUR COMPLAINT HERE </h4>
      </div>
      <div class="modal-body mx-3">
        <table class="table">
  <thead class="thead-light">
    <tr style="width: 100%">
      <th scope="col">COMPLAINT ID</th>
      <th scope="col">DATE</th>
      <th scope="col">COMPLAINANT NAME</th>
      <th scope="col">STATUS</th>
      <th scope="col">REMARKS</th>

    </tr>
  </thead>



  <tbody>
                 <tr>
          <td>{{$details['User_ID']}}</td>
          <td>{{$details['Date']}}</td>
          <td>{{$details['User_Name']}}</td>
          <td>{{$details['Status']}}</td>
          <td>{{$details['Remarks']}}</td>
          
         
    </tr>
      
  </tbody>
</table>

      </div>

  


</body>
</html>




