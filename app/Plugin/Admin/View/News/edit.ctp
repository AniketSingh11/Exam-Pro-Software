<div <?php if(!$isError){?>class="container"<?php }?>>
<div class="panel panel-custom mrg">
<div class="panel-heading"><?php echo __('Edit News');?><?php if(!$isError){?><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><?php }?></div>
<div class="panel">
                <div class="panel-body"><?php echo $this->Session->flash();?>
					<?php echo $this->Form->create('News', array( 'controller' => 'News','name'=>'post_req','id'=>'post_req','class'=>'form-horizontal'));?>
					<?php foreach ($News as $k=>$post): $id=$post['News']['id'];$form_no=$k+1;?>
					<script type="text/javascript">
					$(document).ready(function(){
					    $( "#NewsNewsTitle<?php echo$id;?>").blur(function() {
						var link_name=$('#NewsNewsTitle<?php echo$id;?>').val();
						var link_url=escapeRegExp(link_name);
					    $('#NewsPageUrl<?php echo$id;?>').val(link_url);
					    });
					      });
				    </script>
						<div class="panel panel-default">
							<div class="panel-heading"><strong><small class="text-danger"><?php echo __('Form');?> <?php echo$form_no?></small></strong></div>
							<div class="panel-body">
								<div class="form-group">
									<label for="group_name" class="col-sm-2 control-label"><?php echo __('News Title');?></label>
									<div class="col-sm-4">
									   <?php echo $this->Form->input("$k.News.news_title",array('id'=>"NewsNewsTitle$id",'label' => false,'class'=>'form-control','placeholder'=>__('News Title'),'div'=>false));?>
									</div>
									<label for="group_name" class="col-sm-2 control-label"><small>Page Url</small></label>
									<div class="col-sm-4">
									   <?php echo $this->Form->input("$k.News.page_url",array('id'=>"NewsPageUrl$id",'label' => false,'class'=>'form-control input-sm validate[required]','data-errormessage'=>'Page Url Required','placeholder'=>'Page Url','div'=>false));?>
									</div>
								</div>
								<div class="form-group">
									<label for="group_name" class="col-sm-2 control-label"><?php echo __('News Description');?></label>
									<div class="col-sm-10">
									   <?php echo $this->Tinymce->input("$k.News.news_desc",array('id'=>$id,'label' => false,'class'=>'form-control','placeholder'=>__('News Description'),'div'=>false),array('language'=>$configLanguage,'directionality'=>$dirType),'full');?>
									</div>                        
								</div>
								<div class="form-group">
								    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Meta Title');?></small></label>
								    <div class="col-sm-4">
								       <?php echo $this->Form->input("$k.News.meta_title",array('label' => false,'class'=>'form-control','placeholder'=>__('Meta Title'),'div'=>false));?>
								    </div>
								    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Meta Keyword');?></small></label>
								    <div class="col-sm-4">
								       <?php echo $this->Form->input("$k.News.meta_keyword",array('label' => false,'class'=>'form-control','placeholder'=>__('Meta Keyword'),'div'=>false));?>
								    </div>
								</div>
								 <div class="form-group">
								    <label for="group_name" class="col-sm-2 control-label"><small><?php echo __('Meta Content');?></small></label>
								    <div class="col-sm-4">
								       <?php echo $this->Form->input("$k.News.meta_content",array('label' => false,'class'=>'form-control','placeholder'=>__('Meta Content'),'div'=>false));?>
								    </div>			
								</div>
								<div class="form-group text-left">
									<div class="col-sm-offset-2 col-sm-7">
										<?php echo $this->Form->input("$k.News.id", array('type' => 'hidden'));?>                            
									</div>
								</div>
							</div>	
						</div>						
                    <?php endforeach; ?>
                        <?php unset($post); ?>
                        <div class="form-group text-left">
                        <div class="col-sm-offset-2 col-sm-7">                            
                           <?php echo$this->Form->button('<span class="fa fa-refresh"></span>&nbsp;'.__('Update'),array('class'=>'btn btn-success','escpae'=>false));?>
		    <?php if(!$isError){?><button type="button" class="btn btn-danger" data-dismiss="modal"><span class="fa fa-remove"></span>&nbsp;<?php echo __('Cancel');?></button><?php }else{
			echo$this->Html->link('<span class="fa fa-close"></span>&nbsp;'.__('Close'),array('action'=>'index'),array('class'=>'btn btn-danger','escape'=>false));}?>
		</div>
                    </div>
                <?php echo $this->Form->end();?>
                </div>
            </div>