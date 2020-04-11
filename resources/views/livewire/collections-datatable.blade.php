<div>

    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <div>
                    <table class="table align-items-center">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="name">Project</th>
                            <th scope="col" class="sort" data-sort="budget">Budget</th>
                            <th scope="col" class="sort" data-sort="status">Status</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @forelse($collections as $collection)
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center -mx-3">
                                        <a href="{{route('admin.collections.edit',$collection)}}"
                                           class="avatar rounded-circle mx-3">
                                            <img src="">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$collection->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                    <span class="badge badge-dot mr-4">
                      <i class="bg-{{$collection->visibility ? 'success' : 'danger'}}"></i>
                      <span class="status">{{$collection->visibility ? 'visible' : 'hidden'}}</span>
                    </span>
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        @forelse($collection->products->take(5) as $product)
                                            <a href="{{route('admin.products.edit',$product)}}"
                                               class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                               data-original-title="{{$product->name}}">
                                                <img alt="Image placeholder" src="{{$product->thumbnail}}">
                                            </a>
                                        @empty
                                            <p>-</p>
                                        @endforelse
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">
                                                Edit
                                                <i class="fa fa-edit text-info"></i>
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Archive
                                                <i class="ni ni-archive-2 text-muted"></i></a>
                                            <a class="dropdown-item" href="#">
                                                Remove
                                                <i class="fa fa-trash text-danger"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td scope="row" colspan="100%">
                                    <p class="text-center">there is no results</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <td collspan="100">
                                {{$collections->links()}}
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
