@extends('layouts.master')

@section('title')
    DASHBOARD
@endsection

@section('content')
    <div class="justify-content-center">
            <div class="card">
                <div class="card-header">DASHBOARD</div>
                
                {{-- @dd(Auth::user()) --}}

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
    </div>
@endsection
