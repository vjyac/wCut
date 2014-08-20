@extends('layouts.default')
@section('content')


{{ Form::open(array('route' => 'wcuts.store', 'class' => 'form')) }}

	<section id="features-list" class="static-header light inverted clearfix">
    <div class="text-heading">
        <h2 class="animated hiding" data-animation="bounceInDown" data-delay="0">A simple Url Shortener !</h2>
        <p class="animated hiding" data-animation="fadeInDown" data-delay="500">Easy and fast</p>
        <?php if ($urlceo) { ?>
            <h1 class="animated hiding" data-animation="bounceInDown" data-delay="500">{{$urlceo}}</h1>
        <?php } ?>
				<br>
        <div class="container center">
        <div class="container animated hiding" data-animation="fadeInDown">
            <div class="col-md-12 col-sm-6 col-xs-12">
                <article class="center">
                  <input type="text" class="form-control" id="urllarge" name="urllarge" placeholder="paste your long URL here" />
                </article>
            </div>

					<div class="col-md-3 col-sm-3 col-xs-12">
							<article class="center">

							</article>
					</div>
						@if (!Sentry::check())
			      <div class="col-md-3 col-sm-3 col-xs-12">
                <article class="center">

                        {{ Form::captcha(array('theme' => 'white', 'class' => 'form-control required')) }}
                </article>
            </div>
						<div class="col-md-1 col-sm-1 col-xs-12">
						@else
							<div class="col-md-2 col-sm-1 col-xs-12">
						@endif

								<article class="center">

								</article>
						</div>
            <div class="col-md-1 col-sm-6 col-xs-12">
                <article class="center">
                      <input type="submit" class="btn btn-default" value="Cut" />
                </article>
            </div>
          </div>
        </div>

</section>

</form>


<?php

	$wcuts = DB::table('wcuts')->orderBy('id', 'desc')->paginate(15);

	if (count($wcuts)) {

?>

        <section id="sc-table" class="section dark">
            <div class="container">
                    <h3 class="text-center">Last url short!</h3>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Links</th>
                                <th>Short url</th>
                                <th>Visitas</th>
                            </tr>
                        </thead>
                        <tbody>

												<?php foreach ($wcuts as $wcut) { ?>
															<tr>
																	<td>{{$wcut->wcut}}</td>
																	<td><a href="http://wcut.com/{{$wcut->urlceo}}">http://wcut.com/{{$wcut->urlceo}}</a></td>
																	<td><strong>{{$wcut->visitas}}</strong></td>
															</tr>

												<?php } ?>



                        </tbody>
                    </table>
            </div>
        </section>
<?php
				}
?>

@stop
