@extends('landlord.layout.index')

@section('styles')

  <style>
  .example-modal .modal {
    position: relative;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    display: block;
    z-index: 1;
  }

  .example-modal .modal {
    background: transparent !important;
  }
</style>


@endsection


@section('content')

<div class="row">
  <div class="col-md-8">

  <!-- PRODUCT LIST -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tenants</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

            <ul class="products-list product-list-in-box">
          @foreach($tenants as $tenant)
              <li class="item">
                <div class="product-img">
                  <img src="dist/img/default-50x50.gif" alt="Product Image">
                </div>
                <div class="product-info">
                  <a href="javascript:void(0)" class="product-title">{{ $tenant->username }}
                    <span class="label label-warning pull-right">{{ $tenant->contact }}</span></a>
                  <span class="product-description">
                        {{ $tenant->roomnumber }}
                      </span>
                </div>
              </li>
            @endforeach
              <!-- /.item -->



            </ul>
          </div>

          <!-- /.box-footer -->
        </div>
        <!-- /.box -->
      </div>

      <div class="col-md-4">

          {{-- add new users --}}
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add users</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                {{-- modal buttons --}}
                {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                  Add Admin
                </button> --}}


              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
               Add Tenant
             </button>

              {{-- end of modal --}}
            </div>

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
      </div>

</div>
@include('landlord.partials.addAdmin')
@include('landlord.partials.addTenantModal')
@endsection
