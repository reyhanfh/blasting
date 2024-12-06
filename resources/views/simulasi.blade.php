<h2>Booking Terakhir</h2>
@foreach($data as $booking) 
<a href="simulasi/bayar/{{$booking->id}}">ID bokoing : {{$booking->id}} : Nama : {{$booking->firstname}}</a> <br/> 
@endforeach