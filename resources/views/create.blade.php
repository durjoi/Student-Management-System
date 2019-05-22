@extends('master')
@section('content')
  <div class="row">
    <div class="col-8 offset-2">
      <form class="studen-registration" action="{{ route('store') }}" method="post">
        {{ csrf_field() }}
        <table style="width: 100%">
          <tr>
            <td>
              <label for="name">Name:</label>
            </td>
            <td>
              <input type="text" name="name" id="name">
            </td>
          </tr>
          <tr>
            <td>
              <label for="registration_id">Registration Id:</label>
            </td>
            <td>
              <input type="text" name="registration_id" id="registration_id">
            </td>
          </tr>
          <tr>
            <td>
              <label for="department_name">Department:</label>
            </td>
            <td>
              <input type="text" name="department_name" id="department_name">
            </td>
          </tr>
          <tr>
            <td>
              <label for="info">Personal Information:</label>
            </td>
            <td>
              <textarea name="info" id="info" row="10"></textarea>
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
