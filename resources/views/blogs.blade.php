<x-layout>
    <div class="container">
        @foreach ($blogs as $blog)
            <h2><a href="/blogs/{{$blog->slug}}">{{$blog->title}}</a></h2>
            <p>{{substr($blog->body,0,50)}}...</p>
            <p>{{$blog->created_at}}</p>
        @endforeach
    </div>
</x-layout>


{{-- blogs categories

a blog belongsTo a category

a category hasMany blogs


Table level
blogs - category_id
categories --}}
