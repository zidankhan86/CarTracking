<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
<style>

    .ck-content {
        min-height: 200px;
        padding: 10px;
        font-size: 16px;
    }
</style>
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
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="mb-3">
                <label class="form-label">Device Price</label>
                <input type="number" name="price" class="form-control">
              </div>
              @error('price')
            <p class="text-danger">{{ $message }}</p>
            @enderror
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
            @error('monthly_charge')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="col-sm-6 col-md-6">
            <div class="mb-3">
              <label class="form-label">Choose Thumbnail</label>
              <input type="file" name="image" class="form-control">
            </div>
            @error('image')
            <p class="text-danger">{{ $message }}</p>
            @enderror
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
          <div class="mb-3">
            <label class="form-label">Select Features</label>
            <select name="features[]" class="form-control" multiple>
                <option value="Real-Time Tracking">Real-Time Tracking</option>
                <option value="Vehicle Status">Vehicle Status</option>
                <option value="Geofencing">Geofencing</option>
                <option value="Basic GPS Report">Basic GPS Report</option>
                <option value="Device Removal Alert">Device Removal Alert</option>
                <option value="Over Speeding Alert">Over Speeding Alert</option>
                <option value="Trip History">Trip History</option>
                <option value="Daily Summary Report">Daily Summary Report</option>
                <option value="24x7 Help Line Support">24x7 Help Line Support</option>
            </select>
        </div>


        <div class="col-md-12">
            <div class="mb-3 mb-0" id="editor">

            </div>
        </div>
        <div class="d-none">
            <textarea name="description" id="description" rows="5" class="form-control"></textarea>
        </div>
        @error('description')
        <p class="text-danger">{{ $message }}</p>
        @enderror

        </div>
      </div><br>
      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Post</button>
      </div>
    </form>
  </div>
</div>

<script>
	const editor = ClassicEditor
    .create(document.querySelector('#editor'))
    .catch(error => {
        console.error(error);
    });

editor.then(newEditor => {
    newEditor.model.document.on('change:data', () => {
        const editorData = newEditor.getData();
        document.querySelector('#description').value = editorData;
    });
});

</script>
