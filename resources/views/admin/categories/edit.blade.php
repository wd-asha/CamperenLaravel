@extends('layouts.admin')
@section('title', 'Camperen | Dashboard')
@section('content')

    <div class="card pd-20 pd-sm-40 mg-t-50">
        <h6 class="card-body-title">Editing a category: {{ $category->id }}</h6>

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif

        <div class="table-responsive">
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <table class="table table-hover table-bordered mg-b-0 mb-5">
                    <thead class="bg-info">
                        <tr>
                            <th>Title</th>
                            <th>Tag</th>
                            <th>Description</th>
                            <th>Persons</th>
                            <th>Set Icons</th>
                            <th>Area, m<sup>2</sup></th>
                            <th>in main</th>
                            <th>image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <input type="text" name="title" value="{{ old('title', $category->title) }}" required width="100%">
                        </td>
                        <td>
                            <input type="text" name="subtitle" value="{{ old('subtitle', $category->subtitle) }}" width="100%">
                        </td>
                        <td>
                            <textarea name="description" cols="40" rows="8">{{ old('description', $category->description) }}</textarea>
                        </td>
                        <td>
                            <input type="text" name="persons" value="{{ old('persons', $category->persons) }}">
                        </td>
                        <td>
                            <input type="number" name="icons" value="{{ old('icons', $category->icons) }}">
                            <div class="booking__item-services" style="margin-top: 1rem">
                                @if( $category->icons === 1)
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image29.svg') }}" alt="">
                                    <img src="{{ asset('images/image30.svg') }}" alt="">
                                    <img src="{{ asset('images/image31.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 2)
                                    <img src="{{ asset('images/image33.svg') }}" alt="">
                                    <img src="{{ asset('images/image34.svg') }}" alt="">
                                    <img src="{{ asset('images/image35.svg') }}" alt="">
                                    <img src="{{ asset('images/image36.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 3)
                                    <img src="{{ asset('images/image37.svg') }}" alt="">
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image38.svg') }}" alt="">
                                    <img src="{{ asset('images/image39.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 4)
                                    <img src="{{ asset('images/image40.svg') }}" alt="">
                                    <img src="{{ asset('images/image41.svg') }}" alt="">
                                    <img src="{{ asset('images/image35.svg') }}" alt="">
                                    <img src="{{ asset('images/image42.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 5)
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image29.svg') }}" alt="">
                                    <img src="{{ asset('images/image30.svg') }}" alt="">
                                    <img src="{{ asset('images/image31.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 6)
                                    <img src="{{ asset('images/image33.svg') }}" alt="">
                                    <img src="{{ asset('images/image34.svg') }}" alt="">
                                    <img src="{{ asset('images/image35.svg') }}" alt="">
                                    <img src="{{ asset('images/image36.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 7)
                                    <img src="{{ asset('images/image33.svg') }}" alt="">
                                    <img src="{{ asset('images/image34.svg') }}" alt="">
                                    <img src="{{ asset('images/image35.svg') }}" alt="">
                                    <img src="{{ asset('images/image36.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 8)
                                    <img src="{{ asset('images/image37.svg') }}" alt="">
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image38.svg') }}" alt="">
                                    <img src="{{ asset('images/image39.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 9)
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image29.svg') }}" alt="">
                                    <img src="{{ asset('images/image30.svg') }}" alt="">
                                    <img src="{{ asset('images/image39.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 10)
                                    <img src="{{ asset('images/image33.svg') }}" alt="">
                                    <img src="{{ asset('images/image34.svg') }}" alt="">
                                    <img src="{{ asset('images/image35.svg') }}" alt="">
                                    <img src="{{ asset('images/image36.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 11)
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image29.svg') }}" alt="">
                                    <img src="{{ asset('images/image30.svg') }}" alt="">
                                    <img src="{{ asset('images/image31.svg') }}" alt="">
                                @endif
                                @if( $category->icons === 12)
                                    <img src="{{ asset('images/image37.svg') }}" alt="">
                                    <img src="{{ asset('images/image28.svg') }}" alt="">
                                    <img src="{{ asset('images/image38.svg') }}" alt="">
                                    <img src="{{ asset('images/image39.svg') }}" alt="">
                                @endif
                            </div>
                        </td>
                        <td>
                            <input type="number" name="sqr" value="{{ old('sqr', $category->sqr) }}">
                        </td>
                        <td>
                            <div class="togglebutton">
                                <label>
                            <input type="checkbox" name="is_main" {{ $category->is_main ? 'checked' : '' }}>
                                    <span class="toggle"></span>
                                </label>
                            </div>
                        </td>
                        <td>
                            <img src="/media/images/{{ $category->image }}" width="150" alt="" style="margin-bottom: 1rem;">
                        @if($category->image)
                            <img src="{{ asset('storage/' . $category->image) }}" width="150" alt="">
                        @endif
                            <input type="file" name="image">
                        </td>
                    </tbody>
                </table>

                <button type="submit" class="btn btn-success">Update</button>
            </form>

        </div>
    </div>
@endsection
