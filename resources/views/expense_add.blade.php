@extends('layouts.app2')

@section('content')
<!-- Page Heading -->
<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Expense</h1>
</div> -->

<!-- Content Row -->
<div class="row">
    <!-- Content Column -->
    <div class="col">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Add Expense</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <!-- <form method="POST" action="{{ url('/tp/add/expense') }}"> -->
                {{ Form::open(array('url' => 'tp/add/expense', 'method' => 'post')) }}
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" name="title" class="form-control" id="inputTitle">
                    </div>

                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea name="description" class="form-control" rows="3" id="inputDescription"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputAmount">Amount</label>
                            <input type="number" name="amount" step="0.01" class="form-control" id="inputAmount">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputDate">Date</label>
                            <input name="date" data-toggle="datepicker" class="form-control" id="inputDate">
                        </div>
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                {{ Form::close() }}
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/datepicker-init.js') }}"></script>
@endsection
