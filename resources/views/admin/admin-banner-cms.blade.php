@extends('layout.admin-cms-layout')

@section('add-new-content')
<a href="{{route('admin-banner-create-cms')}}">
    <button class="btn bg-emerald-500 hover:bg-emerald-400 active:bg-emerald-600 text-white mr-2">Tambah Banner</button>
</a>
@endsection

@section('content')
<div class="overflow-x-auto">
    <table class="table-default table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Banner Image</th>
                <th>Banner Title</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr>
                <td class="w-[10%]">{{$loop->iteration}}</td>
                <td class="w-[40%]">
                    <img src="{{asset('storage/images/'.$banner->thumbnail)}}" alt="">
                </td>
                <td class="w-[30%]">{{$banner->title}}</td>
                <td class="w-[20%]">
                    <div class="mb-3 flex">
                        <a href="{{route('admin-banner-update-cms', [
                            'id' => $banner->id    
                        ])}}">
                            <button class="btn bg-sky-50 dark:bg-sky-500 dark:bg-opacity-20 
                            hover:bg-sky-100 dark:hover:bg-sky-500 dark:hover:bg-opacity-30 
                            active:bg-sky-200 dark:active:bg-sky-500 dark:active:bg-opacity-40 
                            text-sky-800 dark:text-sky-50 mr-2">Edit</button>
                        </a>
                        <form action="{{route('admin-banner-delete-cms',[
                                'id' => $banner->id    
                            ])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn bg-rose-50 dark:bg-rose-500 dark:bg-opacity-20 hover:bg-rose-100 dark:hover:bg-rose-500 dark:hover:bg-opacity-30 
                            active:bg-rose-200 dark:active:bg-rose-500 dark:active:bg-opacity-40 
                            text-rose-600 dark:text-rose-50 mr-2">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('content')

