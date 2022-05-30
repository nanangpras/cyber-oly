<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. Telp</th>
                <th width="200px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->user->first_name }}</td>
                    <td>{{ $item->address }}</td>
                    <td>{{ $item->user->phone }}</td>
                    <td>
                        <button onclick="edit({{$item->id}})" class="btn btn-primary btn-sm">Edit</button>
                        <button onclick="show({{$item->id}})" class="btn btn-warning btn-sm">Detail</button>
                        <form action="{{ route('customer.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$customer->links()}}
