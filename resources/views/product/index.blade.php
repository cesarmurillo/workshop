@extends('layouts.app')

@section('menu_dashboard', 'open active')
@section('title', 'Listado de Catalogos')
@section('title-description', 'Administración de los catalogos del sistema')

@section('content')
<div class="container">

    <table class="table table-dark" id="users-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Subtitle</th>
                <th>ISBN</th>
                <th>Condition</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Deleted At</th>
            </tr>
        </thead>
    </table>

</div>
@stop

@push('scripts')
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('datatables.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'subtitle', name: 'subtitle' },
                    { data: 'isbn', name: 'isbn' },
                    { data: 'condition', name: 'condition' },
                    { data: 'description', name: 'description' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'deleted_at', name: 'deleted_at' },
                ]
            });
        });
    </script>
@endpush

