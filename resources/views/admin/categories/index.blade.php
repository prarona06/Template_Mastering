@extends('layouts.admin')
@section('admin-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="py-3" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard' )}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
@endsection
