<!doctype html>
<html lang="en">
  <head>
    <title>Book</title>
  </head>
  <body>
@extends('home')
@section('content')
<form>
  <table class="table">
    <thead>
      <tr>
        <th>Bus Name</th>
        <th>Detail</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($bus as $d)
      <tr>
        <td><br><br>{{$d->Bus_Name}}</td>
        <?php $ticket1 = []; ?>
        <td>
          <table class="table">
            <tbody>
              <tr>
                <th>From</th>
                <td>{{$d->From}}</td>
                <th>To</th>
                <td>{{$d->Destination}}</td>
              </tr>
              <tr>
                <th>Time</th>
                <td>{{$d->Time}}</td>
                <th>Price Per Ticket</th>
                <td>
                  @foreach ($priceper as $p)
                    @if ($d->Bus_Name == $p->Bus_Name)
                    {{$p->Price}}
                    @endif
                  @endforeach
                </td>
              </tr>
              <tr>
                <th>Ticket Number:</th>
                <td>
                  @foreach ($ticket as $t)
                    @if ($d->Bus_Name == $t->Bus_Name)
                      <?php $ticket1 = $t->Ticket_Number ?>  
                      {{$ticket1}}    
                    @endif
                  @endforeach
                </td>
                <th>Total Cost</th>
                <td>
                  <?php $total = 0; ?>
                  @foreach ($price as $t)
                    @if ($d->Bus_Name == $t->Bus_Name)
                        <?php $total += $t->Price; ?>
                    @endif
                  @endforeach
                  ₹ {{$total}}
                  <?php $total = 0; ?>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</form>
@endsection
</body>
</html>