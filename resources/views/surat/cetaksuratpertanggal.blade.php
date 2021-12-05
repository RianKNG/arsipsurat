
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 50%;
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
    <h1><center><img src="{{ ('admin/assets/img/logo-dark4.jpg') }}"width="50" height="30"alt="">DataSurat</center></h1>
    <?php

setlocale(LC_TIME, 'id_ID.utf8');

$hariIni = new DateTime();

echo strftime('%a %d %b %Y, %H:%M', $hariIni->getTimestamp());
?>
<div class="font-size 12px:">
  <table id="customers">
    <tr>
      <th width="6px">No</th>
      <th>NoSurat</th>
      <th width="12px">StatusSurat</th>
      <th>Pengirim</th>
      <th>label</th>
      <th>Jumlah</th>
      <th>Tanggal</th>
    </tr>
    @php
        $no=1;
    @endphp
  @foreach ($cetakpertanggal as $srt)
  <tr >  
      <td  id="customers">{{ $no++ }}</td>
      <td>{{ $srt->no_surat }}</td>
      <td>{{ $srt->status_surat }}</td>
      <td>{{ $srt->pengirim }}</td>
      <td>{{ $srt->label }}</td>
      <td>{{ $srt->jumlah}}</td>
      <td>{{ $srt->tanggal }}</td>
  </tr>   
</div>

    
@endforeach

</table>

</body>
</html>

    
    

  
