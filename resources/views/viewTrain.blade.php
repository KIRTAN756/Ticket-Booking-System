<!doctype html>
<html lang="en">
  <head>
    <title>View Train</title>
  </head>
  <body>
@extends('home')
@section('content')
<form>
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Train Scheduals</h3>
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
                                ?>
                                @foreach ($ticket as $d)
                                    @if($d->Time > $date1)
                                        <?php
                                            // Range To Price
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

                                            // Price By Date
                                            $date = strtotime($d->Time);
                                            $trainTime = date("Y-m-d",$date);
                                            $current = date('Y-m-d');
                                            $coming = date_create($trainTime);
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
                                            // Booked Tickets
                                            $TotalCount = array();
                                            foreach ($booked as $b){
                                                if($b->Train_id == $d->Train_id){
                                                    $TotalCount = array_merge($TotalCount,explode(' ',$b->Ticket_Number));
                                                }
                                            }
                                            $totalTickets = count($TotalCount);
                                            $containercount = 0;
                                            if ($d->Business_Class == 'Y'){
                                                $containercount += $d->BC_Container;
                                            }
                                            if ($d->Tier3 == 'Y'){
                                                $containercount += $d->T3_Container;
                                            }
                                            if ($d->Tier2 == 'Y'){
                                                $containercount += $d->T2_Container;
                                            }
                                            $totalSeats = $containercount * 40;
                                        ?>
                                        @if($totalTickets == $totalSeats)
                                            <tr class="test3">
                                                <td><?php echo $n; $n++;?></td>
                                                <td>
                                                    <a href="/viewTrain/bookit?id={{$d->Train_id}}" class="test3">
                                                        <table class="table">
                                                            <tbody class="test3">
                                                                <tr>
                                                                    <th>Train Name</th>
                                                                    <td>{{$d->Train_Name}}</td>
                                                                    <th>Time</th>
                                                                    <td>{{$d->Time}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>From</th>
                                                                    <td>{{$d->From}}</td>
                                                                    <th>Destination</th>
                                                                    <td>{{$d->Destination}}</td>
                                                                </tr>
                                                                @if ($d->Business_Class == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Buisness Class</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$BC_price}}</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                                @if ($d->Tier3 == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Tier 3</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$T3_price}}</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                                @if ($d->Tier2 == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Tier 2</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$T2_price}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status</th>
                                                                    <td>Fully Booked</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </td>
                                            </tr>
                                        @else
                                            <tr class="test2">
                                                <td><?php echo $n; $n++;?></td>
                                                <td>
                                                    <a href="/viewTrain/bookit?id={{$d->Train_id}}" class="test2">
                                                        <table class="table">
                                                            <tbody class="test2">
                                                                <tr>
                                                                    <th>Train Name</th>
                                                                    <td>{{$d->Train_Name}}</td>
                                                                    <th>Time</th>
                                                                    <td>{{$d->Time}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>From</th>
                                                                    <td>{{$d->From}}</td>
                                                                    <th>Destination</th>
                                                                    <td>{{$d->Destination}}</td>
                                                                </tr>
                                                                @if ($d->Business_Class == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Buisness Class</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$BC_price}}</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                                @if ($d->Tier3 == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Tier 3</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$T3_price}}</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                                @if ($d->Tier2 == 'Y')
                                                                <tr>
                                                                    <th>Type</th>
                                                                    <td>Tier 2</td>
                                                                    <th>Price</th>
                                                                    <td>₹{{$T2_price}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Status</th>
                                                                    <td>Tickets Available</td>
                                                                </tr>
                                                                @else
                                                                @endif
                                                            </tbody>
                                                        </table>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif 
                                    @endif 
                                @endforeach
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