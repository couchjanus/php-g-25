<div class="table-responsive">

    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Brand name</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brands as $brand):?>
            <tr>
                <td><?=$brand->id?></td>
                <td><?=$brand->name?></td>
                <td>
                    <button class="btn btn-warning">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
    </table>
</div>