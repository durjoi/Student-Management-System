@extends('master')

@section('content')
  <table class="table table-hover">
      <tr>
        <th>SL</th>
        <th>Registration ID</th>
        <th>Name</th>
        <th>Department</th>
        <th>Information</th>
        <th>Action</th>
      </tr>
      @php $i = 0; @endphp
      @foreach ($students as $student)
        <tr>
          @php $i++ @endphp
          <td>{{ $i }}</td>
          <td>{{ $student->registration_id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->department_name }}</td>
          <td>{{ $student->info }}</td>
          <td class="d-flex">
            <a href="{{ route('edit',$student->id) }}" class="btn btn-success mr-2">Edit</a>
            <form class="inline-form" action="{{ route('delete', $student->id) }}" method="post">
              {{ csrf_field() }}
              <input type="submit" value="Delete" class="btn btn-danger">
            </form>
          </td>
        </tr>
      @endforeach
  </table>
@endsection
