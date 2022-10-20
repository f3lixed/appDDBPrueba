<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>Prueba DDB</title>
</head>
<body>
  <div class="container">
    <h1>Usuario</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Segmentation_id</th>
      <th scope="col">Program_id</th>
      <th scope="col">User_id</th>
      <th scope="col">Created_at</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
    <!-- @foreach ($dataUsers as $user)
    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->segmentation_id}}</td>
      <td>{{$user->program_id}}</td>
      <td>{{$user->user_id}}</td>
      <td>{{$user->created_at}}</td>
      <td><a href="/userTransactions/{{$user->id}}">{{$user->id}}</a></td>
    </tr>
    @endforeach -->
  </tbody>
</table>
  </div>
</body>

</html>
