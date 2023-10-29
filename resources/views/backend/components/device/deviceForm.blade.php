<div class="container">

<div class="col-12">
    <form action="{{ route('device.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <h3 class="card-title">Device Form</h3>
        <div class="row row-cards">
          <div class="col-md-5">
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" name="title" class="form-control"  placeholder="Title">
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="mb-3">
                <label class="form-label">Device Price</label>
                <input type="text" name="price" class="form-control">
              </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div class="mb-3">
                <label class="form-label">Select Category</label>
                <select name="category_id" id="" class="form-control">

                    @foreach ($devices as $item)
                    <option value="{{ $item->id }}">{{ $item->type_name }}</option>
                    @endforeach


                </select>
              </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="mb-3">
              <label class="form-label">Monthly Service Charge </label>
              <input type="text" name="monthly_charge" class="form-control" placeholder="200">
            </div>
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="mb-3">
              <label class="form-label">Choose Thumbnail</label>
              <input type="file" name="image" class="form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="mb-3">
                <label class="form-label">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

          </div>

          <div class="col-md-12">
            <div class="mb-3 mb-0">
              <label class="form-label">Description</label>
              <textarea name="description" rows="5" name="description" class="form-control" placeholder="Here can be your description"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
    </form>
  </div>
</div>
