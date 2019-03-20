@extends('layouts.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('slider.create')}}" class="btn btn-info">Add New</a>
                    @if(session('successMsg'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                                    onclick="this.parentElement.style.display='none'">
                                <i class="material-icons">close</i>
                            </button>
                            <span>
                                            <b> Success - </b>{{ session('successMsg') }} </span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">All Slider</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    </thead>
                                    <tbody>
                                        @foreach($sliders as $key=>$slider)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$slider->title}}</td>
                                                <td>{{$slider->sub_title}}</td>
                                                <td>{{$slider->image}}</td>
                                                <td>{{$slider->created_at}}</td>
                                                <td>{{$slider->updated_at}}</td>
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