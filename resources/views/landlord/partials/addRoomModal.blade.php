<div class="modal modal-success fade" id="modal-success">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Room</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('addHouse') }}">
                  {{ csrf_field() }}
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">House Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="housename" id="inputEmail3" placeholder="house name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">House Number</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="housenumber" placeholder="house number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">House Type</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" name="housetype" placeholder="House type">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Rent</label>

                    <div class="col-sm-10">
                      <input type="number" class="form-control" name="rent"  id="inputPassword3" placeholder=rent>
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
