<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel PDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  </head>
  <body>
    <h2 class="mb-3">Financials Statement</h2>
    <table class="table table-bordered">
    <thead>
      <tr>
        <th style="background-color:aqua">ID</th>
        <th style="background-color:aqua">Month</th>
        <th style="background-color:aqua">Profit </th>
        <th style="background-color:aqua">Loss</th>
        <th style="background-color:aqua"> Ultimate Profit</th>
      </tr>
      </thead>
      <tbody>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->month}}</td>
            <td>{{ $row->profit}}</td>
            <td>{{ $row->loss}}</td>
            <td>
                               
                                 <font color="green"> {{$row->ultimate_profit}} </font> 
                                </td>
        </tr>
        @endforeach
      </tbody>
    </table>
        <font color="black"> The Report Was Printed By : {{session('user_name')}} </font>
  </body>
</html>