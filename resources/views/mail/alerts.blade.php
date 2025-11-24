<p>Dear, {{ $name }}</p>
<p>You purchased on the Camperen website:</p>

@foreach($body as $row)
@if($row->weight === 0)
{{ $row->name }}
${{ $row->price }}
{{ $row->qty }}pc.
    <br>
@endif
@if($row->weight !== 0)
{{ $row->name }}
${{ $row->price }}
{{ $row->qty }}pc.
    <br>
@endif
@endforeach

<p>For total cost: ${{ $total }}</p>
<p>Your order number: #{{ $orderid }}</p>
<p>You can monitor the status of orders in your personal account on the Camperen website</p>
