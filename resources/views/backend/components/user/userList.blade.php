

<div class="container">
    <br><h2 style="text-align: center">User Table</h2>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th class="w-1"></th>
                </tr>
              </thead>
              <tbody>

                @foreach ($users as $item)


                <tr>
                    <td data-label="Name" >
                        {{ $item->id }}
                      </td>
                  <td data-label="Name" >
                    {{ $item->name }}
                  </td>
                  <td data-label="Name" >
                    {{ $item->email }}
                  </td>
                  <td data-label="Name" >
                    {{ $item->role }}
                  </td>

                </tr>

                @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>

</div>
