<!doctype html>
<html lang="en">
  <head>
    <title>Book Ticket</title>
    <style>
    </style>
  </head>
  <body>
@extends('home')
@section('content')
<form>
    <table class="table">
        <tbody>
            <tr>
                <td>
                    <h3>Train Reports</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="scroll">
                        <table class="table">
                            <tbody>
                                <?php 
                                    $n = 1;
                                ?>
                                @foreach ($ticket as $d)
                                    <tr class="test4">
                                        <td><?php echo $n; $n++;?></td>
                                        <td>
                                            <a href="/viewTrainReport/detail?id={{$d->Train_id}}" class="test4">
                                                <table class="table">
                                                    <tbody>
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
                                                            <th>Price Range</th>
                                                            <td>₹{{$d->BC_Range}}</td>
                                                        </tr>
                                                        @else
                                                        @endif
                                                        @if ($d->Tier3 == 'Y')
                                                        <tr>
                                                            <th>Type</th>
                                                            <td>Tier 3</td>
                                                            <th>Price Range</th>
                                                            <td>₹{{$d->T3_Range}}</td>
                                                        </tr>
                                                        @else
                                                        @endif
                                                        @if ($d->Tier2 == 'Y')
                                                        <tr>
                                                            <th>Type</th>
                                                            <td>Tier 2</td>
                                                            <th>Price Range</th>
                                                            <td>₹{{$d->T2_Range}}</td>
                                                        </tr>
                                                        @else
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </a>
                                        </td>
                                    </tr>
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