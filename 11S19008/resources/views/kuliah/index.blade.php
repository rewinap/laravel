<h1>Data Kuliah</h1>
<hr>
<table border="1">
  <tr>
    <th>Kode</th>
    <th>Perkuliahan</th>
    <th>Minggu</th>
    <th>Topik</th>
    <th>Deskripsi</th>
  </tr>

  @foreach ($data as $kuliah) 
  <tr>
    <td>{{$kuliah->kode_kuliah}}</td>
    <td>{{$kuliah->kode_kuliah}}</td>
    <td>{{$kuliah->minggu_ke}}</td>
    <td>{{$kuliah->topik}}</td>
    <td>{{$kuliah->deskripsi}}</td>
  </tr>
</table>

@endforeach