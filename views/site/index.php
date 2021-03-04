<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        
        <h1>Hola !</h1>

    </div>

    <div class="body-content">
    </div>

    <!-- Single button -->
    <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Action <span class="caret"></span>
        </button>
    <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
    </ul>
    </div>

        <div class="row">
            <div class="alert alert-success" role="alert">
                <a href="#" class="alert-link">This is Primary Alert</a>
            </div>

            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
            </div>


            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>

            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-addon" id="basic-addon2">@example.com</span>
            </div>

            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-addon">.00</span>
            </div>

            <label for="basic-url">Your vanity URL</label>
                <div class="input-group">
                <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div

</div>

