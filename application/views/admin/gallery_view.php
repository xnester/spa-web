<?php
echo '<!-- Button to trigger modal -->
    <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>';

    		
echo '<!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Image Upload..</h3>
    </div>
    <div class="modal-body">
	<p>';
echo '<div id="upload_alert" style="display:none;"></div>';

echo '<div class="progress progress-striped active">
        <div class="bar"></div >
        <div class="percent" style="width: 0%;">0%</div>
    </div>';

echo form_open_multipart('./admin/gallery/img_upload',array('id'=>'gallery_upload')); //'admin/gallery/do_upload'
//echo '<form id="gallery_upload"enctype="multipart/form-data" method="post">';

echo form_input(array('type'=>'file','id' => 'userfile','name' => 'userfile[]','class'=>'input-xlarge','style'=>'display:none','multiple'=>'true'));
echo '<div class="input-append">
<input id="photoCover" class="input-xlarge" type="text" readonly>
<a class="btn" onclick="$(\'input[id=userfile]\').click();">Browse</a>
</div>';



echo '<div id="results"></div>';
echo '</p>
	</div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true" id="btn-close">Close</button>
    <button class="btn btn-primary" id="btn_upload">Upload!</button>
    </div>
    </div>';
echo form_close();
