@extends('layout.admin-cms-layout')

@section('cms-title')
    Banner
@endsection
@section('add-new-content')
<a href="{{route('admin-banner-create-cms')}}">
    <button class="btn bg-[#344643] text-[#FFF] text-[16px] font-bold">Tambah</button>
</a>
@endsection

@section('content')
<div class="overflow-x-auto">
    <table class="">
        <thead class="bg-[#D9D9D9]">
            <tr>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">NO</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">IMAGE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">TITLE</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($banners as $banner)
            <tr>
                <td class="w-[10%] px-[1rem] py-[1.5rem]">{{$loop->iteration}}</td>
                <td class="w-[40%] px-[1rem] py-[1.5rem]">
                    <img src="{{asset('storage/images/'.$banner->thumbnail)}}" alt="">
                </td>
                <td class="w-[30%] px-[1rem] py-[1.5rem] text-[#32343B]">{{$banner->title}}</td>
                <td class="w-[20%] px-[1rem] py-[1.5rem]">
                    <div class="mb-3 flex">
                        <a href="{{route('admin-banner-update-cms', [
                            'id' => $banner->id    
                        ])}}">
                            <button class="btn text-[#029764] text-[16px] font-bold">Edit</button>
                        </a>
                        <form action="{{route('admin-banner-delete-cms',[
                                'id' => $banner->id    
                            ])}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button  onclick="return confirm('Are you sure?')" type="submit" class="btn text-[#E36004] text-[16px] font-bold">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection('content')

