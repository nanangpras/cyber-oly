<div class="p2">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="first_name" value="{{$customer->user->first_name}}" id="first_name" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{$customer->user->last_name}}" id="last_name" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="{{$customer->address}}" id="address" class="form-control" readonly>
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" value="{{$customer->user->phone}}" id="phone" class="form-control" readonly>
    </div>
</div>