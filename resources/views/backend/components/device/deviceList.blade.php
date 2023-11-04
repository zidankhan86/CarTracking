

<style>
    img{
        height: 100px;
        width: 100px;
        border-radius: 50%;
    }
</style>

<div class="container">
    <br><h2 style="text-align: center">Device Table</h2>
    <div style="text-align: right">
        <a href="{{ route('device.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Device</a>
    </div><br><br>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>id</th>
                  <th>Image</th>
                  <th>Title</th>
                  <th>Status</th>

                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($device as $item)


                <tr>

                    <tr>
                        <td data-label="Name" >{{ $item->id }}</td>
                        <td data-label="Title" >
                            <img src="{{ url('/uploads/',$item->image) }}">
                        </td>
                        <td data-label="Name" >{{ $item->title }}</td>
                        <td data-label="Name" >{{ $item->category->type_name }}</td>
                        <td data-label="Name" >{{ $item->status == 1? 'Active':'Inactive' }}</td>

                  <td>
                    <div class="btn-list flex-nowrap">

                      <div class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                          Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="{{ route('device.edit',$item->id) }}">
                            Edit
                          </a>
                          <a class="dropdown-item" href="#">
                           Delete
                          </a>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
