
@extends('personal.layouts.main')

@section('title')
    Личный кабинет
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{auth()->user()->comments()->count()}}</h3>

                            <p>Comments</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <a href="{{route('personal.comment.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{auth()->user()->likedPosts()->count()}}</h3>

                            <p>Likes</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <a href="{{route('personal.liked.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
