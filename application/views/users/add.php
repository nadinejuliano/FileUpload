<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top: 40px;">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">

<?php
    if ($this->session->flashdata('success_msg')){ //change!
        echo '<div class="alert alert-success" role="alert">';
        echo $this->session->flashdata('success_msg');
        echo "</div>";
    }
?>

<?php
    if ($this->session->flashdata('error_msg')){ //change!
        echo '<div class="alert alert-danger" role="alert">';
        echo $this->session->flashdata('error_msg');
        echo "</div>";
    }
?>


<form role="form" method="post" enctype="multipart/form-data">


    <div class="panel">
        <div class="panel-body">
            <div class="form-group">
                <label>Picture</label>
                <input class="form-control" type="file" name="picture" />
            </div>
            <div class="form-group">
                <label>Name</label>
                <input class="form-control" type="text" name="name" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" type="text" name="email" />
            </div>
             <div class="form-group">
                <input type="submit" class="btn btn-warning" name="userSubmit" value="Add">
            </div>
        </div>
    </div>
</form>
</div>
<div class="col-md-3"></div>
</div>
</div>

</body>
</html>