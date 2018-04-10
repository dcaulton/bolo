@extends('layouts.app')

@section('content')
<div class="home-container">
    <div class="row">
        <div class="col-md-8">
            <builder-panel></builder-panel>
            <layer-detail></layer-detail>
            <thumbnail-flow-panel></thumbnail-flow-panel>
            <control-panel></control-panel>
        </div>

        <div class=col-md-4>
            <output-panel></output-panel>
        </div>
    </div>
</div>
@endsection

