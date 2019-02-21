@extends('layouts.backend')

@section('content')

    <div class="pcoded-content">
  
        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">{{ !empty($slider->title) ? $slider->title : 'Slider' }}</h4>
            </div>
            <div class="btn-group btn-group-sm pull-right" role="group">

                <a href="{{ route('sliders.slider.index') }}" class="btn btn-primary" title="Show All Slider">
                    <span class="feather icon-list" aria-hidden="true"></span>
                </a>

                <a href="{{ route('sliders.slider.create') }}" class="btn btn-success" title="Create New Slider">
                    <span class="feather icon-plus" aria-hidden="true"></span>
                </a>

            </div>
        </div>

        <div class="panel-body">

            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('sliders.slider.update', $slider->id) }}" id="edit_slider_form" name="edit_slider_form" accept-charset="UTF-8" class="form-horizontal">
            {{ csrf_field() }}
            <input name="_method" type="hidden" value="PUT">
            @include ('admin.sliders.form', [
                                        'slider' => $slider,
                                      ])

                <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                        <input class="btn btn-primary" type="submit" value="Update">
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection