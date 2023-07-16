<!doctype html>
<html lang="en">
  <head>
    <title>Book Ticket</title>
    <style>
    </style>
  </head>
  <body>
    <?php 
        // Price Range
        $BC_range;
        $T3_range;
        $T2_range;
        if($ticket->Business_Class == 'Y'){
           $BC_range = explode('-',$ticket->BC_Range);
        }
        else{
            $BC_range = array(0,0);
        }
        if($ticket->Tier3 == 'Y'){
           $T3_range = explode('-',$ticket->T3_Range);
        }
        else{
           $T3_range = array(0,0);
        }
        if($ticket->Tier2 == 'Y'){
           $T2_range = explode('-',$ticket->T2_Range);
        }
        else{
           $T2_range = array(0,0);
        }

        // Price By Date
        $date = strtotime($ticket->Time);
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
    ?>
@extends('home')
@section('content')
<form method="post" action="/viewTrain/bookit/booked">
    @csrf
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Book Ticket</h3>
                </td>
                <td align='right' colspan='2'>
                    <b4-link>
                        <a href="{{ url()->previous() }}"><i class="bi-x-square" style='font-size: 30px; color: black;'></i></a>
                    </b4-link>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <div class='scroll2'>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
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
                                                    <td>₹{{$BC_price}}</td>
                                                </tr>
                                                @else
                                                @endif
                                                @if ($ticket->Tier3 == 'Y')
                                                <tr>
                                                    <th>Type</th>
                                                    <td>Tier 3</td>
                                                    <th>Price</th>
                                                    <td>₹{{$T3_price}}</td>
                                                </tr>
                                                @else
                                                @endif
                                                @if ($ticket->Tier2 == 'Y')
                                                <tr>
                                                    <th>Type</th>
                                                    <td>Tier 2</td>
                                                    <th>Price</th>
                                                    <td>
                                                        ₹{{$T2_price}}
                                                        <input type="hidden" name="bcPrice" value="{{$BC_price}}" Required>
                                                        <input type="hidden" name="t3Price" value="{{$T3_price}}" Required>
                                                        <input type="hidden" name="t2Price" value="{{$T2_price}}" Required>
                                                        <input type="hidden" name="trainId" value="{{$ticket->Train_id}}" Required>
                                                    </td>
                                                </tr>
                                                @else
                                                @endif
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
                                                            <table class="table1" >
                                                                <?php 
                                                                    $n = 10; 
                                                                ?>
                                                                <tr>
                                                                    <td colspan='5'>Container: Business Class</td>
                                                                    <td colspan='3'>Price: ₹{{$BC_price}}</td>
                                                                    <td colspan="3">Container No: {{$n3}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataA = "C".$n3.$a[$i]."BC"?>
                                                                        @if(in_array($dataA,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>B</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataB = "C".$n3.$b[$i]."BC"?>
                                                                        @if(in_array($dataB,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">                                                                   
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>C</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataC = "C".$n3.$c[$i]."BC"?>
                                                                        @if(in_array($dataC,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>D</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataD = "C".$n3.$d[$i]."BC"?>
                                                                        @if(in_array($dataD,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
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
                                                                    <td colspan='3'>Price: ₹{{$T3_price}}</td>
                                                                    <td colspan="3">Container No: {{$n3}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataA = "C".$n3.$a[$i]."T3"?>
                                                                        @if(in_array($dataA,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>B</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataB = "C".$n3.$b[$i]."T3"?>
                                                                        @if(in_array($dataB,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">                                                                   
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>C</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataC = "C".$n3.$c[$i]."T3"?>
                                                                        @if(in_array($dataC,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>D</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataD = "C".$n3.$d[$i]."T3"?>
                                                                        @if(in_array($dataD,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
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
                                                                    <td colspan='3'>Price: ₹{{$T2_price}}</td>
                                                                    <td colspan="3">Container No: {{$n3}}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>A</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataA = "C".$n3.$a[$i]."T2"?>
                                                                    @if(in_array($dataA,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataA}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>B</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataB = "C".$n3.$b[$i]."T2"?>
                                                                        @if(in_array($dataB,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">                                                                   
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataB}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>C</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataC = "C".$n3.$c[$i]."T2"?>
                                                                        @if(in_array($dataC,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataC}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
                                                                            </td>
                                                                        @endif
                                                                    @endfor
                                                                </tr>
                                                                <tr>
                                                                    <td>D</td>
                                                                    @for ($i = 0; $i < $n; $i++)
                                                                    <?php $dataD = "C".$n3.$d[$i]."T2"?>
                                                                        @if(in_array($dataD,$bookedTickets))
                                                                            <td class = "test1" style="background: red;">
                                                                                <div class="form-check">
                                                                                    <label class="form-check-label">
                                                                                        <input type="checkbox" class="form-check-input" disabled name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                        <box-icon name='chair'></box-icon>
                                                                                    </label>
                                                                                </div>
                                                                            </td>
                                                                        @else
                                                                            <td class = "test1">
                                                                                <div class="form-check">
                                                                                  <label class="form-check-label">
                                                                                    <input type="checkbox" class="form-check-input"  name="ticket[]" id="ticket[{{$n;}}]" value="{{$dataD}}">
                                                                                    <box-icon name='chair'></box-icon>
                                                                                  </label>
                                                                                </div>
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
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <button type="submit" onclick="return alert('Tickets has been Booked')" class="btn btn-primary">Bookit</button>
                </td>
                <td align='left'>
                    <a href="#" onclick=enable() class= "btn btn-primary">Reset</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>
@endsection
</body>
</html>