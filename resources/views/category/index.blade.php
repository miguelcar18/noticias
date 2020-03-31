@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Categories') }}
                    <a class="btn btn-success pull-right" href="{{ route('category.create') }}"><i class="fa fa-plus"></i> {{ __('Add') }}</a>
                </div>

                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('category.edit', $category) }}"><i class="fa fa-edit"></i></a>
                                    <a class="btn btn-danger" href="#" onclick="document.getElementById('form-delete-' + {{ $category->id }} + '').submit()"><i class="fa fa-trash"></i></a>
                                    <form action="{{ route('category.destroy', $category) }}" id="form-delete-{{ $category->id }}" style="display: none;" method="POST">{{ method_field('DELETE') }}{{ csrf_field() }}</form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script type="text/javascript" class="init">
        $(document).ready(function() {
            $()
            var table = $('#example').DataTable();
        });
    </script>
@endsection
