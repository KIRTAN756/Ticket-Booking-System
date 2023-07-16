<!doctype html>
<html lang="en">
  <head>
    <title>Add Train</title>
  </head>
  <body>
@extends('home')
@section('content')
<form method="post" action="/train/addTrain">
    @csrf
    <table class="table">
        <tr>
            <td>
                <h3>Add Train</h3>
            </td>
        </tr>
        <tr>
            <td>
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="3">
                                <div class="form-group">
                                  <label>Train Name</label>
                                  <input type="text"
                                    class="form-control" name="train" required placeholder="4D">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="bc" id="bc" onclick=businessClass() value="Y">
                                    Business Class
                                  </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Container</label>
                                  <input type="text"
                                    class="form-control" name="bcCon" id="bcCon" pattern="[0-9]{1,2}" required placeholder="3" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Price Range</label>
                                  <input type="text"
                                    class="form-control" name="rangebc" id="rangebc" required placeholder="1500-3000" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="t3" id="t3" onclick=tier3() value="Y">
                                    Tier 3
                                  </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Container</label>
                                  <input type="text"
                                    class="form-control" name="t3Con" id="t3Con" pattern="[0-9]{1,2}" required placeholder="3" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Price Range</label>
                                  <input type="text"
                                    class="form-control" name="ranget3" id="ranget3" required placeholder="1000-1500" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <br>
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="t2" id="t2" onclick=tier2() value="Y">
                                    Tier 2
                                  </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Container</label>
                                  <input type="text"
                                    class="form-control" name="t2Con" id="t2Con" pattern="[0-9]{1,2}" required placeholder="3" disabled>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                  <label>Price Range</label>
                                  <input type="text"
                                    class="form-control" name="ranget2" id="ranget2" required placeholder="500-1000" disabled>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label>From</label>
                                    <select class="form-control" required name="from">
                                        <option selected disabled>--</option>
                                        @foreach ($city as $d)
                                            <option value="{{$d->City_Name}}">{{$d->City_Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label>To</label>
                                    <select class="form-control" required name="to">
                                        <option selected disabled>--</option>
                                        @foreach ($city as $d)
                                            <option value="{{$d->City_Name}}">{{$d->City_Name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </td>
                            <td colspan='2'>
                                <div class="form-group">
                                  <label>Date</label>
                                  <input type="datetime-local"
                                    class="form-control" name="date" required>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='3' align='center'>
                                <button type="submit" class="btn btn-primary" onclick="return alert('Train Has Been Added!!!')">Add Train</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</form>
@endsection
</body>
</html>
<script>
    function businessClass(){
        if(document.getElementById('bc').checked){
            document.getElementById('bcCon').disabled = false;
            document.getElementById('rangebc').disabled = false;
        }
        else{
            document.getElementById('bcCon').disabled = true;
            document.getElementById('rangebc').disabled = true;
        }
    }
    function tier3(){
        if(document.getElementById('t3').checked){
            document.getElementById('t3Con').disabled = false;
            document.getElementById('ranget3').disabled = false;
        }
        else{
            document.getElementById('t3Con').disabled = true;
            document.getElementById('ranget3').disabled = true;
        }
    }
    function tier2(){
        if(document.getElementById('t2').checked){
            document.getElementById('t2Con').disabled = false;
            document.getElementById('ranget2').disabled = false;
        }
        else{
            document.getElementById('t2Con').disabled = true;
            document.getElementById('ranget2').disabled = true;
        }
    }
</script>