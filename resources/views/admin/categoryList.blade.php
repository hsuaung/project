@extends('layouts.admin.masterLayout')
@section('page', 'Category Management')
@section('title', 'Category Management')



@section('content')

    <div class="table">

        <div class="title">

            <form action="{{ route('searchCategory') }}" method="GET" class="btn search_btn">
                <input type="text" name="search" placeholder="Search..">
                <button type="submit"><i class="lni lni-search-alt"></i></button>
            </form>

            <div class="btn add_btn">
                <a href="{{ route('addCategory') }}">
                    <i class="lni lni-circle-plus"></i>
                    <p>Add </p>
                </a>
            </div>

        </div>
        @if ($categories->isEmpty())
            <div class="noResult">
                <i class="lni lni-sad"></i>
                <h2 style="text-align: center">Sorry,We dont have that category you have been searching for. </h2>
            </div>
        @else
            <table>
                <tr>
                    <th>ID</th>
                    <th><i class="lni lni-image"></i></th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td><img width="80" height="80" src="{{ asset("$category->image") }}" alt="Product"></td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="{{ url('/admin/editCategory' . $category->id) }}"><img
                                    src="{{ asset('image/admin/edit.svg') }}" alt=""></a>

                            <a href="{{ url('/admin/deleteCategoryProcess' . $category->id) }}"><img
                                    src="{{ asset('image/admin/trashbin.svg') }}" alt=""></a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $categories->links() }}
            @endif
    </div>




@endsection
