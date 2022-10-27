@extends('admin.layouts.app')
@section('content')
    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Dashboard</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">UI Elements</a></li>
                                <li class="active">Badges</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">

            <div class="badges">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <strong>Dashboard</strong>
                            </div>
                            <div class="card-body">

                            </div>
                        </div><!-- /# card -->
                    </div><!--  /.col-lg-6 -->

                </div> <!-- .badges -->

            </div><!-- .row -->
        </div><!-- .animated -->
    </div><!-- .content -->
@endsection
