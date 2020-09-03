@extends('layout')

@section('content')
    <form method="POST" action={{ route('posts.store') }}>
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="content">
        </div>
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red;">{{ $error }}</li>  
                    @endforeach
                </ul>
            </div>       
        @endif
        <button type="submit">Create</button>
    </form>
@endsection('content')