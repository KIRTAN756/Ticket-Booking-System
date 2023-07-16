<!doctype html>
<html lang="en">
  <head>
    <title>View</title>
  </head>
  <body>
@extends('home')
@section('content')
<form>
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Bus Scheduals</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="scroll">
                        <table class="table">
                            <tbody>
                                <?php $n = 1;?>
                                @foreach ($ticket as $d)
                                <tr class="test4">
                                    <td><br><br>
                                        <?php echo $n; $n++;?>
                                    </td>
                                    <td >
                                        <a href="/viewReport/detail?id={{$d->Ticket_id}}" class="test4">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Bus</th>
                                                    <td>{{$d->Bus_Name}}</td>
                                                    <th>Time</th>
                                                    <td>{{$d->Time}}</td>
                                                </tr>
                                                <tr>
                                                    <th>From</th>
                                                    <td>{{$d->From}}</td>
                                                    <th>To</th>
                                                    <td>{{$d->Destination}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Ticket Price</th>
                                                    <td colspan='3'>₹ {{$d->Price}}</td>
                                                </tr>
                                            </tbody>
                                        </table></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
<form>
@endsection
</body>
</html>