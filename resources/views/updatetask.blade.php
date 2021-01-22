<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <br>
        <form  action="/updatetask" method="post">

        {{csrf_field()}}

        <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
        <input type="hidden" name="id" value="{{$taskdata->id}}"/>
        <input type="submit" class="btn btn-warning m-1 float-right" value="Update"/>
        &nbsp;&nbsp;<input type="button" class="btn btn-danger m-1 float-right" value="Cancel">
        </form>
    </div>
</body>
</html>