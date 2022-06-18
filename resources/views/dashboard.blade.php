@extends('layouts.app')
@section('content')
    <div class="panel panel default">
        <div class="panel-body">
            <div class="row">
                @foreach($folders as $folder)
                    <div class="col-md-2">
                        <a href="dashboard?folder={{ $folder->id}}">
                            <img src="{{ url('img/folder.png') }}" alt="" class="img-responsive" title="{{ $folder->name }}">
                        </a>
                        <p class="text-center" style="font-size: 12px"> {{ substr($folder->name,0,16) }}..</p>
                    </div>
                @endforeach
                    @foreach($files as $file)
                        <div class="col-md-2">
                            <img src="{{ url('img/file.png') }}" alt="" class="img-responsive" title="{{ $file->name }}">
                            <p class="text-center" style="font-size: 12px"> {{ substr($file->name,0,16) }}..</p>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
