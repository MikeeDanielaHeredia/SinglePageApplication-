<div class="requestFormLevel2" style="width:100%;max-width:70%;">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/thirdparty/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/thirdparty/easyui/themes/icon.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/triune.css" />

<div  > 

<form>

<div class="form-style-1">
    <div id="multi-columns">
        <div id="two-columns"><b>Request Number:</b> <b class="small"> #<?php echo $ID?> </b>
        <input type="hidden" name="ID"   value="<?php echo $ID?>" />
        </div>
        <div id="two-columns"><b>Request Status:</b> <b class="small"><?php echo $requestStatusDescription?></b>
        </div>
    </div>

    <div>
        <div id="one-column"><b>Request Description:</b> <b class="small"><?php echo $requestDescription?></b>
        </div>
    </div>



    <div id="multi-columns">
        <div id="three-columns"><b>Job Classification:</b> <b class="small"> <?php echo $jobClassification?> </b>
        </div>
   </div>

    <div id="multi-columns">
        <div id="two-columns"><b>Date Created:</b> <b class="small"> <?php echo $dateCreated?> </b>
        </div>
        <div id="two-columns"><b>Date Needed:</b> <b class="small"><?php echo $dateNeeded?></b>
        </div>
    </div>

    <?php if(count($attachments)) {?>
        <div>
            <div id="one-column"><b>Attachments:</b><br />
            <?php foreach($attachments as $row) {?> 
                <b class="small"><?php echo $row->attachments;?></b><br />
            <?php } ?>
            </div>
        </div>
    <?php }?>

</div>

</form>
</div>



</div>