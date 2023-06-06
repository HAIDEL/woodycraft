
@foreach($deliverys as $delivery)


<tr>

    <td>{{ $delivery->firstname}}</td>
    <td>{{ $delivery->lastname}}</td>
    <td>{{ $delivery->add1}}</td>
    <td>{{ $delivery->add2}}</td>
    <td>{{ $delivery->city}}</td>
    <td>{{ $delivery->postcode}}</td>
    <td>{{ $delivery->phone}}</td>
    <td>{{ $delivery->email}}</td>

</tr>



@endforeach
