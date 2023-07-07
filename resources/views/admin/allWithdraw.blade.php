@include('admin.head')
@include('admin.sidebar')



       <div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All WithDraw Table</h4>
                            <div class="card-header-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-checkbox-table custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                       class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Full Name</th>
                                        <th>Amount</th>
                                        <th>PLan</th>
                                        <th>status</th>
                                        <th>Due Date</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach ($withdraw as $withdraws)
                                    <tr>
                                            <td> {{$withdraws->id}}</td>
                                            <td> {{$withdraws->username}}</td>
                                            <td> {{$withdraws->amount}}</td>
                                            <td> {{$withdraws->wallet}}</td>
                                            <td> {{$withdraws->status}}</td>
                                            <td> {{$withdraws->created_at}}</td>
                                            <td>     <div class="dropdown d-inline mr-2">
                                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Easy Dropdown
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        {!! Form::model($withdraws, ['method' => 'PATCH', 'route' => ['allWithdraw.changeStatus', $withdraws]]) !!}
                                                        <a href="{{url('/allWithdraw/'.$withdraws->id)}}" onclick="return confirm('are u sure u want to continue')" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>{{ $withdraws->status == 'confirmed' ? 'Pending' : 'confirmed' }}</a>
                                                         {!! Form::close() !!}
                                                        <a class="dropdown-item" href="promptinter.php?user_id=&action=deleteled">Delate</a>
                                                        <a class="dropdown-item" href="promptinter.php?user_id&action=</a>
                                                        <a  class="dropdown-item" href="rean.php?user_id">Edit</a>
                                                    </div>
                                                </div>
                                            </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


    </br>

 </div>
      </div>
    </div>
  </div> <!-- end accCtnContainer -->

  @include('admin.footer')
