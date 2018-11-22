<?php
namespace PHPMaker2019\esbc_public_20181122;

// Session
if (session_status() !== PHP_SESSION_ACTIVE)
	session_start(); // Init session data

// Output buffering
ob_start(); 

// Autoload
include_once "autoload.php";
?>
<?php

// Write header
WriteHeader(FALSE);

// Create page object
$esbc_host_basic_edit = new esbc_host_basic_edit();

// Run the page
$esbc_host_basic_edit->run();

// Setup login status
SetClientVar("login", LoginStatus());

// Global Page Rendering event (in userfn*.php)
Page_Rendering();

// Page Rendering event
$esbc_host_basic_edit->Page_Render();
?>
<?php include_once "header.php" ?>
<script>

// Form object
currentPageID = ew.PAGE_ID = "edit";
var fesbc_host_basicedit = currentForm = new ew.Form("fesbc_host_basicedit", "edit");

// Validate form
fesbc_host_basicedit.validate = function() {
	if (!this.validateRequired)
		return true; // Ignore validation
	var $ = jQuery, fobj = this.getForm(), $fobj = $(fobj);
	if ($fobj.find("#confirm").val() == "F")
		return true;
	var elm, felm, uelm, addcnt = 0;
	var $k = $fobj.find("#" + this.formKeyCountName); // Get key_count
	var rowcnt = ($k[0]) ? parseInt($k.val(), 10) : 1;
	var startcnt = (rowcnt == 0) ? 0 : 1; // Check rowcnt == 0 => Inline-Add
	var gridinsert = ["insert", "gridinsert"].includes($fobj.find("#action").val()) && $k[0];
	for (var i = startcnt; i <= rowcnt; i++) {
		var infix = ($k[0]) ? String(i) : "";
		$fobj.data("rowindex", infix);
		<?php if ($esbc_host_basic_edit->HOST_INDEX->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_INDEX");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_INDEX->caption(), $esbc_host_basic->HOST_INDEX->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_TYPE->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_TYPE");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_TYPE->caption(), $esbc_host_basic->HOST_TYPE->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_SERVERNAME->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_SERVERNAME");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_SERVERNAME->caption(), $esbc_host_basic->HOST_SERVERNAME->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_IP->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_IP");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_IP->caption(), $esbc_host_basic->HOST_IP->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_PW->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_PW");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_PW->caption(), $esbc_host_basic->HOST_PW->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_RootDir->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_RootDir");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_RootDir->caption(), $esbc_host_basic->HOST_RootDir->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_RootLoginID->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_RootLoginID");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_RootLoginID->caption(), $esbc_host_basic->HOST_RootLoginID->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_UseLocalHost->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_UseLocalHost");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_UseLocalHost->caption(), $esbc_host_basic->HOST_UseLocalHost->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_HOST_UseLocalHost");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->HOST_UseLocalHost->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->HOST_BlockChainName->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_BlockChainName");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_BlockChainName->caption(), $esbc_host_basic->HOST_BlockChainName->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_TokenName->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_TokenName");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_TokenName->caption(), $esbc_host_basic->HOST_TokenName->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_TokenSymbol->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_TokenSymbol");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_TokenSymbol->caption(), $esbc_host_basic->HOST_TokenSymbol->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->HOST_TokenTotalSupply->Required) { ?>
			elm = this.getElements("x" + infix + "_HOST_TokenTotalSupply");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HOST_TokenTotalSupply->caption(), $esbc_host_basic->HOST_TokenTotalSupply->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_HOST_TokenTotalSupply");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->HOST_TokenTotalSupply->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->NODENAME_ARRAY->Required) { ?>
			elm = this.getElements("x" + infix + "_NODENAME_ARRAY");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->NODENAME_ARRAY->caption(), $esbc_host_basic->NODENAME_ARRAY->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->PW_ARRAY->Required) { ?>
			elm = this.getElements("x" + infix + "_PW_ARRAY");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->PW_ARRAY->caption(), $esbc_host_basic->PW_ARRAY->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->MYSQL_OWNER->Required) { ?>
			elm = this.getElements("x" + infix + "_MYSQL_OWNER");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->MYSQL_OWNER->caption(), $esbc_host_basic->MYSQL_OWNER->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->MYSQL_PW->Required) { ?>
			elm = this.getElements("x" + infix + "_MYSQL_PW");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->MYSQL_PW->caption(), $esbc_host_basic->MYSQL_PW->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->FTP_OWNER->Required) { ?>
			elm = this.getElements("x" + infix + "_FTP_OWNER");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->FTP_OWNER->caption(), $esbc_host_basic->FTP_OWNER->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->FTP_PW->Required) { ?>
			elm = this.getElements("x" + infix + "_FTP_PW");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->FTP_PW->caption(), $esbc_host_basic->FTP_PW->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->NETWORKID->Required) { ?>
			elm = this.getElements("x" + infix + "_NETWORKID");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->NETWORKID->caption(), $esbc_host_basic->NETWORKID->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_NETWORKID");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->NETWORKID->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->BC_PORT_BASE->Required) { ?>
			elm = this.getElements("x" + infix + "_BC_PORT_BASE");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->BC_PORT_BASE->caption(), $esbc_host_basic->BC_PORT_BASE->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_BC_PORT_BASE");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->BC_PORT_BASE->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->HTTP_PORT->Required) { ?>
			elm = this.getElements("x" + infix + "_HTTP_PORT");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->HTTP_PORT->caption(), $esbc_host_basic->HTTP_PORT->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_HTTP_PORT");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->HTTP_PORT->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->RPCPORT_BASE->Required) { ?>
			elm = this.getElements("x" + infix + "_RPCPORT_BASE");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->RPCPORT_BASE->caption(), $esbc_host_basic->RPCPORT_BASE->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_RPCPORT_BASE");
			if (elm && !ew.checkInteger(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->RPCPORT_BASE->errorMessage()) ?>");
		<?php if ($esbc_host_basic_edit->RPC_API->Required) { ?>
			elm = this.getElements("x" + infix + "_RPC_API");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->RPC_API->caption(), $esbc_host_basic->RPC_API->RequiredErrorMessage)) ?>");
		<?php } ?>
		<?php if ($esbc_host_basic_edit->Create_Date->Required) { ?>
			elm = this.getElements("x" + infix + "_Create_Date");
			if (elm && !ew.isHidden(elm) && !ew.hasValue(elm))
				return this.onError(elm, "<?php echo JsEncode(str_replace("%s", $esbc_host_basic->Create_Date->caption(), $esbc_host_basic->Create_Date->RequiredErrorMessage)) ?>");
		<?php } ?>
			elm = this.getElements("x" + infix + "_Create_Date");
			if (elm && !ew.checkDateDef(elm.value))
				return this.onError(elm, "<?php echo JsEncode($esbc_host_basic->Create_Date->errorMessage()) ?>");

			// Fire Form_CustomValidate event
			if (!this.Form_CustomValidate(fobj))
				return false;
	}

	// Process detail forms
	var dfs = $fobj.find("input[name='detailpage']").get();
	for (var i = 0; i < dfs.length; i++) {
		var df = dfs[i], val = df.value;
		if (val && ew.forms[val])
			if (!ew.forms[val].validate())
				return false;
	}
	return true;
}

// Form_CustomValidate event
fesbc_host_basicedit.Form_CustomValidate = function(fobj) { // DO NOT CHANGE THIS LINE!

	// Your custom validation code here, return false if invalid.
	return true;
}

// Use JavaScript validation or not
fesbc_host_basicedit.validateRequired = <?php echo json_encode(CLIENT_VALIDATE) ?>;

// Dynamic selection lists
// Form object for search

</script>
<script>

// Write your client script here, no need to add script tags.
</script>
<?php $esbc_host_basic_edit->showPageHeader(); ?>
<?php
$esbc_host_basic_edit->showMessage();
?>
<form name="fesbc_host_basicedit" id="fesbc_host_basicedit" class="<?php echo $esbc_host_basic_edit->FormClassName ?>" action="<?php echo CurrentPageName() ?>" method="post">
<?php if ($esbc_host_basic_edit->CheckToken) { ?>
<input type="hidden" name="<?php echo TOKEN_NAME ?>" value="<?php echo $esbc_host_basic_edit->Token ?>">
<?php } ?>
<input type="hidden" name="t" value="esbc_host_basic">
<input type="hidden" name="action" id="action" value="update">
<input type="hidden" name="modal" value="<?php echo (int)$esbc_host_basic_edit->IsModal ?>">
<div class="ew-edit-div"><!-- page* -->
<?php if ($esbc_host_basic->HOST_INDEX->Visible) { // HOST_INDEX ?>
	<div id="r_HOST_INDEX" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_INDEX" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_INDEX->caption() ?><?php echo ($esbc_host_basic->HOST_INDEX->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_INDEX->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_INDEX">
<span<?php echo $esbc_host_basic->HOST_INDEX->viewAttributes() ?>>
<input type="text" readonly class="form-control-plaintext" value="<?php echo RemoveHtml($esbc_host_basic->HOST_INDEX->EditValue) ?>"></span>
</span>
<input type="hidden" data-table="esbc_host_basic" data-field="x_HOST_INDEX" name="x_HOST_INDEX" id="x_HOST_INDEX" value="<?php echo HtmlEncode($esbc_host_basic->HOST_INDEX->CurrentValue) ?>">
<?php echo $esbc_host_basic->HOST_INDEX->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_TYPE->Visible) { // HOST_TYPE ?>
	<div id="r_HOST_TYPE" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_TYPE" for="x_HOST_TYPE" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_TYPE->caption() ?><?php echo ($esbc_host_basic->HOST_TYPE->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_TYPE->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_TYPE">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_TYPE" name="x_HOST_TYPE" id="x_HOST_TYPE" size="30" maxlength="10" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_TYPE->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_TYPE->EditValue ?>"<?php echo $esbc_host_basic->HOST_TYPE->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_TYPE->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_SERVERNAME->Visible) { // HOST_SERVERNAME ?>
	<div id="r_HOST_SERVERNAME" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_SERVERNAME" for="x_HOST_SERVERNAME" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_SERVERNAME->caption() ?><?php echo ($esbc_host_basic->HOST_SERVERNAME->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_SERVERNAME->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_SERVERNAME">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_SERVERNAME" name="x_HOST_SERVERNAME" id="x_HOST_SERVERNAME" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_SERVERNAME->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_SERVERNAME->EditValue ?>"<?php echo $esbc_host_basic->HOST_SERVERNAME->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_SERVERNAME->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_IP->Visible) { // HOST_IP ?>
	<div id="r_HOST_IP" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_IP" for="x_HOST_IP" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_IP->caption() ?><?php echo ($esbc_host_basic->HOST_IP->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_IP->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_IP">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_IP" name="x_HOST_IP" id="x_HOST_IP" size="30" maxlength="16" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_IP->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_IP->EditValue ?>"<?php echo $esbc_host_basic->HOST_IP->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_IP->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_PW->Visible) { // HOST_PW ?>
	<div id="r_HOST_PW" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_PW" for="x_HOST_PW" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_PW->caption() ?><?php echo ($esbc_host_basic->HOST_PW->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_PW->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_PW">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_PW" name="x_HOST_PW" id="x_HOST_PW" size="30" maxlength="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_PW->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_PW->EditValue ?>"<?php echo $esbc_host_basic->HOST_PW->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_PW->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_RootDir->Visible) { // HOST_RootDir ?>
	<div id="r_HOST_RootDir" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_RootDir" for="x_HOST_RootDir" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_RootDir->caption() ?><?php echo ($esbc_host_basic->HOST_RootDir->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_RootDir->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_RootDir">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_RootDir" name="x_HOST_RootDir" id="x_HOST_RootDir" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_RootDir->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_RootDir->EditValue ?>"<?php echo $esbc_host_basic->HOST_RootDir->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_RootDir->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_RootLoginID->Visible) { // HOST_RootLoginID ?>
	<div id="r_HOST_RootLoginID" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_RootLoginID" for="x_HOST_RootLoginID" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_RootLoginID->caption() ?><?php echo ($esbc_host_basic->HOST_RootLoginID->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_RootLoginID->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_RootLoginID">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_RootLoginID" name="x_HOST_RootLoginID" id="x_HOST_RootLoginID" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_RootLoginID->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_RootLoginID->EditValue ?>"<?php echo $esbc_host_basic->HOST_RootLoginID->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_RootLoginID->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_UseLocalHost->Visible) { // HOST_UseLocalHost ?>
	<div id="r_HOST_UseLocalHost" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_UseLocalHost" for="x_HOST_UseLocalHost" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_UseLocalHost->caption() ?><?php echo ($esbc_host_basic->HOST_UseLocalHost->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_UseLocalHost->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_UseLocalHost">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_UseLocalHost" name="x_HOST_UseLocalHost" id="x_HOST_UseLocalHost" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_UseLocalHost->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_UseLocalHost->EditValue ?>"<?php echo $esbc_host_basic->HOST_UseLocalHost->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_UseLocalHost->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_BlockChainName->Visible) { // HOST_BlockChainName ?>
	<div id="r_HOST_BlockChainName" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_BlockChainName" for="x_HOST_BlockChainName" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_BlockChainName->caption() ?><?php echo ($esbc_host_basic->HOST_BlockChainName->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_BlockChainName->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_BlockChainName">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_BlockChainName" name="x_HOST_BlockChainName" id="x_HOST_BlockChainName" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_BlockChainName->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_BlockChainName->EditValue ?>"<?php echo $esbc_host_basic->HOST_BlockChainName->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_BlockChainName->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_TokenName->Visible) { // HOST_TokenName ?>
	<div id="r_HOST_TokenName" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_TokenName" for="x_HOST_TokenName" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_TokenName->caption() ?><?php echo ($esbc_host_basic->HOST_TokenName->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_TokenName->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_TokenName">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_TokenName" name="x_HOST_TokenName" id="x_HOST_TokenName" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_TokenName->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_TokenName->EditValue ?>"<?php echo $esbc_host_basic->HOST_TokenName->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_TokenName->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_TokenSymbol->Visible) { // HOST_TokenSymbol ?>
	<div id="r_HOST_TokenSymbol" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_TokenSymbol" for="x_HOST_TokenSymbol" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_TokenSymbol->caption() ?><?php echo ($esbc_host_basic->HOST_TokenSymbol->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_TokenSymbol->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_TokenSymbol">
<textarea data-table="esbc_host_basic" data-field="x_HOST_TokenSymbol" name="x_HOST_TokenSymbol" id="x_HOST_TokenSymbol" cols="35" rows="4" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_TokenSymbol->getPlaceHolder()) ?>"<?php echo $esbc_host_basic->HOST_TokenSymbol->editAttributes() ?>><?php echo $esbc_host_basic->HOST_TokenSymbol->EditValue ?></textarea>
</span>
<?php echo $esbc_host_basic->HOST_TokenSymbol->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HOST_TokenTotalSupply->Visible) { // HOST_TokenTotalSupply ?>
	<div id="r_HOST_TokenTotalSupply" class="form-group row">
		<label id="elh_esbc_host_basic_HOST_TokenTotalSupply" for="x_HOST_TokenTotalSupply" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HOST_TokenTotalSupply->caption() ?><?php echo ($esbc_host_basic->HOST_TokenTotalSupply->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HOST_TokenTotalSupply->cellAttributes() ?>>
<span id="el_esbc_host_basic_HOST_TokenTotalSupply">
<input type="text" data-table="esbc_host_basic" data-field="x_HOST_TokenTotalSupply" name="x_HOST_TokenTotalSupply" id="x_HOST_TokenTotalSupply" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->HOST_TokenTotalSupply->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HOST_TokenTotalSupply->EditValue ?>"<?php echo $esbc_host_basic->HOST_TokenTotalSupply->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HOST_TokenTotalSupply->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->NODENAME_ARRAY->Visible) { // NODENAME_ARRAY ?>
	<div id="r_NODENAME_ARRAY" class="form-group row">
		<label id="elh_esbc_host_basic_NODENAME_ARRAY" for="x_NODENAME_ARRAY" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->NODENAME_ARRAY->caption() ?><?php echo ($esbc_host_basic->NODENAME_ARRAY->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->NODENAME_ARRAY->cellAttributes() ?>>
<span id="el_esbc_host_basic_NODENAME_ARRAY">
<input type="text" data-table="esbc_host_basic" data-field="x_NODENAME_ARRAY" name="x_NODENAME_ARRAY" id="x_NODENAME_ARRAY" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($esbc_host_basic->NODENAME_ARRAY->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->NODENAME_ARRAY->EditValue ?>"<?php echo $esbc_host_basic->NODENAME_ARRAY->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->NODENAME_ARRAY->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->PW_ARRAY->Visible) { // PW_ARRAY ?>
	<div id="r_PW_ARRAY" class="form-group row">
		<label id="elh_esbc_host_basic_PW_ARRAY" for="x_PW_ARRAY" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->PW_ARRAY->caption() ?><?php echo ($esbc_host_basic->PW_ARRAY->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->PW_ARRAY->cellAttributes() ?>>
<span id="el_esbc_host_basic_PW_ARRAY">
<input type="text" data-table="esbc_host_basic" data-field="x_PW_ARRAY" name="x_PW_ARRAY" id="x_PW_ARRAY" size="30" maxlength="255" placeholder="<?php echo HtmlEncode($esbc_host_basic->PW_ARRAY->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->PW_ARRAY->EditValue ?>"<?php echo $esbc_host_basic->PW_ARRAY->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->PW_ARRAY->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->MYSQL_OWNER->Visible) { // MYSQL_OWNER ?>
	<div id="r_MYSQL_OWNER" class="form-group row">
		<label id="elh_esbc_host_basic_MYSQL_OWNER" for="x_MYSQL_OWNER" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->MYSQL_OWNER->caption() ?><?php echo ($esbc_host_basic->MYSQL_OWNER->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->MYSQL_OWNER->cellAttributes() ?>>
<span id="el_esbc_host_basic_MYSQL_OWNER">
<input type="text" data-table="esbc_host_basic" data-field="x_MYSQL_OWNER" name="x_MYSQL_OWNER" id="x_MYSQL_OWNER" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->MYSQL_OWNER->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->MYSQL_OWNER->EditValue ?>"<?php echo $esbc_host_basic->MYSQL_OWNER->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->MYSQL_OWNER->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->MYSQL_PW->Visible) { // MYSQL_PW ?>
	<div id="r_MYSQL_PW" class="form-group row">
		<label id="elh_esbc_host_basic_MYSQL_PW" for="x_MYSQL_PW" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->MYSQL_PW->caption() ?><?php echo ($esbc_host_basic->MYSQL_PW->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->MYSQL_PW->cellAttributes() ?>>
<span id="el_esbc_host_basic_MYSQL_PW">
<input type="text" data-table="esbc_host_basic" data-field="x_MYSQL_PW" name="x_MYSQL_PW" id="x_MYSQL_PW" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->MYSQL_PW->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->MYSQL_PW->EditValue ?>"<?php echo $esbc_host_basic->MYSQL_PW->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->MYSQL_PW->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->FTP_OWNER->Visible) { // FTP_OWNER ?>
	<div id="r_FTP_OWNER" class="form-group row">
		<label id="elh_esbc_host_basic_FTP_OWNER" for="x_FTP_OWNER" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->FTP_OWNER->caption() ?><?php echo ($esbc_host_basic->FTP_OWNER->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->FTP_OWNER->cellAttributes() ?>>
<span id="el_esbc_host_basic_FTP_OWNER">
<input type="text" data-table="esbc_host_basic" data-field="x_FTP_OWNER" name="x_FTP_OWNER" id="x_FTP_OWNER" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->FTP_OWNER->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->FTP_OWNER->EditValue ?>"<?php echo $esbc_host_basic->FTP_OWNER->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->FTP_OWNER->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->FTP_PW->Visible) { // FTP_PW ?>
	<div id="r_FTP_PW" class="form-group row">
		<label id="elh_esbc_host_basic_FTP_PW" for="x_FTP_PW" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->FTP_PW->caption() ?><?php echo ($esbc_host_basic->FTP_PW->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->FTP_PW->cellAttributes() ?>>
<span id="el_esbc_host_basic_FTP_PW">
<input type="text" data-table="esbc_host_basic" data-field="x_FTP_PW" name="x_FTP_PW" id="x_FTP_PW" size="30" maxlength="50" placeholder="<?php echo HtmlEncode($esbc_host_basic->FTP_PW->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->FTP_PW->EditValue ?>"<?php echo $esbc_host_basic->FTP_PW->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->FTP_PW->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->NETWORKID->Visible) { // NETWORKID ?>
	<div id="r_NETWORKID" class="form-group row">
		<label id="elh_esbc_host_basic_NETWORKID" for="x_NETWORKID" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->NETWORKID->caption() ?><?php echo ($esbc_host_basic->NETWORKID->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->NETWORKID->cellAttributes() ?>>
<span id="el_esbc_host_basic_NETWORKID">
<input type="text" data-table="esbc_host_basic" data-field="x_NETWORKID" name="x_NETWORKID" id="x_NETWORKID" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->NETWORKID->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->NETWORKID->EditValue ?>"<?php echo $esbc_host_basic->NETWORKID->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->NETWORKID->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->BC_PORT_BASE->Visible) { // BC_PORT_BASE ?>
	<div id="r_BC_PORT_BASE" class="form-group row">
		<label id="elh_esbc_host_basic_BC_PORT_BASE" for="x_BC_PORT_BASE" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->BC_PORT_BASE->caption() ?><?php echo ($esbc_host_basic->BC_PORT_BASE->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->BC_PORT_BASE->cellAttributes() ?>>
<span id="el_esbc_host_basic_BC_PORT_BASE">
<input type="text" data-table="esbc_host_basic" data-field="x_BC_PORT_BASE" name="x_BC_PORT_BASE" id="x_BC_PORT_BASE" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->BC_PORT_BASE->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->BC_PORT_BASE->EditValue ?>"<?php echo $esbc_host_basic->BC_PORT_BASE->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->BC_PORT_BASE->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->HTTP_PORT->Visible) { // HTTP_PORT ?>
	<div id="r_HTTP_PORT" class="form-group row">
		<label id="elh_esbc_host_basic_HTTP_PORT" for="x_HTTP_PORT" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->HTTP_PORT->caption() ?><?php echo ($esbc_host_basic->HTTP_PORT->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->HTTP_PORT->cellAttributes() ?>>
<span id="el_esbc_host_basic_HTTP_PORT">
<input type="text" data-table="esbc_host_basic" data-field="x_HTTP_PORT" name="x_HTTP_PORT" id="x_HTTP_PORT" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->HTTP_PORT->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->HTTP_PORT->EditValue ?>"<?php echo $esbc_host_basic->HTTP_PORT->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->HTTP_PORT->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->RPCPORT_BASE->Visible) { // RPCPORT_BASE ?>
	<div id="r_RPCPORT_BASE" class="form-group row">
		<label id="elh_esbc_host_basic_RPCPORT_BASE" for="x_RPCPORT_BASE" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->RPCPORT_BASE->caption() ?><?php echo ($esbc_host_basic->RPCPORT_BASE->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->RPCPORT_BASE->cellAttributes() ?>>
<span id="el_esbc_host_basic_RPCPORT_BASE">
<input type="text" data-table="esbc_host_basic" data-field="x_RPCPORT_BASE" name="x_RPCPORT_BASE" id="x_RPCPORT_BASE" size="30" placeholder="<?php echo HtmlEncode($esbc_host_basic->RPCPORT_BASE->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->RPCPORT_BASE->EditValue ?>"<?php echo $esbc_host_basic->RPCPORT_BASE->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->RPCPORT_BASE->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->RPC_API->Visible) { // RPC_API ?>
	<div id="r_RPC_API" class="form-group row">
		<label id="elh_esbc_host_basic_RPC_API" for="x_RPC_API" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->RPC_API->caption() ?><?php echo ($esbc_host_basic->RPC_API->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->RPC_API->cellAttributes() ?>>
<span id="el_esbc_host_basic_RPC_API">
<input type="text" data-table="esbc_host_basic" data-field="x_RPC_API" name="x_RPC_API" id="x_RPC_API" size="30" maxlength="150" placeholder="<?php echo HtmlEncode($esbc_host_basic->RPC_API->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->RPC_API->EditValue ?>"<?php echo $esbc_host_basic->RPC_API->editAttributes() ?>>
</span>
<?php echo $esbc_host_basic->RPC_API->CustomMsg ?></div></div>
	</div>
<?php } ?>
<?php if ($esbc_host_basic->Create_Date->Visible) { // Create_Date ?>
	<div id="r_Create_Date" class="form-group row">
		<label id="elh_esbc_host_basic_Create_Date" for="x_Create_Date" class="<?php echo $esbc_host_basic_edit->LeftColumnClass ?>"><?php echo $esbc_host_basic->Create_Date->caption() ?><?php echo ($esbc_host_basic->Create_Date->Required) ? $Language->Phrase("FieldRequiredIndicator") : "" ?></label>
		<div class="<?php echo $esbc_host_basic_edit->RightColumnClass ?>"><div<?php echo $esbc_host_basic->Create_Date->cellAttributes() ?>>
<span id="el_esbc_host_basic_Create_Date">
<input type="text" data-table="esbc_host_basic" data-field="x_Create_Date" data-format="1" name="x_Create_Date" id="x_Create_Date" placeholder="<?php echo HtmlEncode($esbc_host_basic->Create_Date->getPlaceHolder()) ?>" value="<?php echo $esbc_host_basic->Create_Date->EditValue ?>"<?php echo $esbc_host_basic->Create_Date->editAttributes() ?>>
<?php if (!$esbc_host_basic->Create_Date->ReadOnly && !$esbc_host_basic->Create_Date->Disabled && !isset($esbc_host_basic->Create_Date->EditAttrs["readonly"]) && !isset($esbc_host_basic->Create_Date->EditAttrs["disabled"])) { ?>
<script>
ew.createDateTimePicker("fesbc_host_basicedit", "x_Create_Date", {"ignoreReadonly":true,"useCurrent":false,"format":1});
</script>
<?php } ?>
</span>
<?php echo $esbc_host_basic->Create_Date->CustomMsg ?></div></div>
	</div>
<?php } ?>
</div><!-- /page* -->
<?php if (!$esbc_host_basic_edit->IsModal) { ?>
<div class="form-group row"><!-- buttons .form-group -->
	<div class="<?php echo $esbc_host_basic_edit->OffsetColumnClass ?>"><!-- buttons offset -->
<button class="btn btn-primary ew-btn" name="btn-action" id="btn-action" type="submit"><?php echo $Language->Phrase("SaveBtn") ?></button>
<button class="btn btn-default ew-btn" name="btn-cancel" id="btn-cancel" type="button" data-href="<?php echo $esbc_host_basic_edit->getReturnUrl() ?>"><?php echo $Language->Phrase("CancelBtn") ?></button>
	</div><!-- /buttons offset -->
</div><!-- /buttons .form-group -->
<?php } ?>
</form>
<?php
$esbc_host_basic_edit->showPageFooter();
if (DEBUG_ENABLED)
	echo GetDebugMessage();
?>
<script>

// Write your table-specific startup script here
// document.write("page loaded");

</script>
<?php include_once "footer.php" ?>
<?php
$esbc_host_basic_edit->terminate();
?>
