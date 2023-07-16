<!doctype html>
<html lang="en">
  <head>
    <title>Add</title>
  </head>
  <body>
@extends('home')
@section('content')
<form method="post" action="addCity">
    @csrf
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Add City</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <div class='scroll'>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>City Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $n = 1;?>
                                @foreach ($city as $d)
                                <tr>
                                    <td>
                                        <?php echo $n; $n++;?>
                                    </td>
                                    <td>{{$d->City_Name}}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan='2'>
                                        <div class="form-group">
                                          <label for="">Enter City Name</label>
                                          <input type="text"
                                            class="form-control" name="city" placeholder="Ahmedabad" required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align='center' colspan='2'>
                                        <button type="submit" class="btn btn-primary" onclick="return alert('City Added')">Add</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection
</body>
</html>