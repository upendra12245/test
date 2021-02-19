{extends file='page.tpl'}
{block name='page_content'}
  

<form method="POST" enctype="multipart/form-data" >

<div class="panel">
<div class="row">
<div class="panel-body">
<div class="col-sm-6">

<label for="print" >{l s='OTP' mod='Ps_1767_otp_verification'}</label>
<input type="text" name="otpvalue"  class="form-control" placeholder="OTP ">
</div>

<br/>
<div class="col-sm-6">
<div class="panel-footer">
<button type="submit" name="save" class="btn btn-primary">
<i class="process-icon-save"></i>
{l s='save' mod='Ps_1767_otp_verification'}
</button>
</div>
</div>

</div>
</div>
</div>

</form>

{/block}