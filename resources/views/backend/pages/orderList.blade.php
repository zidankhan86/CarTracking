@extends('backend\layout\app')
@section('content')



<div class="container">
    <br><h2 style="text-align: center">Orders Table</h2>
    <div class="col-12">
        <div class="card">
          <div class="table-responsive">
            <table
    class="table table-vcenter table-mobile-md card-table">
              <thead>
                <tr>
                    <th>ID</th>
                  <th>Name</th>

                  <th>User Name</th>
                  <th class="w-1">Email</th>
                  <th class="w-1">Tran id</th>
                  <th class="w-1">Amount</th>
                  <th class="w-1">Address</th>
                  <th class="w-1">Status</th>
                  <th class="w-1">Invoice</th>

                  <th class="w-1">Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($order as $item)


                <tr>
                  <td data-label="Name" >
                    {{ $item->id }}
                  </td>
                  <td data-label="Title" >
                    {{ $item->device->title }}
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->user->name }}
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->email }}
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->transaction_id }}
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->amount }} Tk
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->address }}
                  </td>
                  <td class="text-muted" data-label="Role" >
                    {{ $item->status }}
                  </td>

                  <td>
                    <div class="btn-list flex-nowrap">
                      <a href="{{ route('invoice',$item->id) }}" class="btn">
                        INV
                      </a>

                    </div>
                  </td>

                  <td>
                    <div class="btn-list flex-nowrap">
                        @if ($item->status == 'Processing')
                            <a href="{{ route('status', $item->id) }}" class="btn btn-success">Delivered</a>
                        @else
                            <p>Delivered</p>
                        @endif
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


@endsection
