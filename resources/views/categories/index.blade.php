@extends('base')


@section('content')


<div class="container index">
    <h1 style="color:rgb(235, 235, 235);">Categories</h1>
        <table class="table table-bordered table-striped table-sm" style="color:rgb(250, 237, 237); font-size: 18px;">
            <thead style="background-color:rgba(161, 161, 161, 0.753); color:rgb(255, 255, 255)">
                <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody class="table-striped" >
                    <?php foreach($categories as $c): ?>
                        <tr>
                            <td><?= $c->id ?> </td>
                            <td><?= $c->category ?> </td>
                            <td><?= $c->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
