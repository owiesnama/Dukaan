<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-2 mb-2">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input id="name"
                                   wire:model="query"
                                   type="text"
                                   name="name"
                                   class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div>
                            <table class="table align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($products as $product)
                                    <tr class="table-row">
                                        <td class="flex items-center">
                                            <img class="w-12 h-12 rounded" src="{{$product->thumbnail}}" alt="">
                                            <span>{{$product->name}}</span>
                                        </td>
                                        <td>{{$product->category->name}}</td>
                                        <td class="budget">@money($product->price) SDG</td>
                                        <td>{{$product->description}}</td>
                                        <td>
                                            <div class="col-sm-5">
                                                <a href="{{ route('admin.products.edit', $product) }}"
                                                   class="btn btn-sm btn-info">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            </div>
                                            <div class="col-sm-5">
                                                <form onsubmit="return confirm('Are you sure want to delete this?')"
                                                      action="{{ route('admin.products.destroy', $product) }}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                                                class="fa fa-trash"></i>
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
            </div>
        </div>
    </div>
</div>
