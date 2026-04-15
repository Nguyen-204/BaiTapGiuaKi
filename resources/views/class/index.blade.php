@extends('layout.app')

@section('content')

<div class="card card-pro p-4">

<h3>📚 Danh sách lớp học</h3>

<a href="/classes/create" class="btn btn-primary mb-3">➕ Thêm lớp</a>

<table class="table table-bordered table-hover">
<tr>
<th>ID</th>
<th>Tên lớp</th>
<th>Giáo viên</th>
<th>Sinh viên</th>
<th>Hành động</th>
</tr>

@foreach($classes as $c)
<tr>
<td>{{$c->id}}</td>
<td>{{$c->name}}</td>
<td>{{$c->teacher}}</td>
<td>{{$c->students}}</td>
<td>
<a href="/classes/edit/{{$c->id}}" class="btn btn-warning btn-sm">Sửa</a>
<a href="/classes/delete/{{$c->id}}" class="btn btn-danger btn-sm">Xóa</a>
</td>
</tr>
@endforeach

</table>

{{ $classes->links() }}

</div>

@endsection