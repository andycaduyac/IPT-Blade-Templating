@extends('base')


@section('content')


<div class="container index">
    <h1 style="color:rgb(235, 235, 235);">Units</h1>
        <table class="table table-bordered table-striped table-sm" style="color:rgb(250, 237, 237); font-size: 18px;">
            <thead style="background-color:rgba(161, 161, 161, 0.753); color:rgb(255, 255, 255)">
                <tr>
                        <th>Unit ID</th>
                        <th>Unit Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody >
                    <?php foreach($units as $u): ?>
                        <tr>
                            <td><?= $u->id ?> </td>
                            <td><?= $u->unit_type ?> </td>
                            <td><?= $u->description ?> </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
