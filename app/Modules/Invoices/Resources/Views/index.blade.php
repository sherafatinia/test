<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
</head>
<body>
<table>
    <thead>
    <th>Id</th>
    <th>Date</th>
    <th>Status</th>
    <th></th>
    <th>Show</th>
    </thead>
    <tbody>
    @foreach($invoices as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <td>{{ $invoice->date }}</td>
            <td>
                @if($invoice->status == 'draft')
                    <a href="approve/{{ $invoice->id }}">Approve</a> / <a href="reject/{{ $invoice->id }}">Reject</a>
                @else
                    {{ $invoice->status }}
                @endif
            </td>
            <td><a href="invoices/{{ $invoice->id }}">Show Details</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
