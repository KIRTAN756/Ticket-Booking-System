<!doctype html>
<html lang="en">
  <head>
    <title>Book</title>
  </head>
  <body>
@extends('home')
@section('content')
  <form>
    @csrf
    <table class="table">
      <tbody>
        <tr>
          <td>
            <h3>Report</h3>
          </td>
          <td align='right' colspan='3'>
            <b4-link>
              <a href="{{ url()->previous() }}"><i class="bi-x-square" style='font-size: 30px; color: black;'></i></a>
            </b4-link>
          </td>
        </tr>
        <tr colspan='3'>
        <td>
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <i class="bi bi-square-fill" style="color: red;"></i> Booked
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="bi bi-square-fill" style="color: lightgray;"></i> Not Booked
                  </td>
                </tr>
              </tbody>
            </table>
          </td>
        <td>
            <table class="table1" border='0' align='center'>
            <?php $n = 1;
                $a = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10'];
                $b = ['B1','B2','B3','B4','B5','B6','B7','B8','B9','B10'];
                $c = ['C1','C2','C3','C4','C5','C6','C7','C8','C9','C10'];
                $d = ['D1','D2','D3','D4','D5','D6','D7','D8','D9','D10'];
                $count = 0;
            ?>
              <tbody>
                  <tr align='center'>
                      <td>A</td>
                      <td>B</td>
                      <td></td>
                      <td></td>
                      <td>C</td>
                      <td>D</td>
                  </tr>
                  @for ($i = '0'; $i < '10'; $i++)
                  <tr>
                    <?php 
                      $dataA = $a[$i]; 
                      $dataB = $b[$i]; 
                      $dataC = $c[$i]; 
                      $dataD = $d[$i];
                    ?>
                    @if ($ticket->$dataA == 'P')
                      <td >
                        <box-icon name='chair'></box-icon>
                      </td>
                      @else
                      <td style="background: red;">
                        <box-icon name='chair'></box-icon>
                      </td>
                      <?php 
                        $count++;
                      ?>
                      @endif
                      @if ($ticket->$dataB == 'P')
                      <td >
                          <box-icon name='chair'></box-icon>
                      </td>
                      @else
                      <td style="background: red;">
                          <box-icon name='chair'></box-icon>
                      </td>
                      <?php 
                        $count++;
                      ?>
                      @endif 
                      <td></td>
                      <td></td>
                      @if ($ticket->$dataC == 'P')
                      <td>
                          <box-icon name='chair'></box-icon>
                      </td>
                      @else
                      <td style="background: red;">
                          <box-icon name='chair'></box-icon>
                      </td>
                      <?php 
                        $count++;
                      ?>
                      @endif
                      @if ($ticket->$dataD == 'P')
                      <td>
                          <box-icon name='chair'></box-icon>
                      </td>
                      @else
                      <td style="background: red;">
                          <box-icon name='chair'></box-icon>
                      </td>
                      <?php 
                        $count++;
                      ?>
                      @endif
                    </tr>
                    <?php $n++?>
                  @endfor
              </tbody>
            </table>
          </td>
          <td>
            <table class="table">
              <tbody>
                <tr>
                  <th>Bus Name</th>
                  <td>{{$ticket->Bus_Name}}</td>
                </tr>
                <tr>
                  <th>Bus Time</th>
                  <td>{{$ticket->Time}}</td>
                  <th>Ticket Price</th>
                  <td>₹ {{$ticket->Price}}</td>
                </tr>
                <tr>
                    <th>From</th>
                    <td>{{$ticket->From}}</td>
                    <th>To</th>
                    <td>{{$ticket->Destination}}</td>
                </tr>
                <tr>
                    <th>Total Tickets Booked</th>
                    <td><?php echo $count;?></td>
                    <th>Cost</th>
                    <td>
                      <?php $count = 0; ?>
                      @foreach ($price as $p)
                        <?php $count += $p->Price;?>
                      @endforeach
                      ₹ {{$count}}
                    </td>
                </tr>
                <tr><td colspan='4'></td></tr>
                <tr>
                    <th colspan='4'>Tickets Booked By</th>
                </tr>
                <tr>
                    <td colspan='4'>
                        <div class="scroll1">
                            <table class="table">
                            @foreach ($user as $d)
                            <tr>
                                <th>
                                    {{$d->U_Name}}:
                                </th>
                                <td colspan='4'>   
                                    @foreach ($ticket1 as $t)
                                        @if ($t->U_id == $d->U_id)
                                            {{$t->Ticket_Number}}
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                            </table>
                        </div>
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