@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="/item/{{ $item->id }}">
                            商品名：{{ $item->name }}
                        </a>
                    </div>
                    <div class="card-body">
                        価格：{{ number_format($item->price) }}円
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

    