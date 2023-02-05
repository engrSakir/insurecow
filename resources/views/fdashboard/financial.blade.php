@extends('layouts.fd')

@section('content')
    <!-- Main Content -->
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- DataTales Example -->
            <!-- Content Row -->
            <h3>Financial 
                <a href="#" class="btn float-right text-dark dropdown-toggle" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border-radius: 5px;" data-toggle="dropdown">Add New Report</a> 
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Add New Income</a></li>
                        <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter1">Add New Expense</a></li>
                    </ul>
                <a href="" class="btn float-right text-dark"><img src="{{ asset('/images/Vector.png') }}" class="img-fluid float-right"></a> </h3>
                
                @if( Session::has( 'success' ))
                    <div class="alert text-white mt-5" style="background: #226034">
                        {{ Session::get( 'success' ) }}
                    </div>
                @endif
                @if( Session::has( 'notification' ))
                    <div class="alert text-white mt-5" style="background: #226034">
                        {{ Session::get( 'notification' ) }}
                    </div>
                @endif
                <div class="row">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6">
                    <div class="card mb-3 mt-2" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Value</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\Farmer_reg_2::where('user_id', auth()->user()->id)->get()->sum('price') }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <!-- <p class="cattle">$ 12,00,000</p> -->
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mt-2">
                    <div class="card mb-3" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Costs</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\FarmerExpense::where('user_id', auth()->user()->id)->get()->sum('amount') }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                            <!-- <p class="cattle">120</p> -->
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mt-2">
                    <div class="card mb-3" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Sell

                                    </div>
                                    <div></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->where('earning_category', 'milk')->orWhere('earning_category', 'cattle')->get()->sum('amount') }}
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>

                            </div>
                            <!-- <p class="cattle">100</p> -->
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mt-2">
                    <div class="card mb-3" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Profit

                                    </div>
                                    <div></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->get()->sum('amount') }}
                                    </div>
                                </div>
                                <div class="col-auto ">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>

                            </div>
                            <!-- <p class="cattle">100</p> -->
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <!-- <div class="col-xl-3 col-md-6">
                    <div class="card mb-3" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Milk Sale</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->where('earning_category', 'milk')->get()->sum('amount') }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Earnings (Monthly) Card Example -->
                <!-- <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card" border style="height: 150px;width: 240px; background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                        <div class="card-body" style="background: linear-gradient(rgba(199, 248, 201, 1) , rgba(221, 237, 199, 1));">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;">
                                        Total Bull Sale</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                        ৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->where('earning_category', 'bull')->get()->sum('amount') }}
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cow fa-2x text-dark"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-8 mb-2">
                    <div class="card" style="height: 180px; width: 520px; color:black ;background: #F8F9FC">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xl font-weight-bold text-uppercase mb-1" style="color:black ;background: #F8F9FC">
                                    End of Year Organizer

                                    </div>
                                    <div></div>
                                    <div class="h6 text-gray-800">
                                    Organize all of your purchases and sales of cattle and non-cattle income & expenses in a single PDF or Spreadsheet for sharing with your accountant at tax time.
                                    </div>
                                </div>

                            </div>
                            <a href="#" class="btn" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%);box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.15);border-radius: 5px; color: black">End of Year Organizer</a>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle"><center>Add New Income</center></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('income.save') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Amount:</label>
                                    <input type="number" name="amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Cattle:</label>
                                    <select name="cattle_id" class="form-control">
                                        <option value="">SELECT CATTLE</option>
                                        @foreach($cattles as $cattle)
                                            <option value="{{ $cattle->id }}">{{ $cattle->cattle_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Earning Category:</label>
                                    <select name="earning_category" class="form-control">
                                        <option value="">SELECT EARNING CATEGORY</option>
                                        <option value="milk">MILK</option>
                                        <option value="cattle">Cattle</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Invoice:</label>
                                    <input type="text" name="invoice" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Comment:</label>
                                    <input type="text" name="comment" class="form-control">
                                </div>
                                <div class="form-group float-right">
                                    <button type="button" style="color: #000000; border: 2px solid #000000" class="btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn text-white" style="background: #086343">Create Income</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLongTitle"><center>Add New Expense</center></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('farmer.expense.save') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Date:</label>
                                    <input type="date" name="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Amount:</label>
                                    <input type="number" name="amount" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Cattle:</label>
                                    <select name="cattle_id" class="form-control">
                                        <option value="">SELECT CATTLE</option>
                                        @foreach($cattles as $cattle)
                                            <option value="{{ $cattle->id }}">{{ $cattle->cattle_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">SELECT EXPENSE CATEGORY:</label>
                                    <select name="category" class="form-control">
                                        <option value="">SELECT EXPENSE CATEGORY</option>
                                        <option value="medical">MEDICAL</option>
                                        <option value="food">FOOD</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Invoice:</label>
                                    <input type="text" name="invoice" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Comment:</label>
                                    <input type="text" name="comment" class="form-control">
                                </div>
                                <div class="form-group float-right">
                                    <button type="button" style="color: #000000; border: 2px solid #000000" class="btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                                    <button class="btn text-white" style="background: #086343">Create Income</button>
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3>   </h3>
                 
            <div class="row">
                <div class="col-lg-9 p-3 mb-3" style="background: #F0F0F0;border-right: 25px solid #F8F9FC;">
                <div class="card">    
                    <div class="table-responsive" style="background: #F0F0F0;">
                        <table class="table text-dark">
                            <tbody>
                            <h4 class="pl-3">Income</h4>
                                <tr>
                                    <th>Cattle Sales</th>
                                    <td></td>
                                    <td></td>
                                    <td>৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->where('earning_category', 'cattle')->get()->sum('amount') }}.00</td>
                                </tr>            
                            <tr>
                                <th>Cost of Goods Sold</th>
                                    <td></td>
                                    <td></td>
                                    <td>৳ {{ App\FarmerExpense::where('user_id', auth()->user()->id)->get()->sum('amount') }}.00</td>
                                </tr>
                            <tr>
                                <th>Net Profit</th>
                                    <td></td>
                                    <td></td>
                                    <td>৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->get()->sum('amount') - App\FarmerExpense::where('user_id', auth()->user()->id)->get()->sum('amount') }}.00</td>
                                </tr>
                                <th>Net Income</th>
                                    <td></td>
                                    <td></td>
                                    <td>৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->get()->sum('amount') }}.00</td>
                                </tr>
                                <tr>
                                    <th>Total Profit</th>
                                    <td></td>
                                    <td></td>
                                    <td>৳ {{ App\FarmerIncome::where('user_id', auth()->user()->id)->get()->sum('amount') - App\FarmerExpense::where('user_id', auth()->user()->id)->get()->sum('amount') }}.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>        
                    </div>
                </div>
                <div class="col-lg-3 p-3" style="background: #F0F0F0;border-right: 25px solid #F8F9FC;"> 
                    <h5>Recent History<a href="#" class="p-1" style="float: right; color: #000000;font-size: 16px;">See All</a></h5>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody class="text-dark">
                                @foreach( App\FarmerIncome::where('user_id', auth()->user()->id)->take(5)->get() as $income )
                                <tr>
                                    <th>#000{{ $loop->iteration }} {{ $income->comment }} </th>
                                    <td></td>
                                    <td></td>
                                    <td class="text-success">+৳ {{ $income->amount }}.00</td>
                                </tr>
                                @endforeach
                                @foreach( App\FarmerExpense::where('user_id', auth()->user()->id)->take(5)->get() as $expense )
                                <tr>
                                    <th>#000{{ $loop->iteration }} {{ $expense->comment }}</th>
                                    <td></td>
                                    <td></td>
                                    <td class="text-danger">-৳ {{ $expense->amount }}.00</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
@endsection
