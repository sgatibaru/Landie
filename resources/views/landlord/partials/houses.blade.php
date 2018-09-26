@extends('landlord.layout.index')

@section('content')

  <div class="row">
    <div class="col-md-8">

      <div class="box">
           <div class="box-header">
             <h3 class="box-title">Your Houses</h3>

             <div class="box-tools">
               <div class="input-group input-group-sm" style="width: 150px;">
                 <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                 <div class="input-group-btn">
                   <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                 </div>
               </div>
             </div>
           </div>
           <!-- /.box-header -->
           <div class="box-body table-responsive no-padding">
             <table class="table table-hover">
               <tr>
                 <th>House Number</th>
                 <th>House Name</th>
                 <th>Type</th>
                 <th>Rent</th>
                 <th>Rent status</th>
               </tr>
               @foreach ($houses as $house)
                 <tr>
                   <td>{{ $house->housenumber }}</td>
                   <td>{{ $house->housename }}</td>
                   <td>{{ $house->housetype}}</td>
                   <td>{{ $house->rent }}</td>
                  <td><span class="label label-success">paid</span></td>
                 </tr>
               @endforeach


             </table>
           </div>
           <!-- /.box-body -->
         </div>
          <!-- /.box -->
    </div>

        <div class="col-md-4">

            {{-- add new users --}}
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Add Houses</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body">

                  {{-- modal buttons --}}
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                   Add House
                 </button>



                {{-- end of modal --}}
              </div>
          
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>

  </div>

@include('landlord.partials.addRoomModal')
@endsection
