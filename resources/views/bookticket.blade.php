<!doctype html>
<html lang="en">
  <head>
    <title>Book</title>
  </head>
  <body>
@extends('home')
@section('content')
  <form method="post" action="/viewBus/bookit/booked">
    @csrf
    <table class="table">
      <tbody>
        <tr>
          <td>
            <h3>Book Ticket</h3>
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
                <br><br>
                <?php 
                    $range = explode('-',$ticket->Price);
                    $date = strtotime($ticket->Time);
                    $busTime = date("Y-m-d",$date);
                    $current = date('Y-m-d');
                    $coming = date_create($busTime);
                    $current1 = date_create($current);
                    $diff=date_diff($current1,$coming);
                    $price = 0;
                    $monthsDifference = ($diff->format('%y') * 12) + $diff->format('%m');
                    if ($monthsDifference >= 3) {
                        $price = $range[0];
                    }
                    elseif ($monthsDifference >= 1 && $monthsDifference < 3) {
                        $price = ($range[0]+$range[1])/2;
                    }
                    elseif ($monthsDifference < 1){
                        $price = $range[1];
                    }
                ?>  
                <tr>
                  <th>Bus Name</th>
                  <td>{{$ticket->Bus_Name}}
                    <input type="hidden" value="{{$ticket->Ticket_id}}" name="ticketid" required>
                    <input type="hidden" value="{{$price}}" name="price" required>
                  </td>
                </tr>
                <tr>
                  <th>Bus Time</th>
                  <td>{{$ticket->Time}}</td>
                </tr>
                <tr>
                  <th>Ticket Price</th>
                  <td>₹ {{$price}}</td>
                </tr>
                <tr>
                  <th>From</th>
                  <td>{{$ticket->From}}</td>
                </tr>
                <tr>
                  <th>To</th>
                  <td>{{$ticket->Destination}}</td>
                </tr>
              </tbody>
              <tr>
                <td align='center'>
                  <button type="submit" onclick="return alert('Ticket Has been Booked!!!')" class="btn btn-primary">Book</button>
                </td>
                <td align='center'>
                  <a href="#" onclick=enable() class="btn btn-primary">Reset</a>
                </td>
              </tr>
            </table>
          </td>
          <td>
            <table class="table1" border='0' align='center'>
              <?php $n = 1;
                $a = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10'];
                $b = ['B1','B2','B3','B4','B5','B6','B7','B8','B9','B10'];
                $c = ['C1','C2','C3','C4','C5','C6','C7','C8','C9','C10'];
                $d = ['D1','D2','D3','D4','D5','D6','D7','D8','D9','D10'];
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
                      <td class = "test1">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="ticket[]" id="ticket[{{$n;}}]" value="A{{$n;}}">
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @else
                      <td class = "test1" style="background: red;">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="A{{$n;}}" disabled>
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @endif
                      @if ($ticket->$dataB == 'P')
                      <td class = "test1">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="ticket[]" id="ticket[{{$n;}}]" value="B{{$n;}}">
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @else
                      <td class = "test1" style="background: red;">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="B{{$n;}}" disabled>
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @endif 
                      <td></td>
                      <td></td>
                      @if ($ticket->$dataC == 'P')
                      <td class = "test1">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="ticket[]" id="ticket[{{$n;}}]" value="C{{$n;}}">
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @else
                      <td class = "test1" style="background: red;">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="C{{$n;}}" disabled>
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @endif
                      @if ($ticket->$dataD == 'P')
                      <td class = "test1">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="ticket[]" id="ticket[{{$n;}}]" value="D{{$n;}}">
                              <box-icon name='chair'></box-icon>
                            </label>
                          </div>
                      </td>
                      @else
                      <td class = "test1" style="background: red;">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="D{{$n;}}" disabled>
                                <box-icon name='chair'></box-icon>
                              </label>
                            </div>
                      </td>
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
                  <td align="bottom">
                    <i class="bi bi-square-fill" style="color: red;"></i> Booked
                  </td>
                </tr>
                <tr>
                  <td align="bottom">
                    <i class="bi bi-square-fill" style="color: lightgray;"></i> Available
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