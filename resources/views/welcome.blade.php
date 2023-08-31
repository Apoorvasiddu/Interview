@php 
$len=sizeof($data)

@endphp

<html>
    <body>
        <div>
            <p>
                @foreach($data as $d)
                    {{$d->product_id}}
                    {{$d->product_price}}
                    {{$d->product_quantity}}

                @endforeach
            </p>
        </div>
    </body>
    </html>