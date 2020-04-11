<div>
    <form action="{{ route('admin.collections.store') }}"
          method="post"
          class="row"
          enctype="multipart/form-data">

        <div class="col-sm-8">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="name">@lang('general.Name')</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="description">@lang('general.Description')</label>
                                <textarea id="description" name="description"
                                          class="form-control" rows="4">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="images">@lang('general.Cover image')</label>

                                <input type="file" id="images" name="images[]" multiple>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body" x-data="{ open: false }">
                            <div>
                                <div class="row">

                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>إسم المنتج</th>
                                            <th>صنف المنتج</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($products as $key => $product)
                                            <tr>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->category->name}}</td>
                                                <td>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox"
                                                               name="products[{{$key}}]"
                                                               id="products_{{$product->id}}"
                                                               value="{{$product->id}}"
                                                               wire:model="selectedProducts"
                                                               class="custom-control-input">
                                                        <label class="custom-control-label"
                                                               for="products_{{$product->id}}"
                                                        >
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="100">there is no products</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <button type="submit" class="btn btn-primary">حفظ</button>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <p>@lang('general.Visibility')</p>
                            <div class="custom-control custom-radio mb-3">
                                <input type="radio"
                                       id="invisible-checkbox"
                                       name="visibility"
                                       value="false"
                                       class="custom-control-input">
                                <label class="custom-control-label"
                                       for="invisible-checkbox">مخفية</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio"
                                       id="visible-checkbox"
                                       name="visibility"
                                       value="true"
                                       class="custom-control-input">
                                <label class="custom-control-label"
                                       for="visible-checkbox">ظاهرة</label>
                            </div>

                            <div class="custom-control custom-checkbox mt-4">
                                <input type="checkbox"
                                       id="featured-checkbox"
                                       name="featured"
                                       class="custom-control-input">
                                <label class="custom-control-label"
                                       for="featured-checkbox"
                                >مميزة على الصفحةالرئسية
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
