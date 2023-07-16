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
                                <?php 
                                    $n = 1;
                                    $date1 = date("Y-m-d H:i:s" , strtotime('+2 hours'));
                                    $n1 = 1;
                                    $a = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10'];
                                    $b = ['B1','B2','B3','B4','B5','B6','B7','B8','B9','B10'];
                                    $c = ['C1','C2','C3','C4','C5','C6','C7','C8','C9','C10'];
                                    $d1 = ['D1','D2','D3','D4','D5','D6','D7','D8','D9','D10'];
                                ?>
                                @foreach ($ticket as $d)
                                    @if ($d->Time > $date1)
                                        <?php $count = 0; ?>
                                        @for ($i = '0'; $i < '10'; $i++)
                                            <?php 
                                                $dataA = $a[$i]; 
                                                $dataB = $b[$i]; 
                                                $dataC = $c[$i]; 
                                                $dataD = $d1[$i];
                                            ?>
                                            @if ($d->$dataA == 'B')
                                                <?php $count++;?>
                                            @endif
                                            @if ($d->$dataB == 'B')
                                                <?php $count++;?>
                                            @endif                                    
                                            @if ($d->$dataC == 'B')
                                                <?php $count++;?>
                                            @endif
                                            @if ($d->$dataD == 'B')
                                                <?php $count++;?>
                                            @endif
                                        @endfor
                                        <?php 
                                            $range = explode('-',$d->Price);
                                            $date = strtotime($d->Time);
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
                                        @if ($count == 40)
                                        <tr class="test3">
                                            <td><br><br>
                                                <?php echo $n; $n++;?>
                                            </td>
                                            <td>
                                                <a href="/viewBus/bookit?id={{$d->Ticket_id}}" class="test3">
                                                    <table class="table" >
                                                        <tbody class="test3">
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
                                                                <td>₹ {{$price}}</td>
                                                                <th>Status</th>
                                                                <td>Fully Booked</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a>
                                            </td>
                                        </tr>
                                        @else
                                        <tr class="test2">
                                            <td><br><br>
                                                <?php echo $n; $n++;?>
                                            </td>
                                            <td >
                                                <a href="/viewBus/bookit?id={{$d->Ticket_id}}" class="test2">
                                                    <table class="table">
                                                        <tbody class="test2">
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
                                                                <td>₹ {{$price}}</td>
                                                                <th>Status</th>
                                                                <td>Seats Available</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a>
                                            </td>
                                        </tr>
                                        @endif
                                    @else
                                    @endif
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