<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket_info;
use App\Models\City_info;
use App\Models\User_info;
use App\Models\Booked_info;
use App\Models\Trainticket_info;
use App\Models\BookTrain_info;
use DB;

class c1 extends Controller
{
    public function register(Request $res)
    {
        $user = new User_info;
        $user->U_Name = $res->input('uname');
        $user->U_Password = $res->input('pwd');
        $user->save();
        return redirect('/');
    }
    public function login(Request $res)
    {
        $user = User_info::where('U_Name','=',$res->input('uname'))->get();
        foreach ($user as $d){
            if($d->U_Password == $res->input('pwd')){
                $res->session()->put('uname',$res->input('uname'));
                $res->session()->put('uid',$d->U_id);
                return redirect('/home');
            }
            else{
                echo "Not Logged in";
                echo "<br>";
                echo "<a href='/'>Login</a>";
            }
        }
    }
    public function addCity(Request $res)
    {
        $city = new City_info;
        $city->City_Name = $res->input('city');
        $city->save();
        return redirect('city');
    }
    public function citys()
    {
        $city = City_info::all();
        $data = compact('city');
        return view('addCity')->with($data);
    }
    public function buses()
    {
        $city = City_info::all();
        $data = compact('city');
        return view('addBus')->with($data);
    }
    public function addBus(Request $res)
    {
        $bus = new Ticket_info;
        $bus->Bus_Name = $res->input('bus');
        $bus->Price = $res->input('price');
        $bus->From = $res->input('from');
        $bus->Destination = $res->input('to');
        $bus->Time = $res->input('date');
        $array = ['A1','A2','A3','A4','A5','A6','A7','A8','A9','A10','B1','B2','B3','B4','B5','B6','B7','B8','B9','B10','C1','C2','C3','C4','C5','C6','C7','C8','C9','C10','D1','D2','D3','D4','D5','D6','D7','D8','D9','D10'];
        foreach ($array as $d){
            $bus->$d = "P";
        }
        $bus->save();
        return redirect('bus');
    }
    public function viewBus()
    {
        $ticket = Ticket_info::all();
        $data = compact('ticket');
        return view('viewBus')->with($data);
    }
    public function bookit(Request $res)
    {
        $data = $res->input('ticket');
        $ticket = Ticket_info::find($res->input('ticketid'));
        foreach ($data as $d){
            $book = new Booked_info;
            $book->U_id = session('uid');
            $book->Ticket_id = $res->input('ticketid');
            $book->Ticket_Number = $d;
            $ticket->$d = 'B';
            $ticket->save();
            $book->Price = $res->input('price');
            $book->save();
        }
        return redirect('viewBus');
    }
    public function bookedTicket()
    {
        $bus = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->where('booked_infos.U_id','=',session('uid'))->select('ticket_infos.Bus_Name', 'ticket_infos.From', 'ticket_infos.Time', 'ticket_infos.Destination','ticket_infos.Price')->distinct()->get();
        $ticket = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->where('booked_infos.U_id','=',session('uid'))->distinct()->get();
        $priceper = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->join('user_infos','user_infos.U_id','=','booked_infos.U_id')->select('booked_infos.Price','ticket_infos.Bus_Name')->where('booked_infos.U_id','=',session('uid'))->distinct()->get();
        $price = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->join('user_infos','user_infos.U_id','=','booked_infos.U_id')->select('booked_infos.Price','ticket_infos.Bus_Name')->where('booked_infos.U_id','=',session('uid'))->get();
        $data = compact('bus','ticket','priceper','price');
        return view('bookedTicket')->with($data);
    }
    public function viewReport()
    {
        $ticket = Ticket_info::all();
        $data = compact('ticket');
        return view('report')->with($data);
    }
    public function reportDetail(Request $res)
    {
        $ticket = Ticket_info::find($res->get('id'));
        $ticket1 = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->where('ticket_infos.Ticket_id','=',$res->get('id'))->distinct()->get();
        $user = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->join('user_infos','user_infos.U_id','=','booked_infos.U_id')->select('user_infos.U_Name','user_infos.U_id')->where('ticket_infos.Ticket_id','=',$res->get('id'))->distinct()->get();
        $price = Booked_info::join('ticket_infos','ticket_infos.Ticket_id','=','booked_infos.Ticket_id')->join('user_infos','user_infos.U_id','=','booked_infos.U_id')->select('booked_infos.Price')->where('ticket_infos.Ticket_id','=',$res->get('id'))->get();
        $data = compact('ticket','ticket1','user','price');
        return view('reportDetail')->with($data);
    }
    public function trains(){
        $city = City_info::all();
        $data = compact('city');
        return view('addTrain')->with($data);
    }
    public function addTrain(Request $res) {
        $train = new Trainticket_info;
        $train->Train_Name = $res->input("train");
        if($res->input('bc')=="Y"){
            $train->Business_Class = $res->input('bc');
            $train->BC_Container = $res->input('bcCon');
            $train->BC_Range = $res->input('rangebc');
        }
        else{
            $train->Business_Class = "N";
        }
        if($res->input('t3')=="Y"){
            $train->Tier3 = $res->input('t3');
            $train->T3_Container = $res->input('t3Con');
            $train->T3_Range = $res->input('ranget3');
        }
        else{
            $train->Tier3 = "N";
        }
        if($res->input('t2')=="Y"){
            $train->Tier2 = $res->input('t2');
            $train->T2_Container = $res->input('t2Con');
            $train->T2_Range = $res->input('ranget2');
        }
        else{
            $train->Tier2 = "N";
        }
        $train->From = $res->input('from');
        $train->Destination = $res->input('to');
        $train->Time = $res->input('date');
        $train->save();
        return redirect('/train');
    }
    public function viewTrain()
    {
        $ticket = Trainticket_info::all();
        $booked = BookTrain_info::join('trainticket_infos','trainticket_infos.Train_id','=','book_train_infos.Train_id')->get();
        $data = compact('ticket','booked');
        return view('viewTrain')->with($data);
    }
    public function viewTrainTicket(Request $res){
        $ticket = Trainticket_info::find($res->get('id'));
        $booked = BookTrain_info::join('trainticket_infos','trainticket_infos.Train_id','=','book_train_infos.Train_id')->where('book_train_infos.Train_id','=',$res->get('id'))->select('book_train_infos.Ticket_Number')->distinct()->get();
        $data = compact('ticket','booked');
        return view('booktrainTicket')->with($data);
    }
    public function viewTicket(Request $res)
    {
        $ticket = Ticket_info::find($res->get('id'));
        $data = compact('ticket');
        return view('bookticket')->with($data);
    }
    public function bookTrainTicket(Request $res){
        $data = $res->input('ticket');
        $bcCount = 0;
        $t3Count = 0;
        $t2Count = 0;
        foreach ($data as $d){
            $parts = preg_split('/(?<=\d)(?=[A-Za-z])/', $d);
            if($parts[2]== "BC"){
                $bcCount++;
            }
            elseif($parts[2]=="T3"){
                $t3Count++;
            }
            elseif($parts[2]=="T2"){
                $t2Count++;
            }   
        }
        $total = 0;
        $total += $bcCount * $res->input("bcPrice");
        $total += $t3Count * $res->input("t3Price");
        $total += $t2Count * $res->input("t2Price");
        $Tickets = implode(' ',$data);
        $Booked = new BookTrain_info;
        $Booked->U_id = session('uid');
        $Booked->Train_id = $res->input('trainId');
        $Booked->Price = $total;
        $Booked->Ticket_Number = $Tickets;
        $Booked->save();
        return redirect('/viewTrain');
    }
    public function bookedTrainTicket(){
        $train = BookTrain_info::join('trainticket_infos','trainticket_infos.Train_id','=','book_train_infos.Train_id')->where('book_train_infos.U_id','=',session('uid'))->get();
        $data = compact('train');
        return view('bookedTrainTicket')->with($data);
    }
    public function viewTrainReport()
    {
        $ticket = Trainticket_info::all();
        $data = compact('ticket');
        return view('reportTrain')->with($data);
    }
    public function reportTrainDetail(Request $res){
        $ticket = Trainticket_info::find($res->get('id'));
        $booked = BookTrain_info::join('trainticket_infos','trainticket_infos.Train_id','=','book_train_infos.Train_id')->where('book_train_infos.Train_id','=',$res->get('id'))->select('book_train_infos.Ticket_Number')->distinct()->get();
        $users = BookTrain_info::join('trainticket_infos','trainticket_infos.Train_id','=','book_train_infos.Train_id')->join('user_infos','user_infos.U_id','=','book_train_infos.U_id')->where('book_train_infos.Train_id','=',$res->get('id'))->select('book_train_infos.Ticket_Number','book_train_infos.Price','user_infos.U_Name','book_train_infos.created_at')->get();
        $data = compact('ticket','booked','users');
        return view('reportTrainDetail')->with($data);
    }
}
