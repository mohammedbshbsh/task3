@extends('layout.app')
@section('content')
<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                <!-- New Task Form -->
                <form action="{{url('/store')}}" method="POST" class="form-horizontal">
          @csrf
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>
                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
        @foreach($task as $tas)
                    <tr>
                        <td class="table-text"><div>{{$tas->name}}</div></td>

                        <td>
                            <a class="btn btn-outline-primary" href="{{url('edit/task/').'/' .$tas->id}}"><span style="display:inline;">Edit</span></a>
                            <a class="btn btn-outline-danger"  href="{{url('delete/task/').'/'.$tas->id}}"><span>Delete</span></a>
                        </td>
                    </tr>
        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
