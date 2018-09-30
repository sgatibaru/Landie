<div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tenant Details</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('addTenant') }}">
                  {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="tenant name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Contact</label>

                    <div class="col-sm-10">
                      <input type="contact" class="form-control" id="inputEmail3" name="contact" placeholder="Phone Number">
                    </div>
                  </div>
                  <label from="inputEmail3" class="col-sm-2 control-lable">Room Number</label>
                  <div class="col-sm-10">
                   <select class="form-control" name="roomnumber" placeholder="roomnumber">
                     @foreach($rooms as $room)
                        <option value="{{ $room->id }}" >{{ $room->housenumber }}</option>
                      @endforeach

                   </select>
                 </div>
              </div>
                <!-- /.box-body -->


              </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  <button type="submit" name="submit" class="btn btn-outline">Save changes</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
  </div>
        <!-- /.modal -->
