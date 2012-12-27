<?php
echo '<div class="contact-us">';

echo '<div class="row-fluid">';
echo '<div class="span12">';
echo '<p><h3>'.$h3.'</h3></p>';

echo '<div class="row-fluid">';
echo '<div class="span6">';

$attributes = array('id' => 'form_contact'/*,'class'=>'form-horizontal'*/);
echo form_open('contact',$attributes);

echo '<div class="control-group">';
echo form_label('Name', 'name');
echo '<div class="controls">
	  <div class="input-prepend">
	  <span class="add-on"><i class="icon-user"></i></span>';
echo form_input(array('type'=>'text','id' => 'name','name' => 'name','class'=>'input-large','placeholder'=>'Name'));
echo '</div>
	  </div></div>';

echo '<div class="control-group">';
echo form_label('Email', 'email');
echo '<div class="controls">
	  <div class="input-prepend">
	  <span class="add-on"><i class="icon-envelope"></i></span>';
echo form_input(array('type'=>'text','id' => 'email','name' => 'email','class'=>'input-large','placeholder'=>'Email'));
echo '</div>
	  </div></div>';

echo '<div class="control-group">';
echo form_label('Phone', 'phone');
echo '<div class="controls">
	  <div class="input-prepend">
	  <span class="add-on"><i class="icon-phone"></i></span>';
echo form_input(array('type'=>'text','id' => 'phone','name' => 'phone','class'=>'input-large','placeholder'=>'Phone'));
echo '</div>
	  </div></div>';

echo '<div class="control-group">';
echo form_label('Title', 'title');
echo '<div class="controls">';

echo form_input(array('type'=>'text','id' => 'title','name' => 'title','class'=>'span11','placeholder'=>'Title'));
echo '</div>
	  </div>';

echo '<div class="control-group">';
echo form_label('Detail', 'detail');
echo '<div class="controls">';
echo form_textarea(array('type'=>'textarea','rows'=>'8','id' => 'detail','name' => 'detail','class'=>'span11'));
echo '</div>
	  </div>';

echo '<p>';
echo form_submit(array('type'=>'submit','value'=>'Submit','class'=>'btn btn-primary','name'=>'contact_btn','id'=>'contact_btn'));
echo '  ';
echo form_reset(array('value'=>'Reset','class'=>'btn'));
//echo anchor('contact','Cancel',array('class'=>'btn btn-link'));
echo '</p>';

echo form_close();

echo '</div>';

// Map and address

echo '<div class="span6">';

echo '<address>
<strong>Twitter, Inc.</strong><br>
795 Folsom Ave, Suite 600<br>
San Francisco, CA 94107<br>
<abbr title="Phone">P:</abbr> (123) 456-7890
</address>';

echo '<address>
<strong>Full Name</strong><br>
<a href="mailto:#">first.last@example.com</a>
</address>';

echo '<img src="'.base_url().'assets/img/map-425x350.gif" >';
echo '</div>';

// Map and address

echo '</div>';
echo '</div>';

//echo '<div class="clearfix"></div>';
echo '</div>';
echo '</div>';