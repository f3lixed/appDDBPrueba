<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/app.css">
  <title>Prueba DDB</title>
</head>
<body>
  <div class="container">
    <h1>Transacciones de Usuario</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Client_id</th>
      <th scope="col">Segmentation_id</th>
      <th scope="col">Transaction_type_id</th>
      <th scope="col">Transaction_detail</th>
    </tr>
  </thead>
  <tbody>
    @if (count($transactionUsers)==0)
      <tr>
        <th rowspan="5">Este usuario no tiene transacciones</th>
      </tr>
    @else
      @foreach ($transactionUsers as $userTrans)
      <tr>
        <th scope="row">{{$userTrans->id}}</th>
        <td>{{$userTrans->client_id}}</td>
        <td>{{$userTrans->segmentation_id}}</td>
        <td>{{$userTrans->transaction_type_id}}</td>
        <td>{{$userTrans->transaction_detail}}</td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
  </div>
</body>

</html>
