@extends('layouts.user')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{ trans('global.show') }} {{ trans('cruds.task.title') }}
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <div class="form-group">
                                <a class="btn btn-light" href="{{ route('user.tasks.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                            <table class="table table-bordered table-striped">
                                <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $task->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $task->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.task.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $task->description }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="form-group">
                                <a class="btn btn-light" href="{{ route('user.tasks.index') }}">
                                    {{ trans('global.back_to_list') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
