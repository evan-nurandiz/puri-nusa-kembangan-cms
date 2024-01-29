@extends('layout.admin-cms-layout')

@section('cms-title')
    Article
@endsection
@section('add-new-content')
<a href="{{route('admin-article-create-cms')}}">
    <button class="px-[16px] py-[13px] rounded-[6px] bg-[#344643] flex items-center gap-[10px]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M8 3V13M13 8L3 8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="text-[#FFF] text-[16px] font-bold tracking-[0.5px]">Tambah</span>
    </button>
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
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">UPDATED</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">CREATED BY</th>
                <th class="px-[1rem] py-[0.75rem] text-[#8A898E] text-left text-[0.75rem] font-semibold leading-[1rem]">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr class="bg-[#FFF]">
                <td class="w-[5%] px-[1rem] py-[1.5rem]">{{$loop->iteration}}</td>
                <td class="w-[370px] h-[417px] px-[1rem] py-[1.5rem]">
                    <img src="{{asset('storage/images/'.$article->article_thumbnail)}}" alt="">
                </td>
                <td class="w-[20%] px-[1rem] py-[1.5rem] text-[#32343B]">{{$article->article_title}}</td>
                <td class="w-[20%] px-[1rem] py-[1.5rem] text-[#32343B]">{{ \Carbon\Carbon::parse($article->updated_at)->format('d/m/y h:m') }}</td>
                <td class="w-[10%] px-[1rem] py-[1.5rem] text-[#32343B]">{{$article->article_created_by}}</td>
                <td class="w-[20%] px-[1rem] py-[1.5rem]">
                    <div class="mb-3 flex">
                        <a href="{{route('admin-article-edit-cms', [
                            'id' => $article->id    
                        ])}}">
                            <button class="btn text-[#029764] text-[16px] font-bold">Edit</button>
                        </a>
                        <form action="{{route('admin-article-delete-cms',[
                                'id' => $article->id    
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

