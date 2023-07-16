<!doctype html>
<html lang="en">
  <head>
    <title>Report Detail</title>
    <style>
    </style>
  </head>
<?php 
    $TotalCount = array();
    $totalProfit = 0;
    foreach ($users as $d){
        $totalProfit += $d->Price;
        $TotalCount = array_merge($TotalCount,explode(' ',$d->Ticket_Number));
    }
    $totalTickets = count($TotalCount);
    $containercount = 0;
    if ($ticket->Business_Class == 'Y'){
        $containercount += $ticket->BC_Container;
    }
    if ($ticket->Tier3 == 'Y'){
        $containercount += $ticket->T3_Container;
    }
    if ($ticket->Tier2 == 'Y'){
        $containercount += $ticket->T2_Container;
    }
    $totalSeats = $containercount * 40;
?>
  <body>
@extends('home')
@section('content')
<form>
    @csrf
    <table class="table table2">
        <tbody>
            <tr>
                <td>
                    <h3>Report Detail</h3>
                </td>
                <td align='right' colspan='2'>
                    <b4-link>
                        <a href="{{ url()->previous() }}"><i class="bi-x-square" style='font-size: 30px; color: black;'></i></a>
                    </b4-link>
                </td>
            </tr>
            <tr>
                <td colspan='2'>        
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Train Name</th>
                                <td>{{$ticket->Train_Name}}</td>
                                <th>Time</th>
                                <td>{{$ticket->Time}}</td>
                            </tr>
                            <tr>
                                <th>From</th>
                                <td>{{$ticket->From}}</td>
                                <th>Destination</th>
                                <td>{{$ticket->Destination}}</td>
                            </tr>
                            @if ($ticket->Business_Class == 'Y')
                            <tr>
                                <th>Type</th>
                                <td>Buisness Class</td>
                                <th>Price</th>
                                <td>₹{{$ticket->BC_Range}}</td>
                            </tr>
                            @else
                            @endif
                            @if ($ticket->Tier3 == 'Y')
                            <tr>
                                <th>Type</th>
                                <td>Tier 3</td>
                                <th>Price</th>
                                <td>₹{{$ticket->T3_Range}}</td>
                            </tr>
                            @else
                            @endif
                            @if ($ticket->Tier2 == 'Y')
                            <tr>
                                <th>Type</th>
                                <td>Tier 2</td>
                                <th>Price</th>
                                <td>₹{{$ticket->T2_Range}}</td>
                            </tr>
                            @else
                            @endif
                            <tr>
                                <th>Total Tickets Booked</th>
                                <td>{{$totalTickets}}/{{$totalSeats}}</td>
                                <th>Total Revenue</th>
                                <td>₹{{$totalProfit}}</td>
                            </tr>
                            <tr>
                                <td><i class="bi bi-square-fill" style="color: red;"></i> Booked</td>
                                <td><i class="bi bi-square-fill" style="color: lightgray;"></i> Available</td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td align='center'>
                    <div class="horizontalScroll">
                        <table class="table">
                            <tbody>
                                <tr>
                                <?php 
                                    $n3 = 1;
                                    $a = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10'];
                                    $b = ['B1','B2','B3','B4','B5','B6','B7','B8','B9','B10'];
                                    $c = ['C1','C2','C3','C4','C5','C6','C7','C8','C9','C10'];
                                    $d = ['D1','D2','D3','D4','D5','D6','D7','D8','D9','D10'];
                                    $bookedTickets = array();
                                    foreach ($booked as $data){
                                        $bookedTickets = array_merge($bookedTickets,explode(' ',$data->Ticket_Number));
                                    }
                                ?>
                                @if ($ticket->Business_Class == 'Y')
                                    @for ($i1 = 0; $i1 < $ticket->BC_Container; $i1++)
                                    <td>
                                        <table class="table1">
                                            <?php 
                                                $n = 10; 
                                            ?>
                                            <tr>
                                                <td colspan='5'>Container: Business Class</td>
                                                <td colspan='3'>Price Range: ₹{{$ticket->BC_Range}}</td>
                                                <td colspan="3">Container No: {{$n3}}</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataA = "C".$n3.$a[$i]."BC"?>
                                                    @if(in_array($dataA,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataB = "C".$n3.$b[$i]."BC"?>
                                                    @if(in_array($dataB,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataC = "C".$n3.$c[$i]."BC"?>
                                                    @if(in_array($dataC,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td >
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataD = "C".$n3.$d[$i]."BC"?>
                                                    @if(in_array($dataD,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td >
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                        </table>
                                    </td>
                                    <?php $n3++;?>
                                    @endfor
                                @else
                                @endif
                                @if ($ticket->Tier3 == 'Y')
                                    @for ($i1 = 0; $i1 < $ticket->T3_Container; $i1++)
                                    <td>
                                        <table class="table1">
                                            <?php $n = 10; ?>
                                            <tr>
                                                <td colspan='5'>Container: Tier 3</td>
                                                <td colspan='3'>Price Range: ₹{{$ticket->T3_Range}}</td>
                                                <td colspan="3">Container No: {{$n3}}</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataA = "C".$n3.$a[$i]."T3"?>
                                                    @if(in_array($dataA,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataB = "C".$n3.$b[$i]."T3"?>
                                                    @if(in_array($dataB,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataC = "C".$n3.$c[$i]."T3"?>
                                                    @if(in_array($dataC,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataD = "C".$n3.$d[$i]."T3"?>
                                                    @if(in_array($dataD,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                        </table>
                                    </td>
                                    <?php $n3++;?>
                                    @endfor
                                @else
                                @endif
                                @if ($ticket->Tier2 == 'Y')
                                    @for ($i1 = 0; $i1 < $ticket->T2_Container; $i1++)
                                    <td>
                                        <table class="table1">
                                            <?php $n = 10; ?>
                                            <tr>
                                                <td colspan='5'>Container: Tier 2</td>
                                                <td colspan='3'>Price Range: ₹{{$ticket->T2_Range}}</td>
                                                <td colspan="3">Container No: {{$n3}}</td>
                                            </tr>
                                            <tr>
                                                <td>A</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataA = "C".$n3.$a[$i]."T2"?>
                                                @if(in_array($dataA,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>B</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataB = "C".$n3.$b[$i]."T2"?>
                                                    @if(in_array($dataB,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>C</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataC = "C".$n3.$c[$i]."T2"?>
                                                    @if(in_array($dataC,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                            <tr>
                                                <td>D</td>
                                                @for ($i = 0; $i < $n; $i++)
                                                <?php $dataD = "C".$n3.$d[$i]."T2"?>
                                                    @if(in_array($dataD,$bookedTickets))
                                                        <td style="background: red;">
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <box-icon name='chair'></box-icon>
                                                        </td>
                                                    @endif
                                                @endfor
                                            </tr>
                                        </table>
                                    </td>
                                    <?php $n3++;?>
                                    @endfor
                                @else
                                @endif
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Ticket Details</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <table class="table">
                        <tr>
                            <th>User Name</th>
                            <th>Ticket Number</th>
                            <th>Total Tickets</th>
                            <th>Total Cost</th>
                            <th>Booking Date</th>
                        </tr>
                        <tbody>
                            @foreach ($users as $d)
                            <?php 
                                $tickets = explode(' ',$d->Ticket_Number);
                                $count = count($tickets);
                                $date = strtotime($d->created_at);
                                $bookingTime = date("d-m-Y",$date);
                            ?>
                            <tr>
                                <th>{{$d->U_Name}}</th>
                                <td>{{$d->Ticket_Number}}</td>
                                <td>{{$count}}</td>
                                <td>₹ {{$d->Price}}</td>
                                <td>{{$bookingTime}}</td>
                            </tr>
                            @endforeach
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