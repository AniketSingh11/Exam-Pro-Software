<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
	<?php echo __('Installation');?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('bootstrap.min');
                echo $this->Html->css('style');
                echo $this->Html->css('validationEngine.jquery');
		echo $this->fetch('meta');		
		echo $this->fetch('css');
                echo $this->Html->script('jquery-1.8.2.min');
		echo $this->Html->script('html5shiv');
                echo $this->Html->script('respond.min');                
                echo $this->Html->script('bootstrap.min');
                echo $this->Html->script('jquery.validationEngine-en');
                echo $this->Html->script('jquery.validationEngine');		
		echo $this->fetch('script');
                echo $this->Js->writeBuffer();		
?>
<script>
	jQuery(document).ready(function(){
	// binds form submission and fields to the validation engine
	jQuery("#post_req").validationEngine();
	$("#checkme").click(function() {
        $("#submitaccept").attr("disabled", !this.checked);
      });
        });
	</script>
</head>
  <body>
	<div class="container">
		<div class="row">	
			<div  class="col-md-12 mrg">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo$this->Html->image('logo-website.fw.png',array('alt'=>'Edu Expression','class'=>'img-responsive'));?></div>
					<?php echo $this->Form->create('Installer',array('controller' => 'Installer','action'=>'step2','name'=>'post_req','id'=>'post_req'));?>
                                        <div class="panel-body">
					  <?php echo $this->Session->flash();?>
						<p class="btn btn-primary"><?php echo __('Step 2 of 4');?></p>
						<div style="max-height:300px; overflow-y:auto"> 
						<h1><?php echo __('Installation Agreement');?></h1> 
						<p> &nbsp;</p>
						<p><strong> LICENSING </strong></p>
<p>This End User License Agreement is a binding legal agreement between you or your company. signifies that you have read, understood, and agreed to be bound by the terms outlined below. </p>

<br>
	<p><strong>LICENSING </strong></p> 


<br>

<br>
<p> <strong> USAGE TERMS </strong> </p>
<p>
</p>
<p>
<p>You are allowed to make any changes to the code; however modified code will not be supported by us. </p>
 <p>
</p>
<br>
<p> <strong>MODIFICATION OF SOFTWARE </strong> </p>
<p>
You are authorized to make any modification. extension PHP code. However, if you change any PHP code and it breaks functionality, support may not be available to you. </p>
<p>

<br></p>
<p> <br> </p>
<p>Please contact us if you have any requirements.
</p>

						</div>
                                                <?php echo$this->Form->input('accept',array('type'=>'checkbox','id'=>'checkme','label'=>__('I Accept to Proceed'),'hiddenField'=>false));?>
						<?php echo$this->Form->button(__('Submit'),array('class'=>'btn btn-success','id'=>'submitaccept','disabled'=>'disabled'));?>
                                                <?php echo$this->Form->end(null);?>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="container">
		<div class="panel panel-success">
			<div class="panel-footer">
				<div class="row">					
					<div class="col-md-12 text-center"></div>
				</div>
			</div>
		</div>
	</div>
  </body>
</html>