<?php $__env->startSection('page','apropos'); ?>
<?php $__env->startSection('title','Apropos'); ?>
<?php $__env->startSection('content'); ?>
<link href="/css/apropos.css" rel="stylesheet">
<div class="row">
    <div class="col-md-10 col-md-offset-2">
      <div class="text-center">
        <h1  style="margin-top:20%">A propos de moi</h1>
        <p>Je m'appelle Koroghli Amira, j'ai commencé le développement web pour développer mon site personnel active, <br>
        patiente,creative et passionnée par le web et la programmation. J'aime expérimenter, <br>
        découvrir et apprendre au fur et à mesure de mes projets personnels.
        </p>
      </div>
      </div>
    </div>
    <a href="/home" class="btn btn-default" aria-label="Left Align">
    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
    </a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>