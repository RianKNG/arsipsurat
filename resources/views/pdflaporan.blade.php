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

#customers tr:hover {background-color: rgb(221, 221, 221);}

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

  {{-- 
  <center><img src="{{ ('admin/assets/img/logo-dark4.jpg') }}"width="30" height="20"alt=""> --}}
      <h1><center><img src="{{ ('admin/assets/img/logo-dark4.jpg') }}"width="50" height="30"alt="">DataSeluruhSurat</center></h1>
      <?php
  
  setlocale(LC_TIME, 'id_ID.utf8');
  
  $hariIni = new DateTime();
  
  echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp());
  ?>
<table id="customers">
  <tr>
    <th width="6px">No</th>
    <th>NoSurat</th>
    <th width="12px">StatusSurat</th>
    <th>Label</th>
    <th>Label</th>
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
    <td>{{ $srt->label }}</td>
    <td>{{ $srt->jml_label }}</td>
    <td>{{ $srt->pengirim }}</td>
    <td>{{ $srt->tanggal }}</td>
    <td>{{ $srt->keterangan }}</td>
</tr>  
    
@endforeach

</table>

</body>
</html>
