<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>DataSurat</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>NoSurat</th>
    <th>StatusSurat</th>
    <th>StatusSurat</th>
    <th>Pengirim</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
  </tr>
  @php
      $no=1;
  @endphp
@foreach ($data as $srt)
<tr >  
    <td>{{ $no++ }}</td>                                 
    <td id="customers">{{ $srt->no_surat }}</td>
    <td>{{ $srt->status_surat }}</td>
    <td>{{ $srt->ba->kode }}</td>
    <td>{{ $srt->pengirim }}</td>
    <td>{{ $srt->tanggal }}</td>
    <td>{{ $srt->keterangan }}</td>
</tr>  
    
@endforeach

</table>

</body>
</html>
