@extends('base')


@section('content')


<div class="container index">
    <h1 style="color:rgb(235, 235, 235);">Merchandises</h1>
        <table class="table table-bordered table-striped table-sm" style="color:rgb(233, 233, 233); font-size: 18px;">
            <thead style="background-color:rgba(161, 161, 161, 0.753); color:rgb(255, 255, 255)">
                    <tr>
                        <th>Item ID</th>
                        <th>Brand Name</th>
                        <th>Product Name</th>
                        <th>Category ID</th>
                        <th>Retail Price</th>
                        <th>Wholesale Price</th>
                        <th>Unit ID</th>
                        <th>Wholesale Quantity</th>
                        <th>Quantity Stock</th>
                    </tr>
                </thead>
                <tbody class="table-striped" >
                    <?php foreach($merchandises as $m): ?>
                        <tr>
                            <td><?= $m->id ?> </td>
                            <td><?= $m->brand_name ?> </td>
                            <td><?= $m->product_name ?> </td>
                            <td><?= $m->category_id ?> </td>
                            <td><?= $m->retail_price ?> </td>
                            <td><?= $m->wholesale_price ?> </td>
                            <td><?= $m->unit_id ?> </td>
                            <td><?= $m->wholesale_qty ?> </td>
                            <td><?= $m->qty_stock ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
