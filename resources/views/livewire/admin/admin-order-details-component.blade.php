<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Ordered Item
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.orders')}}" class="btn btn-success pull-right">All Orders</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">
                                @foreach ($order->orderItems as $item)
                                <li class="pr-cart-item">
                                    <div class="product-image">
                                        <figure><img src="{{ asset('assets/images/products') }}/{{ $item->product->image }}" alt="{{ $item->product->name }}"></figure>
                                    </div>
                                    <div class="product-name">
                                        <a class="link-to-product" href="{{ route('product.details', ['slug'=>$item->product->slug]) }}">{{ $item->product->name }}</a>
                                    </div>
                                    <div class="price-field produtc-price">
                                        <p class="price">${{ $item->price }}</p>
                                    </div>
                                    <div class="quantity">
                                        <h5>{{ $item->quantity }}</h5>
                                    </div>
                                    <div class="price-field sub-total">
                                        <p class="price">${{ $item->price * $item->quantity}}</p>
                                    </div>
                                    
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Order Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal</span><b class="index">${{ $order->subtotal }}</b></p>
                                <p class="summary-info"><span class="title">Tax</span><b class="index">${{ $order->tax }}</b></p>
                                <p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
                                <p class="summary-info"><span class="title">Total</span><b class="index">${{ $order->total }}</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="panel-heading">
                        Billing Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <th>{{ $order->firstname }}</th>
                                <th>Last Name</th>
                                <th>{{$order->lastname}}</th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th>{{ $order->mobile }}</th>
                                <th>Email</th>
                                <th>{{$order->email}}</th>
                            </tr>

                            <tr>
                                <th>Line1</th>
                                <th>{{ $order->line1 }}</th>
                                <th>Line2</th>
                                <th>{{$order->line2}}</th>
                            </tr>

                            <tr>
                                <th>City</th>
                                <th>{{ $order->city }}</th>
                                <th>Province</th>
                                <th>{{$order->province}}</th>
                            </tr>

                            <tr>
                                <th>Country</th>
                                <th>{{ $order->country }}</th>
                                <th>Zipcode</th>
                                <th>{{$order->zipcode}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @if($order->is_shipping_different)
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="panel-heading">
                        Shipping Details
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>First Name</th>
                                <th>{{ $order->shipping->firstname }}</th>
                                <th>Last Name</th>
                                <th>{{$order->shipping->lastname}}</th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th>{{ $order->shipping->mobile }}</th>
                                <th>Email</th>
                                <th>{{$order->shipping->email}}</th>
                            </tr>

                            <tr>
                                <th>Line1</th>
                                <th>{{ $order->shipping->line1 }}</th>
                                <th>Line2</th>
                                <th>{{$order->shipping->line2}}</th>
                            </tr>

                            <tr>
                                <th>City</th>
                                <th>{{ $order->shipping->city }}</th>
                                <th>Province</th>
                                <th>{{$order->shipping->province}}</th>
                            </tr>

                            <tr>
                                <th>Country</th>
                                <th>{{ $order->shipping->country }}</th>
                                <th>Zipcode</th>
                                <th>{{$order->shipping->zipcode}}</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-heading">
                    <div class="panel-heading">
                        Transaction
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th>Transaction Mode</th>
                                <td>{{ $order->transaction->mode }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $order->transaction->status }}</td>
                            </tr>
                            <tr>
                                <th>Transactoion Date</th>
                                <td>{{ $order->transaction->create_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>