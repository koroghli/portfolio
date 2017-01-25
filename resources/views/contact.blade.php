@extends('layouts.app')
@section('page','contact')

<link href="/css/contact.css" rel="stylesheet">
<!DOCTYPE html>

  <div class="row">

  <div class="col-sm-8 col-sm-offset-2">
     <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
    <label for="name" class="control-label"style="color:white"></label>
  <div class="col-sm-8 col-sm-offset-2">
    <input type="text" name="name" class="form-control" id="name" placeholder="Your name">
        </div>
    </div>
      <div class="form-group">
    <label for="email" class="control-label"style="color:white"></label>
  <div class="col-sm-8 col-sm-offset-2">
    <input type="email" name="email" class="form-control" id="email" placeholder="Your mail">
    </div>
      </div>
    <div class="form-group">
    <label for="inputObject" class="control-label"style="color:white"></label>
      <div class="col-sm-8 col-sm-offset-2">
    <input type="text" class="form-control" name="objet" id="inputObject"placeholder="Your object">
    </div>
    </div>
  <div class="form-group">
  <div class="col-sm-8 col-sm-offset-2 ">
  <textarea class="form-control" rows="3" name="message" placeholder="Your message"style="color:black  "></textarea>
  </div>
  </div>
  <div class="form-group">
  <div class=" col-sm-8 col-sm-offset-2">
  <button type="submit" class="btn btn-default btn-success">Envoyer <span class="glyphicon glyphicon-send" ></span>
  </button>
  </div>
  </div>
  </form>
</div>
</div>
  <a href="/home" class="btn btn-default" aria-label="Left Align">
  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
  </a>


@endsection
