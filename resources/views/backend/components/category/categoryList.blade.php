

<div class="container">
    <br><h2 style="text-align: center">Category Table</h2>
    <div style="text-align: right">
        <a href="{{ route('category.form') }}" class="btn btn-info" style="margin-right: 10px;">+ Add Category</a>
    </div><br><br>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
                class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>Title</th>
                  <th>Category Type</th>


                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($cat as $item)


                <tr>
                    <tr>
                        <td data-label="Name" >{{ $item->id  }}</td>
                        <td data-label="Name" >{{ $item->type_name  }}</td>

                  <td>
                    <div class="btn-list flex-nowrap">

                      <div class="dropdown">
                        <button class="btn dropdown-toggle align-text-top" data-bs-toggle="dropdown">
                          Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="{{ route('category.edit',$item->id) }}">
                            Edit
                          </a>
                          <a class="dropdown-item" href="#" onclick="return(confirm('Sorry this item can not be delete'))">
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
