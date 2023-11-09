 <!-- Page body -->
 <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader">Total Devices</div>
                <div class="ms-auto lh-1">
                </div>
              </div>
              <div class="h1 mb-3">{{ $totalDevice }}</div>
              <div class="d-flex mb-2">
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader">Total Users</div>
                <div class="ms-auto lh-1">
                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-0 me-2">{{ $totalUser }}</div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader">Total Orders</div>
                <div class="ms-auto lh-1">

                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-3 me-2">{{ $totalOrder }}</div>

              </div>

            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex align-items-center">
                <div class="subheader">Now Active</div>
                <div class="ms-auto lh-1">

                </div>
              </div>
              <div class="d-flex align-items-baseline">
                <div class="h1 mb-3 me-2">{{ auth()->user()->name }}</div>

              </div>

            </div>
          </div>
        </div>
       
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Traffic summary</h3>
              <div id="chart-mentions" class="chart-lg"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Locations</h3>
              <div class="ratio ratio-21x9">
                <div>
                  <div id="map-world" class="w-100 h-100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
