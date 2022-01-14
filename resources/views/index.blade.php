@extends('layouts.app')

@section('content')
    <div id="homePage">
        <div class="container">
            <div class="body">
                <h2>LISTS</h2>
                <div class="list-container">
                    <div class="list">
                        <a href="{{ route('gamesPage', 'list') }}" class="name">List Name</a>
                        <div class="function-container">
                            <i class="far fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                    <div class="list">
                        <a href="{{ route('gamesPage', 'list') }}" class="name">List Name 2</a>
                        <div class="function-container">
                            <i class="far fa-edit"></i>
                            <i class="fas fa-trash"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection