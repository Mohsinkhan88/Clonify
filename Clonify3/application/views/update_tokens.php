<?php include("include_newcss.php"); ?>
<script>
function myValidate(){
	var minTok = document.getElementById("sccMinSim");
	var minTokErr = document.getElementById("minTokErr");
	var fil = document.getElementById("files");
	minTokErr.innerHTML = '';
	filErr.innerHTML = '';
	//alert(fil.value);
	var isValidated = true;
	if(minTok.value == ''){
		minTokErr.innerHTML = 'This field cannot be empty.';
		isValidated = false;
	}
	else if(isNaN(minTok.value)){
		minTokErr.innerHTML = 'Please enter a valid numeric value.';
		isValidated = false;
	}
	else{
		minTokErr.innerHTML = '';
	}

	if(fil.value == ''){
		filErr.innerHTML = 'Please select a file to continue.';
		isValidated = false;
	}
	else{
		filErr.innerHTML = '';
	}
	
	return isValidated;
}
</script>
<div id="wrapper">

        <!--Body content-->
        <div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->
                <div class="heading">
                    <h3>Update Tokens</h3>                                                                               
                </div><!-- End .heading-->
			
				<?php echo form_open_multipart('updatetokens/update');?>
					<table id="multi_select_tbl">
						<tr>
							<td width="130px;">
								<label>File</label>
							</td>
							<td>
							<div class="fUp btn">
								<input class="tokFil" type="file" name="userfile" size="20">Browse</input>
							</div>
							<label style="display:inline-block" class="myErrLbl" id="minTokErr"><?php echo $this->session->flashdata('result'); ?></label>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td width="130px;">
								<label>Language</label>
							</td>
							<td>
								<select style="width:120px;" name="language" id="language">
								<?php foreach ($languages as $language){ ?>
								  <option value="<?php echo $language->id ?>"><?php echo $language->language ?></option>
								<?php } ?>
								</select>
							</td>
							<td>
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td width="130px;">
								<input class="btn" type="submit" value="Upload" />
							</td>
						</tr>
						<tr>
							<td>
							</td>
							<td>
								<select multiple="multiple" id="suppresed" name="suppresed[]">
									<?php foreach ($tokens as $token){ ?>
									  <option value="<?php echo $token->token_id ?>"><?php echo $token->token_id." - ".$token->token_name ?></option>
									<?php } ?>
								</select>
							</td>
						</tr>
					</table>
				</form>
            </div>
            <!-- End contentwrapper -->
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
	
<script>
</script>
<script>
	function onBodyLoad(){
	    var sel = document.getElementById('language');
		for(var i, j = 0; i = sel.options[j]; j++) {
			if(i.value == <?php echo $selectedLanguage; ?>) {
				sel.selectedIndex = j;
				break;
			}
		}
	}
	
	onBodyLoad();
</script>