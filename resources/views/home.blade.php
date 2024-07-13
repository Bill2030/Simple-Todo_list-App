<x-layout>
    <div class="container  align-content: center m-auto">
    <h2 class="text-center">To Do list App</h2>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('store') }}" method="POST">
                        <div class="mb-3">
                            @csrf
                        <label class="" for="name">Enter the To do List</label>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Enter your List">
                    </div>
                    <div class="mb-3">
                        <label for="Description">Notes Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <input class="form-control" type="text" name="action" placeholder="Action">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success" type="submit">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<table class="table mt-5">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Action</th>
</tr>
@foreach ($applist as $app)
<tr>
    <td>{{ $app->id }}</td>
    <td>{{ $app->name }}</td>
    <td>{{ $app->description }}</td>
    <td>{{ $app->action }}</td>
</tr>
@endforeach
</table>
</div>
</x-layout>