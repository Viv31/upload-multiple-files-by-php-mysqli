<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Multiple Files in PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style type="text/css">
    body{
      background-image: url('img/bg.jpg');
      background-repeat: no-repeat;
      background-size: cover;

    }
    .form_box{
      background-color: rgba(0,0,0,0.5);
      margin-top: 100px;
      height: 400px;
    }
    #form_container{
      margin-top: 150px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto form_box">
      <div class="col-md-12 mx-auto p-10 text-white" id="form_container">
    <form action="upload_img.php" method="POST" enctype="multipart/form-data">
      <div class="form-group">
        <label>Upload Multiple Certificate:</label>
        <input type="file" name="certificate[]" id="certificate" class="form-control" value=""  multiple="multiple">
      </div>
      <input type="submit" name="upload" id="upload" value="Upload" class="btn btn-primary">
      
    </form> 
    
  </div>
  </div>
</div>

  </div>
</body>