@extends('layouts.admin')
@section('title', 'Camperen | Dashboard')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Orders</h6>
        <p class="mg-b-20 mg-sm-b-30">Total Orders: {{ $orders->total() }}<span style="float: right"></p>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-bordered mg-b-0 mb-5">
                <thead class="bg-info">
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Title</th>
                    <th>Date In</th>
                    <th>Date Out</th>
                    <th>Price, $</th>
                    <th>Status</th>
                    <th>Checked, $</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>{{ $order->category->title }}</td>
                        <td>{{ $order->checkin }}</td>
                        <td>{{ $order->checkout }}</td>
                        <td>{{ $order->price }}</td>
                        <td>
                            <div class="togglebutton">
                                <label>
                                    @if($order->status)
                                        <a href="{{route('order.status0', $order->id)}}">
                                            <input type="checkbox" checked>
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                    @if(!$order->status)
                                        <a href="{{route('order.status1', $order->id)}}">
                                            <input type="checkbox">
                                            <span class="toggle"></span>
                                        </a>
                                    @endif
                                </label>
                            </div>
                        </td>
                        <td>{{ $order->checked }}</td>
                        <td>
                            {{ $order->created_at->format('d.m.Y') }}
                        </td>
                        <td>
                            @if($order->status !== 0)
                            <a href="" class="btn btn-success" data-toggle="modal" data-target="#modaldemo3"><i class="fa fa-pencil"></i></a>
                            @endif
                                <a href="{{ route('admin.order.delete', $order->id) }}" id="delete" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>

                    <!-- LARGE MODAL -->
                    <div id="modaldemo3" class="modal fade">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content tx-size-sm">
                                <div class="modal-header pd-x-20">
                                    <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Checked</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="{{ route('admin.order.checked', $order->id) }}">
                                    @csrf
                                    <div class="modal-body pd-20">
                                        <div class="form-group @error('order_checked') is-invalid @enderror">
                                            <input type="text" name="order_checked" class="form-control" placeholder="Checked" value="{{ $order->checked }}">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-block">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if($orders->total() == 0)
                    <tr>
                        <td></td>
                        <td></td>
                        <td><p style="text-align: center">no orders...</p></td>
                        <td></td>
                    </tr>
                @endif
                </tbody>
            </table>

            <div class="mt-3">
                {{ $orders->links('vendor.pagination.bootstrap-4') }}
            </div>

        </div>
    </div>



@endsection

