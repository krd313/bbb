@extends('layouts.master')
@section('content')


<div class="card">
    <div class="card-body">
        <div class="row row-cols-lg-auto g-3 align-items-left">
            <div class="col-6">
                <div>
                    <h6 class="mb-3 text-uppercase">Role List</h6>
                </div>
            </div>
            <div class="col-6">
                <div>
                    <a href="{{ route('admin.roles.create') }}" type="button" class="btn btn-outline-primary"
                        style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem;">
                        Create Role
                    </a>
                </div>
            </div> {{-- end col --}}
            @if (session('message'))
            <div class="alert alert-success alert-dismissable fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            {{-- <div class="alert alert-success"  role="alert">
					{{ session('message') }}
            <span> Success Alert</span>
        </div> --}}
        {{-- {{ session('message') }} --}}
        @endif
    </div>
    <div class="table-responsive">
        <table id="unit_table" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $key=> $role )
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td> {{ $role->name }} </td>

                    <td>
                        <div class="row row-cols-auto g-3">
                            <div class="col">


                                <a type="button" class="btn btn-outline-success"
                                    style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem;"
                                    data-bs-toggle="modal" data-bs-target=#reg-modal>Edit</a>


                            </div>
                            <div>

                                <form action="#" method="post" id="myForm" name="destroy">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem;">Delete</button>
                                </form>
                            </div>


                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
</div>




<!--end page wrapper -->




@endsection