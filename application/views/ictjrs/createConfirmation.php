<div class="requestForm">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheets/triune.css" />


    <div style="margin:5px 0;"></div>
    <div class="easyui-panel" title="Create Request" style="width:100%;max-width:100%;padding:5px 5px;"> 
            <div style="margin-bottom:5px">
                <div style="margin-bottom:1px" >
                    <input  class="modal-textbox" readonly name="requestDescription" id="requestDescription"  value="<?php echo $requestDescription?>" style="width:100%">
            
                </div>


                

                <div style="margin-bottom:1px" class="two-column-70">
                    <input readonly name="jobClassification" id="jobClassification"  value="<?php echo $jobClassification?>" style="width:100%">
                </div>

            </div>

           

            <div style="margin-bottom:1px" class="two-column">
                <input readonly prompt="DATE NEEDED:" id="dateNeeded" value="<?php echo $dateNeeded?>">

            </div>

    </div>
</div>