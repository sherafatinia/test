<!doctype html>
<html lang="en">
<head>
    <title>Show</title>
</head>
<body>
<ul>
    <li>Invoice number : {{ $invoice->number }}</li>
    <li>Invoice date : {{ $invoice->date }}</li>
    <li>Due date : {{ $invoice->due_date }}</li>
    <li>
        <p>Company</p>
        <ul>
            <li>Name : {{ $invoice->company->name }}</li>
            <li>Street Address : {{ $invoice->company->street }}</li>
            <li>City : {{ $invoice->company->city }}</li>
            <li>Zip code : {{ $invoice->company->zip }}</li>
            <li>Phone : {{ $invoice->company->phone }}</li>
            <li>Email address : {{ $invoice->company->email }}</li>
        </ul>
    </li>
    <li>
        <p>Products</p>
        <ul>
            @php $total = 0 @endphp
        @foreach($invoice->products as $product)
                <li>Name : {{ $product->name }}</li>
                <li>Quantity : {{ $product->pivot->quantity }}</li>
                <li>Unit Price : {{ $product->price }}</li>
                <li>Total : {{ $product->price * $product->pivot->quantity }}</li>
                <br>
            @php $total += $product->price * $product->pivot->quantity @endphp
        @endforeach
        </ul>
    </li>
    <li>Total : {{ $total }}</li>
</ul>
</body>
</html>
