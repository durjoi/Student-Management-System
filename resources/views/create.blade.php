@extends('master')
@section('content')
  <div class="row mb-3">
    <div class="col-12 text-center">
      <h2>Add New Student</h2>
    </div>
  </div>
  <div class="row">
    <div class="col-4 offset-4">
      <form class="student-registration" action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
        <table>
          <tr>
            <td>
              <label for="name">Name:</label>
            </td>
            <td>
              <input type="text" name="name" id="name" required>
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </td>
          </tr>
          <tr>
            <td>
              <label for="registration_id">Registration Id:</label>
            </td>
            <td>
              <input type="text" name="registration_id" id="registration_id" required>
              @error('registration_id')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </td>
          </tr>
          <tr>
            <td>
              <label for="department_name">Department:</label>
            </td>
            <td>
              <input type="text" name="department_name" id="department_name" required>
              @error('department_name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </td>
          </tr>
          <tr>
            <td>
              <label for="info">Personal Information:</label>
            </td>
            <td>
              <textarea name="info" id="info" row="10"></textarea>
              @error('info')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <button type="submit" name="button" class="btn btn-success">Register Student</button>
            </td>
          </tr>


        </table>
      </form>
    </div>
  </div>

  <style media="screen">
    input,textarea  {
      width: 100%;
    }
  </style>

@endsection
