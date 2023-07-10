@extends('layouts.backend')

@section('content')
<link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        
<div>
    <a class="text-black" href="{{ URL::to('/tambah-data-mobil') }}"><button type="button" class="btn btn-secondary col-12 btn-sm" style="margin-bottom: 15px;">Tambah Data Mobil</button></a>

    <table class="table table-hover" id="data_table" style="clear: both;">
        <thead>
        <tr>
            <th>No</th>
            <th>Merk Mobil</th>
            <th>Tipe Mobil</th>
            <th>Plat Nomor</th>
            <th>Tarif per Hari</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        @php $i = 1 @endphp
        @foreach($mobils as $mobil)

        <tr>
            <td>{{$i}}</td>
            <td>{{$mobil->merek}}</td>
            <td>{{$mobil->model}}</td>
            <td>{{$mobil->plat_no}}</td>
            <td>{{"Rp. " . number_format($mobil->tarif, 0 , '' , '.')}}</td>
            <td>@if($mobil->status == 1)
                    {{"Sedang Disewa"}}
                @else
                    {{"Tidak Sedang Disewa"}}
                @endif
            </td>
            <td><button type="button" class="btn btn-danger col-12 btn-sm" style="margin-bottom: 15px;">Hapus Data</button><button type="button" class="btn btn-info col-12 btn-sm" style="margin-bottom: 15px;">Edit Data</button></td>
        </tr>

        @php $i++ @endphp
        @endforeach
        </tbody>
    </table>    
</div>

<script type="text/javascript">
    
    $(document).ready(function() {
        $('#data_table').DataTable();
    });

</script>
@endsection
