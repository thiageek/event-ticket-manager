@extends('admin.layout')
@section('content')
<body>
  <section id="container" class="">

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> New Event</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="icon_document_alt"></i>Events</li>
              <li><i class="fa fa-file-text-o"></i>New</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                New Event
              </header>
              <div class="panel-body">
                <form class="form-horizontal" action="{!!url('events/store')!!}" method="post">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="name" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Date</label>
                    <div class="col-sm-10">
                      <input type="date" name="date" class="form-control" placeholder="mm/dd/YYYY">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Place</label>
                    <div class="col-sm-10">
                      <input type="text" name="place" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Description</label>
                    <div class="col-sm-10">
                      <textarea name="description" class="form-control" rows=6></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Finish</label>
                    <div class="col-sm-10">
                      <input type="date" name="finish" class="form-control" placeholder="mm/dd/YYYY">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Tickets</label>
                    <div class="col-sm-10">
                      <input type="number" name="tickets" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" name="price" class="form-control">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>


</body>
@endsection()