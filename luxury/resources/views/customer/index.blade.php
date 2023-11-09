@foreach ($customers as $customer)
    <div class="div">{{ $customer->name }}</div>
@endforeach
{{-- @foreach ($orders as $order)
    <div class="div">{{ $order->customer_id }}</div>
@endforeach --}}