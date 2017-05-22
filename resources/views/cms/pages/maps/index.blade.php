@extends('cms.master')

@section('content')
<div id="app">
    <section class="content-header">
      <h1> Mappen <small></small> </h1>

      <!--  breadcrumbs -->
      <ol class="breadcrumb">
        <li><a href="{{ URL::to("cms/") }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mappen</a></li>
      </ol>

    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mappenstructuur</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                </div>
              </div>
            </div>

            <!-- /.box-header -->
            <div class="box-body no-padding">
            @foreach($maps as $map)
                <div class="col-lg-3 text-center">

                  <a href='maps/{{ $map->id }}/edit?'>
                    <img src='/images/cms/directory.png' class='img-responsive'/>
                  </a>

                  <p>{{ $map->name }}</p>

                </div>
            @endforeach
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->
        </div>
      </div>
  </section>
</div>
@stop
@section('scripts')
  <script type="text/javascript" src="/js/vue.js" ></script>
@stop