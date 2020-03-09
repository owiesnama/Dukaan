<div>

    <div class="card mb-2">
        <div class="form-group">
            <input id="name"
                   wire:model="query"
                   type="text"
                   name="name"
                   class="form-control">
        </div>
        <div class="form-group">
            <select id="name"
                    wire:model="perPage"
                    type="text"
                    name="name"
                    class="form-control">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="w-full">
            <table class="table table-auto">
                <thead>
                <tr class="table-row">
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr class="table-row">
                        <td class="p-2 flex items-center">
                            <img class="w-12 h-12 rounded" src="{{$product->thumbnail}}" alt="">
                            <span>{{$product->name}}</span>
                        </td>
                        <td class="p-2">{{$product->category->name}}</td>
                        <td class="p-2">{{$product->description}}</td>
                        <td class="p-2">
                            <div class="col-sm-5">
                                <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </div>
                            <div class="col-sm-5">
                                <form onsubmit="return confirm('Are you sure want to delete this?')"
                                      action="{{ route('admin.products.destroy', $product) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="row">
                {{$products->links()}}
            </div>

        </div>
    </div>
</div>
