<!doctype html>
<html lang="en">
  <head>
    <title>Book Ticket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        header{
            background-color: black;
            color: white;
            padding: 15px;
            font-size: 20px;
        }
        .table1{
            background-color: lightgray;
            border-radius: 10px;
        }
        .table2{
            margin-top: 5%;
        }
        tr,td{
            padding: 15px;
            font-size: 20px;
        }
        .test1:hover{
            background: white;
        }
        .test2:hover{
            background: #3ede59;
            cursor: pointer;
            color: white;
            text-decoration: none;
        }
        .test3:hover{
          background: #de3e3e;
          cursor: pointer;
          color: white;
          text-decoration: none;
        }
        .test4:hover{
          background: #d8dde6;
          cursor: pointer;
          text-decoration: none;
        }
        .sticky {
           position: fixed;
           top: 0;
           width: 100%;
         }
        .table2{
            margin-top: 5%;
        }
        .scroll{
	    	    overflow-y: scroll;
          	height: 680px;
	      }
        .scroll2{
	    	    overflow-y: scroll;
          	height: 650px;
	      }
        .horizontalScroll{
            overflow-x: scroll;
          	width: 1600px;
        }
        .scroll1{
	    	    overflow-y: scroll;
          	height: 260px;
	      }
        .td1 {
          background: white;
        }
    </style>
</head>
  <body>
  <nav class="navbar bg-body-tertiary navbar-dark bg-dark" id='navbar'>
  <div class="container-fluid">
    <a class="navbar-brand" style='color: white;'>Safed Bus</a>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/viewBus">View Buses</a>
        </li> 
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/viewTrain">View Trains</a>
        </li> 
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="booked">Booked Ticket</a>
        </li>
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="bookedTrain">Booked Train Ticket</a>
        </li>
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="viewReport">Report</a>
        </li>
    </ul>
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="viewTrainReport">Report Train</a>
        </li>
    </ul>
    <div class="dropdown open">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                {{session('uname')}}
        </button>
        <div class="dropdown-menu bg-light" aria-labelledby="triggerId">     
            <b4-link class="dropdown-item">
                <a href="/city">Add City</a>
            </b4-link>
            <b4-link class="dropdown-item">
                <a href="/bus">Add Bus</a>
            </b4-link>
            <b4-link class="dropdown-item">
                <a href="/train">Add Train</a>
            </b4-link>   
            <b4-link class="dropdown-item">
                <a href="/logout">Logout</a>
            </b4-link>
        </div>
    </div>
  </div>
</nav>
@yield('content')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<script>
    function enable(){
        var elems = document.querySelectorAll('[id^="ticket"]');
        for (var i = 0; i < elems.length; i++) {
            if(elems[i].checked){
                elems[i].checked = false;
            }
        }
    }
window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>
