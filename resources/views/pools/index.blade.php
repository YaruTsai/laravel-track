@extends('layouts.app')

@section('content')

    <div class="panel-body">

        <!-- New Pool Form -->
        <form action="{{ url('pool') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Pool Name -->
            <div class="form-group">
                <label for="pool-name" class="col-sm-3 control-label">Pool</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

        <!-- Add Pool Button -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Add Pool
                </button>
            </div>
        </div>
        </form>
    </div>

    <!-- TODO: Current Pools -->

@endsection
