@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class='col-md-8'>
        <div>
            <button class='btn btn-primary dropdown-toggle' type="button" data-toggle="dropdown">New
                <span class="caret"></span>
                <ul class="dropdown-menu">
                    <li><a href="#">Feed</a></li>
                    <li><a href="#">Transformer</a></li>
                    <li><a href="#">Api</a></li>
                </ul>
            </button/>
        </div>

        <div class="float-right">
            <h2>processing layout</h2>
            <div id='processing-nodes'>
            </div>
        </div>
	</div>
 

    <div class='col-md-4'>
    	Output
        <div>
            <object id="output-panel"
                    type="text/html"
                    data="">
            (output goes here)
            </object>
        </div>
    </div>
<!--
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
-->

    </div>
</div>
@endsection

@section('footer')
<h3>rolf</h3>
@endsection

