<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Tasks</h1>
                <div class="row">
                    <div class="col-md-12">

                      @foreach($errors->all() as $error)

                      <div class="alert alert-danger" role="alert">
                      
                          {{$error}}
                      
                      </div>

                      @endforeach

                        <form method="post" action="/saveTask">
                        {{csrf_field()}}
                        
                        <input type="text" class="form-control" name="task" placeholder="Enter your task here...">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">

                        </form>

                        <table class="table m-1">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Task</th>
                                <th scope="col">Completed</th>
                              </tr>
                            </thead>
                            <tbody>

                            @foreach($tasks as $task)

                              <tr>
                                <th scope="row">{{$task->id}}</th>
                                <td>{{$task->task}}</td>
                                <td>
                                @if($task->iscompleted)
                                <button class="btn btn-success">Completed</button>
                                @else
                                <button class="btn btn-warning">Not Completed</button>
                                @endif
                                </td>
                              </tr>

                            @endforeach

                            </tbody>
                          </table>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>