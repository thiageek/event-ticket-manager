@extends('admin.layout')
@section('content')
<body>
  <section class="container">
    <section class="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Events</h3>
            <div class="row">
              <div class="col-lg-12">
                <section class="panel">
                  <header class="panel-heading">
                    List of events
                  </header>
                  <table class="table table-stripped">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Place</th>
                        <th>Tickets</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($events as $event)
                      <tr>
                        <td>{{$event->date}}</td>
                        <td>{{$event->name}}</td>
                        <td>{{$event->place}}</td>
                        <td>{{$event->tickets}}</td>
                        <td>{{$event->price}}</td>
                        <td>
                          <div class="btn-group">
                            <a class="btn btn-danger" href="{{!!url('events/delete/'.$event->id)!!}}"><i class="icon_close_alt2"></i></a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </section>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
</body>
@endsection()