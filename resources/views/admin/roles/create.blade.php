@extends('layouts.master')
@section('content')

<div class="row">
    <div class="col-xl-4 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="row row-cols-lg-auto g-3 align-items-left">
                    <div class="col-6">
                        <div>
                            <h6 class="mb-3 text-uppercase">Create Role</h6>
                        </div>
                    </div>
                    <div class="col-6">
                        <div>
                            <a href="{{ route('admin.roles.index') }}" type="button" class="btn btn-outline-primary"
                                style="--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .2rem; --bs-btn-font-size: .75rem;">
                                Roles List
                            </a>
                        </div>
                    </div> {{-- end col --}}
                </div>


                @if(session('success'))
                <div>{{ session('success') }}</div>

                @endif

                @if($errors->any())
                @foreach($errors->all() as $error)
                {{ $error }}<br>
                @endforeach
                @endif

                <form novalidate class="row g-3" method="post" action="{{ route('admin.roles.store') }}" id="form">
                    @csrf

                    {{-- <form class="row g-3"> --}}
                    <div class="col-md-12">
                        <label for="name" class="form-label">Role Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>

                    </div>






                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            {{-- <a href="{{ route('admin.roles.index') }}" class="btn btn-info px-5 radius-30">Add Unit</a> --}}
                        </div>

                    </div>
                    <input type="submit" class="btn btn-success waves-light px-5 radius-30" value="Add Role">

                </form>






            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    const form = document.querySelector("form")

    form.addEventListener('submit', e => {
        if (!form.checkValidity()) {
            e.preventDefault()
        }

        form.classList.add('was-validated')
    })
</script>