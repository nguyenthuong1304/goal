@extends('layouts.app')
@section('content')
<div class="page-content-wrapper mt-0">
    <div class="page-content-wrapper-inner">
      <div class="content-viewport">
        <div class="row">
          <Statline></Statline>
          <div class="col-md-3 col-sm-6 col-6 equel-grid">
            <div class="grid">
              <div class="grid-body text-gray">
                <div class="d-flex justify-content-between">
                  <p>43%</p>
                  <p>+15.7%</p>
                </div>
                <p class="text-black">Conversion</p>
                <div class="wrapper w-50 mt-4">
                  <canvas height="45" id="stat-line_2"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 equel-grid">
            <div class="grid">
              <div class="grid-body text-gray">
                <div class="d-flex justify-content-between">
                  <p>23%</p>
                  <p>+02.7%</p>
                </div>
                <p class="text-black">Bounce Rate</p>
                <div class="wrapper w-50 mt-4">
                  <canvas height="45" id="stat-line_3"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-6 equel-grid">
            <div class="grid">
              <div class="grid-body text-gray">
                <div class="d-flex justify-content-between">
                  <p>75%</p>
                  <p>- 53.34%</p>
                </div>
                <p class="text-black">Marketing</p>
                <div class="wrapper w-50 mt-4">
                  <canvas height="45" id="stat-line_4"></canvas>
                </div>
              </div>
            </div>
          </div>
          <Statistical></Statistical>
          <div class="col-lg-8 col-md-12 equel-grid" style="max-height: 400px">
            <div class="grid table-responsive">
                @include('layouts.graph.rate_exchange')
            </div>
          </div>
          <div class="col-lg-5 col-md-6 col-sm-12 equel-grid">
            <div class="grid">
              <div class="grid-body">
                <div class="split-header">
                  <p class="card-title">Available Balance</p>
                  <span class="btn action-btn btn-xs component-flat" data-toggle="tooltip" data-placement="left" title="Available balance since the last week">
                    <i class="mdi mdi-information-outline text-muted mdi-2x"></i>
                  </span>
                </div>
                <div class="d-flex align-items-end mt-2">
                  <h3>26.00453100</h3>
                  <p class="ml-1 font-weight-bold">BTC</p>
                </div>
                <div class="d-flex mt-2">
                  <div class="wrapper d-flex pr-4">
                    <small class="text-success font-weight-medium mr-2">USD</small>
                    <small class="text-gray">$103,342.50</small>
                  </div>
                  <div class="wrapper d-flex">
                    <small class="text-primary font-weight-medium mr-2">EUR</small>
                    <small class="text-gray">$91,105.00</small>
                  </div>
                </div>
                <div class="d-flex flex-row mt-4 mb-4">
                  <button class="btn btn-outline-light text-gray component-flat w-50 mr-2" type="button">SEND</button>
                  <button class="btn btn-primary w-50 ml-2" type="button">RECEIVE</button>
                </div>
                <div class="d-flex mt-5 mb-3">
                  <small class="mb-0 text-primary">Recent Transaction (3)</small>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                  <p class="text-black">Received Bitcoin</p>
                  <p class="text-gray">+0.00005462 BTC</p>
                </div>
                <div class="d-flex justify-content-between border-bottom py-2">
                  <p class="text-black">Sent Bitcoin</p>
                  <p class="text-gray">-0.00001446 BTC</p>
                </div>
                <div class="d-flex justify-content-between pt-2">
                  <p class="text-black">Sent Bitcoin</p>
                  <p class="text-gray">-0.00003573 BTC</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-12 equel-grid">
            <div class="grid widget-revenue-card">
              <div class="grid-body d-flex flex-column h-100">
                <div class="split-header">
                  <p class="card-title">Server Load</p>
                  <div class="content-wrapper v-centered">
                    <small class="text-muted">2h ago</small>
                    <span class="btn action-btn btn-refresh btn-xs component-flat">
                      <i class="mdi mdi-autorenew text-muted mdi-2x"></i>
                    </span>
                  </div>
                </div>
                <div class="mt-auto">
                  <canvas id="cpu-performance" height="80"></canvas>
                  <h3 class="font-weight-medium mt-4">69.05%</h3>
                  <p class="text-gray">Storage is getting full</p>
                  <div class="w-50">
                    <div class="d-flex justify-content-between text-muted mt-3">
                      <small>Usage</small> <small>35.62 GB / 2TB</small>
                    </div>
                    <div class="progress progress-slim mt-2">
                      <div class="progress-bar bg-primary" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 equel-grid">
            <div class="grid">
              <div class="grid-body py-3">
                <p class="card-title ml-n1">Danh sách người dùng</p>
              </div>
              <div class="table-responsive">
                <table class="table table-hover table-sm">
                    <div class="loader user-table hide"></div>
                    <thead>
                        <tr class="solid-header">
                        <th colspan="2" class="pl-4">Họ tên</th>
                        <th>Người theo dõi</th>
                        <th>Đang theo dõi</th>
                      </tr>
                    </thead>
                    <tbody id="user-table">
                        @include('user._user')
                    </tbody>
                </table>
              </div>
                <div class="border-top px-3 py-2 d-block text-gray" id="user-pagination">
                    {{ $users->withPath('users')->appends(['pos' => 'user-table'])->links() }}
                </div>
            </div>
          </div>
          <div class="col-md-4 equel-grid">
            <div class="grid">
              <div class="grid-body">
                <div class="split-header">
                  <p class="card-title">Lịch sử</p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-trasnparent action-btn btn-xs component-flat pr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="mdi mdi-dots-vertical"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Expand View</a>
                      <a class="dropdown-item" href="#">Edit</a>
                    </div>
                  </div>
                </div>
                <div class="vertical-timeline-wrapper">
                  <div class="timeline-vertical dashboard-timeline">
                    <div class="activity-log">
                      <p class="log-name">Agnes Holt</p>
                      <div class="log-details">Analytics dashboard has been created<span class="text-primary ml-1">#Slack</span></div>
                      <small class="log-time">8 mins Ago</small>
                    </div>
                    <div class="activity-log">
                      <p class="log-name">Ronald Edwards</p>
                      <div class="log-details">Report has been updated
                            <div class="grouped-images mt-2">
                                <img class="img-sm" src="{{ asset('template/images/profile/male/image_4.png') }}" alt="Profile Image" data-toggle="tooltip" title="Gerald Pierce">
                                <img class="img-sm" src="{{ asset('template/images/profile/male/image_5.png') }}" alt="Profile Image" data-toggle="tooltip" title="Edward Wilson">
                                <img class="img-sm" src="{{ asset('template/images/profile/female/image_6.png') }}" alt="Profile Image" data-toggle="tooltip" title="Billy Williams">
                                <img class="img-sm" src="{{ asset('template/images/profile/male/image_6.png') }}" alt="Profile Image" data-toggle="tooltip" title="Lelia Hampton">
                                <span class="plus-text img-sm">+3</span>
                            </div>
                      </div>
                      <small class="log-time">3 Hours Ago</small>
                    </div>
                    <div class="activity-log">
                      <p class="log-name">Charlie Newton</p>
                      <div class="log-details"> Approved your request <div class="wrapper mt-2">
                          <button type="button" class="btn btn-xs btn-primary">Approve</button>
                          <button type="button" class="btn btn-xs btn-inverse-primary">Reject</button>
                        </div>
                      </div>
                      <small class="log-time">2 Hours Ago</small>
                    </div>
                    <div class="activity-log">
                      <p class="log-name">Gussie Page</p>
                      <div class="log-details">Added new task: Slack home page</div>
                      <small class="log-time">4 Hours Ago</small>
                    </div>
                    <div class="activity-log">
                      <p class="log-name">Ina Mendoza</p>
                      <div class="log-details">Added new images</div>
                      <small class="log-time">8 Hours Ago</small>
                    </div>
                  </div>
                </div>
              </div>
              <a class="border-top px-3 py-2 d-block text-gray" href="#">
                <small class="font-weight-medium"><i class="mdi mdi-chevron-down mr-2"></i> View All </small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    @parent
    <script src="{{ asset('js/dashboard.js') }}"></script>
@endsection
