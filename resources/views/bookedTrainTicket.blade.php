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
        <tbody>
            <tr>
                <th>Train Name</th>
                <th>Details</th>
            </tr>
            @foreach ($train as $d)
            <?php
                // Dates
                $BC_range;
                $T3_range;
                $T2_range;
                if($d->Business_Class == 'Y'){
                   $BC_range = explode('-',$d->BC_Range);
                }
                else{
                    $BC_range = array(0,0);
                }
                if($d->Tier3 == 'Y'){
                   $T3_range = explode('-',$d->T3_Range);
                }
                else{
                   $T3_range = array(0,0);
                }
                if($d->Tier2 == 'Y'){
                   $T2_range = explode('-',$d->T2_Range);
                }
                else{
                   $T2_range = array(0,0);
                }
                $date = strtotime($d->Time);
                $bookedDate = strtotime($d->created_at);
                $busTime = date("Y-m-d",$date);
                $current = date('Y-m-d',$bookedDate);
                $coming = date_create($busTime);
                $current1 = date_create($current);
                $diff=date_diff($current1,$coming);
                $BC_price = 0;
                $T2_price = 0;
                $T3_price = 0;
                $monthsDifference = ($diff->format('%y') * 12) + $diff->format('%m');
                if ($monthsDifference >= 3) {
                    $BC_price = $BC_range[0];
                    $T3_price = $T3_range[0];
                    $T2_price = $T2_range[0];
                }
                elseif ($monthsDifference >= 1 && $monthsDifference < 3) {
                    $BC_price = ($BC_range[0]+$BC_range[1])/2;
                    $T3_price = ($T3_range[0]+$T3_range[1])/2;
                    $T2_price = ($T2_range[0]+$T2_range[1])/2;
                }
                elseif ($monthsDifference < 1){
                    $BC_price = $BC_range[1];
                    $T3_price = $T3_range[1];
                    $T2_price = $T2_range[1];
                }

                // Price Ticket Cost
                $tickets = explode(' ',$d->Ticket_Number);
                $bcCount = 0;
                $t3Count = 0;
                $t2Count = 0;
                $bcTickets = array();
                $t3Tickets = array();
                $t2Tickets = array();
                $total = $d->Price;
                foreach ($tickets as $d1){
                    $parts = preg_split('/(?<=\d)(?=[A-Za-z])/', $d1);
                    if($parts[2]== "BC"){
                        $bcCount++;
                        array_push($bcTickets,$d1);
                    }
                    elseif($parts[2]=="T3"){
                        array_push($t3Tickets,$d1);
                        $t3Count++;
                    }
                    elseif($parts[2]=="T2"){
                        array_push($t2Tickets,$d1);
                        $t2Count++;
                    } 
                }
                $bcPrice = $BC_price * $bcCount;
                $total -= $bcPrice;
                $t3Price = $T3_price * $t3Count;
                $total -= $t3Price;
                $t2Price = $T2_price * $t2Count;
                $total -= $t2Price;
            ?>
            <tr>
                <td>
                    {{$d->Train_Name}}
                </td>
                <td>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>From</th>
                                <td>{{$d->From}}</td>
                                <th>To</th>
                                <td colspan='3'>{{$d->Destination}}</td>
                            </tr>
                            <tr>
                                <th>Time</th>
                                <td>{{$d->Time}}</td>
                                <th>Total Tickets</th>
                                <td>
                                    <?php echo count($tickets);?>
                                </td>
                                <th>Total Cost</th>
                                <td>₹ {{$d->Price}}</td>
                            </tr>
                            @if ($bcCount > 0)
                            <tr>
                                <th>Business Class Tickets</th>
                                <td>
                                    @foreach ($bcTickets as $d)
                                        {{$d}}
                                    @endforeach
                                </td>
                                <th>Business Class Per Tickets</th>
                                <td>₹ {{$BC_price}}</td>
                                <th>Business Class Cost</th>
                                <td>₹ {{$bcPrice}}</td>
                            </tr>
                            @else
                            @endif
                            @if ($t3Count > 0)
                            <tr>
                                <th>Tier 3 Tickets</th>
                                <td>
                                    @foreach ($t3Tickets as $d)
                                        {{$d}}
                                    @endforeach
                                </td>
                                <th>Tier 3 Per Tickets</th>
                                <td>₹ {{$T3_price}}</td>
                                <th>Tier 3 Cost</th>
                                <td>₹ {{$t3Price}}</td>
                            </tr>
                            @else
                            @endif
                            @if ($t2Count > 0)
                            <tr>
                                <th>Tier 2 Tickets</th>
                                <td>
                                    @foreach ($t2Tickets as $d)
                                        {{$d}}
                                    @endforeach
                                </td>
                                <th>Tier 2 Per Tickets</th>
                                <td>₹ {{$T2_price}}</td>
                                <th>Tier 2 Cost</th>
                                <td>₹ {{$t2Price}}</td>
                            </tr>
                            @else
                            @endif
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