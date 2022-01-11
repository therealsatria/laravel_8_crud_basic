<!DOCTYPE html>
<html>
<head>
<style>
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
</head>
<body>

<h2>Let the table borders collapse</h2>

<table>
  <tr>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Telp</th>
  </tr>
  @foreach ($data as $index => $row)
  <tr>
    <td>{{$row->nama}}</td>
    <td>{{$row->jk}}</td>
    <td>{{$row->telp}}</td>
  </tr>
  @endforeach

</table>

</body>
</html>


