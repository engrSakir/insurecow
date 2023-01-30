@extends('layouts.fd')

@section('content')
<div id="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 mb-3">
                <div class="response"></div>
                <div id='calendar'></div>  
            </div>
            <div class="col-lg-3" style="background: #E2FFD5; box-shadow: 0px 2px 3px rgba(0, 0, 0, 0.25);">
                    <a class="btn float-right mt-2 text-dark" style="background: linear-gradient(101.16deg, #C7F8C9 0.38%, #DDEDC7 81.93%); border-radius: 5px;" data-toggle="modal" data-target="#exampleModalCenter2">New Task</a>
                    <h4 style="position: absolute; top: 12px">Tasks</h4>

                    <div style="margin-top: 5rem">
                        @php
                            $events = App\Event::all();
                        @endphp

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    @foreach($events as $event)
                                        <tr>
                                            <th>Task Name {{ $loop->iteration }}</th>
                                            <td>{{ $event->title }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('task.save') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Task Name:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Start Date:</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror " name="start" id="datepicker" placeholder="01/02/2023" readonly required>
            </div>
            <div class="form-group">
                <label for="">Cattle:</label>
                <select name="cattle_id" class="form-control">
                    <option value="">SELECT CATTLE</option>
                    <option value="1">Lalu</option>
                    <option value="2">Kalu</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">SELECT FOOD:</label>
                <select name="category" class="form-control">
                    <option value="">SELECT CATEGORY</option>
                    <option value="medical">MEDICAL</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Priority:</label>
                <select name="priority" class="form-control">
                    <option value="">SELECT Priority</option>
                    <option value="high">HIGH</option>
                    <option value="medium">MEDIUM</option>
                    <option value="low">LOW</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">End Date:</label>
                <input type="text" class="form-control @error('date') is-invalid @enderror " name="end" id="datepicker2" placeholder="01/02/2023" readonly required>
            </div>
            <div class="form-group">
                <label for="">Details:</label>
                <textarea name="details" class="form-control" id="" rows="2"></textarea>
            </div>
            <div class="form-group float-right">
                <button type="submit" style="color: #000000; border: 2px solid #000000" class="btn" data-dismiss="modal" aria-label="Close">Cancel</button>
                <button class="btn text-white" style="background: #086343">Create Income</button>
            </div>
        </form>
    </div>
    </div>
  </div>
</div>
        </div>
    </div>
@endsection