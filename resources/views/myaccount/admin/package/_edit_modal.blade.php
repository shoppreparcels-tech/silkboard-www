<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <form method="post" action="{{route('admin.item.update.submit')}}">
                {{ csrf_field() }}
                <div class="modal-body">
                    {{--<p class="popup-head">Are you sure to delete this item ?</p>--}}
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="item_name" id="txt_item_name" class="validate">
                            <label class="">Item Name</label>
                            @if ($errors->has('item'))
                                <span class="error">{{ $errors->first('item') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <select type="text" name="item_category_id" id="txt_item_category_id" class="validate">
                                @foreach($item_categories as $item_category)
                                    <option value="{{$item_category->id}}" >{{$item_category->name}}</option>
                                @endforeach
                            </select>
                            <label class="">Category</label>
                            @if ($errors->has('item_category_id'))
                                <span class="error">{{ $errors->first('item_category_id') }}</span>
                            @endif
                        </div>
                        <div class="input-field col s6">
                            <input type="text" name="item_quantity" id="txt_item_quantity" class="validate">
                            <label class="">Quantity</label>
                            @if ($errors->has('quantity'))
                                <span class="error">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input type="text" name="item_price" id="txt_item_price" class="validate">
                            <label class="">Price</label>
                            @if ($errors->has('price'))
                                <span class="error">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>
                    <input type="hidden" name="hdn_item_id" id="hdn_itemid"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="btn_cancel_popup">Cancel</button>
                    <button type="submit" class="btn waves-effect waves-light green " style="margin-right: 3%">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Modal -->
