@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Task</div>

                <div class="panel-body">
                    <form>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="title" placeholder="Title"
                                           autofocus autocomplete="off">
                                </div>
                            </div>                            
                            <div class="col-sm-6 text-center">
                                <input name="submit" type="submit" class="btn btn-primary" value="Add Task">
                            </div>
                        </div>
                    </form>
                    
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-heading">All Tasks</div>
                                <div class="panel-body">
                                    @foreach($tasks as $task)
                                        <li>{{ $task->title }}</li>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer_scripts')
<script type="text/javascript">   						
$(function () {
    $('form').on('submit', function (e) {
        e.preventDefault();
        
        $.ajax({
            url: '/task/store',
            type: 'PATCH',
            data: $(this).serialize(),
            dataType: 'JSON',
            success: function (data) {
                document.location.reload();
            },
            error: function (data) {   
                var response  = $.parseJSON(data.responseText);  
                $.each(response.errors, function( key, value) {
                    alert(value);
                    return;
                });
                return;
            }
        });        
    });
});       
</script>
@endPush
