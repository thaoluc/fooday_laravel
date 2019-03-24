@extends('layouts.app')

@section('title','Contact')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Contact Message</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Sent At</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $key=>$contact)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$contact->name}}</td>
                                                <td>{{$contact->subject}}</td>
                                                <td>{{$contact->created_at}}</td>

                                                <td>
                                                    <a href="{{route('contact.show',$contact->id)}}" class="btn btn-info btn-sm"><i
                                                        class="material-icons">details</i></a>

                                                    <form id="delete-form-{{$contact->id}}" action="{{route('contact.destroy',$contact->id)}}"
                                                        style="display: none;" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                    </form>

                                                    <button type="button" class="btn btn-danger btn-sm"
                                                            onclick="if(confirm('Are you sure ? You want to delete this ?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{
                                                                $contact->id}}').submit();
                                                            }else{
                                                                event.preventDefault();
                                                                    }">
                                                        <i class="material-icons">delete</i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <scripts src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></scripts>
    <scripts src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></scripts>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );
    </script>
@endpush