<!doctype html>
<html lang="en">
  <head>
    <title>Add Bus</title>
  </head>
  <body>
@extends('home')
@section('content')
<form method="post" action="addBus">
    @csrf
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Add Bus</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td colspan='2'>
                                    <div class="form-group">
                                      <label>Bus Name</label>
                                      <input type="text"
                                        class="form-control" name="bus" required placeholder="4D">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <div class="form-group">
                                      <label>Ticket Price</label>
                                      <input type="text"
                                        class="form-control" name="price" required placeholder="500-1000">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group">
                                        <label>From</label>
                                        <select class="form-control" required name="from">
                                            <option selected disabled>--</option>
                                            @foreach ($city as $d)
                                                <option value="{{$d->City_Name}}">{{$d->City_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <label>To</label>
                                        <select class="form-control" required name="to">
                                            <option selected disabled>--</option>
                                            @foreach ($city as $d)
                                                <option value="{{$d->City_Name}}">{{$d->City_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'>
                                    <div class="form-group">
                                      <label>Date</label>
                                      <input type="datetime-local"
                                        class="form-control" name="date" required>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <button type="submit" class="btn btn-primary">Add Bus</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection
</body>
</html>
