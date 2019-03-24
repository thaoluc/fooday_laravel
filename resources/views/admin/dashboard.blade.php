@extends('layouts.app')

@section('title','Dashboard')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">content_copy</i>
                            </div>
                            <p class="card-category">Category / Item</p>
                            <h3 class="card-title">{{$categoryCount}}/{{$itemCount}}
                            </h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons text-danger">info</i>
                                <a href="#pablo">Total Category and Item</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">slideshow</i>
                            </div>
                            <p class="card-category">Slider Count</p>
                            <h3 class="card-title">{{$sliderCount}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">date_range</i> <a href="{{route('slider.index')}}">Get More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">info_outline</i>
                            </div>
                            <p class="card-category">Reservation</p>
                            <h3 class="card-title">{{$reservations->count()}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">local_offer</i> Not Confirmed Reservation
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                            <div class="card-icon">
                                <i class="fa fa-twitter"></i>
                            </div>
                            <p class="card-category">Contact</p>
                            <h3 class="card-title">{{$contactCount}}</h3>
                        </div>
                        <div class="card-footer">
                            <div class="stats">
                                <i class="material-icons">update</i> Just Updated
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Reservations</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($reservations as $key=>$reservation)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$reservation->name}}</td>
                                            <td>{{$reservation->phone}}</td>
                                            <td>
                                                @if($reservation->status == true)
                                                    {{--<span class="label label-info">Confirmed</span>--}}
                                                    <button style="width: 139.16px" disabled type="button" class="btn btn-success">Confirm</button>
                                                @else
                                                    <button disabled type="button" class="btn btn-danger">Not confirm</button>
                                                @endif
                                            </td>
                                            <td>
                                                @if($reservation->status == false)
                                                    <form id="status-form-{{$reservation->id}}" action="{{route('reservation.status',
                                                        $reservation->id)}}"
                                                          style="display: none;" method="POST">
                                                        {{ csrf_field() }}
                                                    </form>

                                                    <button type="button" class="btn btn-info btn-sm"
                                                            onclick="if(confirm('Are you verify this request ?')){
                                                                    event.preventDefault();
                                                                    document.getElementById('status-form-{{
                                                                $reservation->id}}').submit();
                                                                    }else{
                                                                    event.preventDefault();
                                                                    }">
                                                        <i class="material-icons">done</i>
                                                    </button>
                                                @endif

                                                <form id="delete-form-{{$reservation->id}}" action="{{route('reservation.destroy',
                                                    $reservation->id)}}"
                                                      style="display: none;" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>

                                                <button type="button" class="btn btn-danger btn-sm"
                                                        onclick="if(confirm('Are you sure ? You want to delete this ?')){
                                                                event.preventDefault();
                                                                document.getElementById('delete-form-{{
                                                            $reservation->id}}').submit();
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