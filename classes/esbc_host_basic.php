<?php
namespace PHPMaker2019\esbc_public_20181122;

/**
 * Table class for esbc_host_basic
 */
class esbc_host_basic extends DbTable
{
	protected $SqlFrom = "";
	protected $SqlSelect = "";
	protected $SqlSelectList = "";
	protected $SqlWhere = "";
	protected $SqlGroupBy = "";
	protected $SqlHaving = "";
	protected $SqlOrderBy = "";
	public $UseSessionForListSql = TRUE;

	// Column CSS classes
	public $LeftColumnClass = "col-sm-2 col-form-label ew-label";
	public $RightColumnClass = "col-sm-10";
	public $OffsetColumnClass = "col-sm-10 offset-sm-2";
	public $TableLeftColumnClass = "w-col-2";

	// Export
	public $ExportDoc;

	// Fields
	public $HOST_INDEX;
	public $HOST_TYPE;
	public $HOST_SERVERNAME;
	public $HOST_IP;
	public $HOST_PW;
	public $HOST_RootDir;
	public $HOST_RootLoginID;
	public $HOST_UseLocalHost;
	public $HOST_BlockChainName;
	public $HOST_TokenName;
	public $HOST_TokenSymbol;
	public $HOST_TokenTotalSupply;
	public $NODENAME_ARRAY;
	public $PW_ARRAY;
	public $MYSQL_OWNER;
	public $MYSQL_PW;
	public $FTP_OWNER;
	public $FTP_PW;
	public $NETWORKID;
	public $BC_PORT_BASE;
	public $HTTP_PORT;
	public $RPCPORT_BASE;
	public $RPC_API;
	public $Create_Date;

	// Constructor
	public function __construct()
	{
		global $Language, $CurrentLanguage;

		// Language object
		if (!isset($Language))
			$Language = new Language();
		$this->TableVar = 'esbc_host_basic';
		$this->TableName = 'esbc_host_basic';
		$this->TableType = 'TABLE';

		// Update Table
		$this->UpdateTable = "`esbc_host_basic`";
		$this->Dbid = 'DB';
		$this->ExportAll = FALSE;
		$this->ExportPageBreakCount = 0; // Page break per every n record (PDF only)
		$this->ExportPageOrientation = "portrait"; // Page orientation (PDF only)
		$this->ExportPageSize = "a4"; // Page size (PDF only)
		$this->ExportExcelPageOrientation = ""; // Page orientation (PhpSpreadsheet only)
		$this->ExportExcelPageSize = ""; // Page size (PhpSpreadsheet only)
		$this->ExportWordPageOrientation = "portrait"; // Page orientation (PHPWord only)
		$this->ExportWordColumnWidth = NULL; // Cell width (PHPWord only)
		$this->DetailAdd = FALSE; // Allow detail add
		$this->DetailEdit = FALSE; // Allow detail edit
		$this->DetailView = FALSE; // Allow detail view
		$this->ShowMultipleDetails = FALSE; // Show multiple details
		$this->GridAddRowCount = 5;
		$this->AllowAddDeleteRow = TRUE; // Allow add/delete row
		$this->UserIDAllowSecurity = 0; // User ID Allow
		$this->BasicSearch = new BasicSearch($this->TableVar);

		// HOST_INDEX
		$this->HOST_INDEX = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_INDEX', 'HOST_INDEX', '`HOST_INDEX`', '`HOST_INDEX`', 3, -1, FALSE, '`HOST_INDEX`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'NO');
		$this->HOST_INDEX->IsAutoIncrement = TRUE; // Autoincrement field
		$this->HOST_INDEX->IsPrimaryKey = TRUE; // Primary key field
		$this->HOST_INDEX->Sortable = TRUE; // Allow sort
		$this->HOST_INDEX->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['HOST_INDEX'] = &$this->HOST_INDEX;

		// HOST_TYPE
		$this->HOST_TYPE = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_TYPE', 'HOST_TYPE', '`HOST_TYPE`', '`HOST_TYPE`', 200, -1, FALSE, '`HOST_TYPE`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_TYPE->Nullable = FALSE; // NOT NULL field
		$this->HOST_TYPE->Sortable = TRUE; // Allow sort
		$this->fields['HOST_TYPE'] = &$this->HOST_TYPE;

		// HOST_SERVERNAME
		$this->HOST_SERVERNAME = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_SERVERNAME', 'HOST_SERVERNAME', '`HOST_SERVERNAME`', '`HOST_SERVERNAME`', 200, -1, FALSE, '`HOST_SERVERNAME`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_SERVERNAME->Nullable = FALSE; // NOT NULL field
		$this->HOST_SERVERNAME->Required = TRUE; // Required field
		$this->HOST_SERVERNAME->Sortable = TRUE; // Allow sort
		$this->fields['HOST_SERVERNAME'] = &$this->HOST_SERVERNAME;

		// HOST_IP
		$this->HOST_IP = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_IP', 'HOST_IP', '`HOST_IP`', '`HOST_IP`', 200, -1, FALSE, '`HOST_IP`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_IP->Nullable = FALSE; // NOT NULL field
		$this->HOST_IP->Required = TRUE; // Required field
		$this->HOST_IP->Sortable = TRUE; // Allow sort
		$this->fields['HOST_IP'] = &$this->HOST_IP;

		// HOST_PW
		$this->HOST_PW = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_PW', 'HOST_PW', '`HOST_PW`', '`HOST_PW`', 200, -1, FALSE, '`HOST_PW`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_PW->Required = TRUE; // Required field
		$this->HOST_PW->Sortable = TRUE; // Allow sort
		$this->fields['HOST_PW'] = &$this->HOST_PW;

		// HOST_RootDir
		$this->HOST_RootDir = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_RootDir', 'HOST_RootDir', '`HOST_RootDir`', '`HOST_RootDir`', 200, -1, FALSE, '`HOST_RootDir`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_RootDir->Nullable = FALSE; // NOT NULL field
		$this->HOST_RootDir->Sortable = TRUE; // Allow sort
		$this->fields['HOST_RootDir'] = &$this->HOST_RootDir;

		// HOST_RootLoginID
		$this->HOST_RootLoginID = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_RootLoginID', 'HOST_RootLoginID', '`HOST_RootLoginID`', '`HOST_RootLoginID`', 200, -1, FALSE, '`HOST_RootLoginID`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_RootLoginID->Nullable = FALSE; // NOT NULL field
		$this->HOST_RootLoginID->Required = TRUE; // Required field
		$this->HOST_RootLoginID->Sortable = TRUE; // Allow sort
		$this->fields['HOST_RootLoginID'] = &$this->HOST_RootLoginID;

		// HOST_UseLocalHost
		$this->HOST_UseLocalHost = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_UseLocalHost', 'HOST_UseLocalHost', '`HOST_UseLocalHost`', '`HOST_UseLocalHost`', 16, -1, FALSE, '`HOST_UseLocalHost`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_UseLocalHost->Nullable = FALSE; // NOT NULL field
		$this->HOST_UseLocalHost->Sortable = TRUE; // Allow sort
		$this->HOST_UseLocalHost->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['HOST_UseLocalHost'] = &$this->HOST_UseLocalHost;

		// HOST_BlockChainName
		$this->HOST_BlockChainName = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_BlockChainName', 'HOST_BlockChainName', '`HOST_BlockChainName`', '`HOST_BlockChainName`', 200, -1, FALSE, '`HOST_BlockChainName`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_BlockChainName->Nullable = FALSE; // NOT NULL field
		$this->HOST_BlockChainName->Sortable = TRUE; // Allow sort
		$this->fields['HOST_BlockChainName'] = &$this->HOST_BlockChainName;

		// HOST_TokenName
		$this->HOST_TokenName = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_TokenName', 'HOST_TokenName', '`HOST_TokenName`', '`HOST_TokenName`', 200, -1, FALSE, '`HOST_TokenName`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_TokenName->Sortable = TRUE; // Allow sort
		$this->fields['HOST_TokenName'] = &$this->HOST_TokenName;

		// HOST_TokenSymbol
		$this->HOST_TokenSymbol = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_TokenSymbol', 'HOST_TokenSymbol', '`HOST_TokenSymbol`', '`HOST_TokenSymbol`', 201, -1, FALSE, '`HOST_TokenSymbol`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXTAREA');
		$this->HOST_TokenSymbol->Sortable = TRUE; // Allow sort
		$this->fields['HOST_TokenSymbol'] = &$this->HOST_TokenSymbol;

		// HOST_TokenTotalSupply
		$this->HOST_TokenTotalSupply = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HOST_TokenTotalSupply', 'HOST_TokenTotalSupply', '`HOST_TokenTotalSupply`', '`HOST_TokenTotalSupply`', 20, -1, FALSE, '`HOST_TokenTotalSupply`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HOST_TokenTotalSupply->Sortable = TRUE; // Allow sort
		$this->HOST_TokenTotalSupply->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['HOST_TokenTotalSupply'] = &$this->HOST_TokenTotalSupply;

		// NODENAME_ARRAY
		$this->NODENAME_ARRAY = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_NODENAME_ARRAY', 'NODENAME_ARRAY', '`NODENAME_ARRAY`', '`NODENAME_ARRAY`', 200, -1, FALSE, '`NODENAME_ARRAY`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->NODENAME_ARRAY->Nullable = FALSE; // NOT NULL field
		$this->NODENAME_ARRAY->Required = TRUE; // Required field
		$this->NODENAME_ARRAY->Sortable = TRUE; // Allow sort
		$this->fields['NODENAME_ARRAY'] = &$this->NODENAME_ARRAY;

		// PW_ARRAY
		$this->PW_ARRAY = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_PW_ARRAY', 'PW_ARRAY', '`PW_ARRAY`', '`PW_ARRAY`', 200, -1, FALSE, '`PW_ARRAY`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->PW_ARRAY->Nullable = FALSE; // NOT NULL field
		$this->PW_ARRAY->Required = TRUE; // Required field
		$this->PW_ARRAY->Sortable = TRUE; // Allow sort
		$this->fields['PW_ARRAY'] = &$this->PW_ARRAY;

		// MYSQL_OWNER
		$this->MYSQL_OWNER = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_MYSQL_OWNER', 'MYSQL_OWNER', '`MYSQL_OWNER`', '`MYSQL_OWNER`', 200, -1, FALSE, '`MYSQL_OWNER`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->MYSQL_OWNER->Nullable = FALSE; // NOT NULL field
		$this->MYSQL_OWNER->Required = TRUE; // Required field
		$this->MYSQL_OWNER->Sortable = TRUE; // Allow sort
		$this->fields['MYSQL_OWNER'] = &$this->MYSQL_OWNER;

		// MYSQL_PW
		$this->MYSQL_PW = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_MYSQL_PW', 'MYSQL_PW', '`MYSQL_PW`', '`MYSQL_PW`', 200, -1, FALSE, '`MYSQL_PW`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->MYSQL_PW->Nullable = FALSE; // NOT NULL field
		$this->MYSQL_PW->Required = TRUE; // Required field
		$this->MYSQL_PW->Sortable = TRUE; // Allow sort
		$this->fields['MYSQL_PW'] = &$this->MYSQL_PW;

		// FTP_OWNER
		$this->FTP_OWNER = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_FTP_OWNER', 'FTP_OWNER', '`FTP_OWNER`', '`FTP_OWNER`', 200, -1, FALSE, '`FTP_OWNER`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->FTP_OWNER->Required = TRUE; // Required field
		$this->FTP_OWNER->Sortable = TRUE; // Allow sort
		$this->fields['FTP_OWNER'] = &$this->FTP_OWNER;

		// FTP_PW
		$this->FTP_PW = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_FTP_PW', 'FTP_PW', '`FTP_PW`', '`FTP_PW`', 200, -1, FALSE, '`FTP_PW`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->FTP_PW->Nullable = FALSE; // NOT NULL field
		$this->FTP_PW->Required = TRUE; // Required field
		$this->FTP_PW->Sortable = TRUE; // Allow sort
		$this->fields['FTP_PW'] = &$this->FTP_PW;

		// NETWORKID
		$this->NETWORKID = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_NETWORKID', 'NETWORKID', '`NETWORKID`', '`NETWORKID`', 3, -1, FALSE, '`NETWORKID`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->NETWORKID->Nullable = FALSE; // NOT NULL field
		$this->NETWORKID->Required = TRUE; // Required field
		$this->NETWORKID->Sortable = TRUE; // Allow sort
		$this->NETWORKID->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['NETWORKID'] = &$this->NETWORKID;

		// BC_PORT_BASE
		$this->BC_PORT_BASE = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_BC_PORT_BASE', 'BC_PORT_BASE', '`BC_PORT_BASE`', '`BC_PORT_BASE`', 3, -1, FALSE, '`BC_PORT_BASE`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->BC_PORT_BASE->Nullable = FALSE; // NOT NULL field
		$this->BC_PORT_BASE->Required = TRUE; // Required field
		$this->BC_PORT_BASE->Sortable = TRUE; // Allow sort
		$this->BC_PORT_BASE->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['BC_PORT_BASE'] = &$this->BC_PORT_BASE;

		// HTTP_PORT
		$this->HTTP_PORT = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_HTTP_PORT', 'HTTP_PORT', '`HTTP_PORT`', '`HTTP_PORT`', 3, -1, FALSE, '`HTTP_PORT`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->HTTP_PORT->Nullable = FALSE; // NOT NULL field
		$this->HTTP_PORT->Required = TRUE; // Required field
		$this->HTTP_PORT->Sortable = TRUE; // Allow sort
		$this->HTTP_PORT->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['HTTP_PORT'] = &$this->HTTP_PORT;

		// RPCPORT_BASE
		$this->RPCPORT_BASE = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_RPCPORT_BASE', 'RPCPORT_BASE', '`RPCPORT_BASE`', '`RPCPORT_BASE`', 3, -1, FALSE, '`RPCPORT_BASE`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->RPCPORT_BASE->Nullable = FALSE; // NOT NULL field
		$this->RPCPORT_BASE->Required = TRUE; // Required field
		$this->RPCPORT_BASE->Sortable = TRUE; // Allow sort
		$this->RPCPORT_BASE->DefaultErrorMessage = $Language->Phrase("IncorrectInteger");
		$this->fields['RPCPORT_BASE'] = &$this->RPCPORT_BASE;

		// RPC_API
		$this->RPC_API = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_RPC_API', 'RPC_API', '`RPC_API`', '`RPC_API`', 200, -1, FALSE, '`RPC_API`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->RPC_API->Nullable = FALSE; // NOT NULL field
		$this->RPC_API->Sortable = TRUE; // Allow sort
		$this->fields['RPC_API'] = &$this->RPC_API;

		// Create_Date
		$this->Create_Date = new DbField('esbc_host_basic', 'esbc_host_basic', 'x_Create_Date', 'Create_Date', '`Create_Date`', CastDateFieldForLike('`Create_Date`', 1, "DB"), 135, 1, FALSE, '`Create_Date`', FALSE, FALSE, FALSE, 'FORMATTED TEXT', 'TEXT');
		$this->Create_Date->Required = TRUE; // Required field
		$this->Create_Date->Sortable = TRUE; // Allow sort
		$this->Create_Date->DefaultErrorMessage = str_replace("%s", $GLOBALS["DATE_FORMAT"], $Language->Phrase("IncorrectDate"));
		$this->fields['Create_Date'] = &$this->Create_Date;
	}

	// Field Visibility
	public function getFieldVisibility($fldParm)
	{
		global $Security;
		return $this->$fldParm->Visible; // Returns original value
	}

	// Set left column class (must be predefined col-*-* classes of Bootstrap grid system)
	function setLeftColumnClass($class)
	{
		if (preg_match('/^col\-(\w+)\-(\d+)$/', $class, $match)) {
			$this->LeftColumnClass = $class . " col-form-label ew-label";
			$this->RightColumnClass = "col-" . $match[1] . "-" . strval(12 - (int)$match[2]);
			$this->OffsetColumnClass = $this->RightColumnClass . " " . str_replace("col-", "offset-", $class);
			$this->TableLeftColumnClass = preg_replace('/^col-\w+-(\d+)$/', "w-col-$1", $class); // Change to w-col-*
		}
	}

	// Single column sort
	public function updateSort(&$fld)
	{
		if ($this->CurrentOrder == $fld->Name) {
			$sortField = $fld->Expression;
			$lastSort = $fld->getSort();
			if ($this->CurrentOrderType == "ASC" || $this->CurrentOrderType == "DESC") {
				$thisSort = $this->CurrentOrderType;
			} else {
				$thisSort = ($lastSort == "ASC") ? "DESC" : "ASC";
			}
			$fld->setSort($thisSort);
			$this->setSessionOrderBy($sortField . " " . $thisSort); // Save to Session
		} else {
			$fld->setSort("");
		}
	}

	// Table level SQL
	public function getSqlFrom() // From
	{
		return ($this->SqlFrom <> "") ? $this->SqlFrom : "`esbc_host_basic`";
	}
	public function sqlFrom() // For backward compatibility
	{
		return $this->getSqlFrom();
	}
	public function setSqlFrom($v)
	{
		$this->SqlFrom = $v;
	}
	public function getSqlSelect() // Select
	{
		return ($this->SqlSelect <> "") ? $this->SqlSelect : "SELECT * FROM " . $this->getSqlFrom();
	}
	public function sqlSelect() // For backward compatibility
	{
		return $this->getSqlSelect();
	}
	public function setSqlSelect($v)
	{
		$this->SqlSelect = $v;
	}
	public function getSqlWhere() // Where
	{
		$where = ($this->SqlWhere <> "") ? $this->SqlWhere : "";
		$this->TableFilter = "";
		AddFilter($where, $this->TableFilter);
		return $where;
	}
	public function sqlWhere() // For backward compatibility
	{
		return $this->getSqlWhere();
	}
	public function setSqlWhere($v)
	{
		$this->SqlWhere = $v;
	}
	public function getSqlGroupBy() // Group By
	{
		return ($this->SqlGroupBy <> "") ? $this->SqlGroupBy : "";
	}
	public function sqlGroupBy() // For backward compatibility
	{
		return $this->getSqlGroupBy();
	}
	public function setSqlGroupBy($v)
	{
		$this->SqlGroupBy = $v;
	}
	public function getSqlHaving() // Having
	{
		return ($this->SqlHaving <> "") ? $this->SqlHaving : "";
	}
	public function sqlHaving() // For backward compatibility
	{
		return $this->getSqlHaving();
	}
	public function setSqlHaving($v)
	{
		$this->SqlHaving = $v;
	}
	public function getSqlOrderBy() // Order By
	{
		return ($this->SqlOrderBy <> "") ? $this->SqlOrderBy : "";
	}
	public function sqlOrderBy() // For backward compatibility
	{
		return $this->getSqlOrderBy();
	}
	public function setSqlOrderBy($v)
	{
		$this->SqlOrderBy = $v;
	}

	// Apply User ID filters
	public function applyUserIDFilters($filter)
	{
		return $filter;
	}

	// Check if User ID security allows view all
	public function userIDAllow($id = "")
	{
		$allow = USER_ID_ALLOW;
		switch ($id) {
			case "add":
			case "copy":
			case "gridadd":
			case "register":
			case "addopt":
				return (($allow & 1) == 1);
			case "edit":
			case "gridedit":
			case "update":
			case "changepwd":
			case "forgotpwd":
				return (($allow & 4) == 4);
			case "delete":
				return (($allow & 2) == 2);
			case "view":
				return (($allow & 32) == 32);
			case "search":
				return (($allow & 64) == 64);
			default:
				return (($allow & 8) == 8);
		}
	}

	// Get SQL
	public function getSql($where, $orderBy = "")
	{
		return BuildSelectSql($this->getSqlSelect(), $this->getSqlWhere(),
			$this->getSqlGroupBy(), $this->getSqlHaving(), $this->getSqlOrderBy(),
			$where, $orderBy);
	}

	// Table SQL
	public function getCurrentSql()
	{
		$filter = $this->CurrentFilter;
		$filter = $this->applyUserIDFilters($filter);
		$sort = $this->getSessionOrderBy();
		return $this->getSql($filter, $sort);
	}

	// Table SQL with List page filter
	public function getListSql()
	{
		$filter = $this->UseSessionForListSql ? $this->getSessionWhere() : "";
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->getSqlSelect();
		$sort = $this->UseSessionForListSql ? $this->getSessionOrderBy() : "";
		return BuildSelectSql($select, $this->getSqlWhere(), $this->getSqlGroupBy(),
			$this->getSqlHaving(), $this->getSqlOrderBy(), $filter, $sort);
	}

	// Get ORDER BY clause
	public function getOrderBy()
	{
		$sort = $this->getSessionOrderBy();
		return BuildSelectSql("", "", "", "", $this->getSqlOrderBy(), "", $sort);
	}

	// Get record count
	public function getRecordCount($sql)
	{
		$cnt = -1;
		$rs = NULL;
		$sql = preg_replace('/\/\*BeginOrderBy\*\/[\s\S]+\/\*EndOrderBy\*\//', "", $sql); // Remove ORDER BY clause (MSSQL)
		$pattern = '/^SELECT\s([\s\S]+)\sFROM\s/i';

		// Skip Custom View / SubQuery and SELECT DISTINCT
		if (($this->TableType == 'TABLE' || $this->TableType == 'VIEW' || $this->TableType == 'LINKTABLE') &&
			preg_match($pattern, $sql) && !preg_match('/\(\s*(SELECT[^)]+)\)/i', $sql) && !preg_match('/^\s*select\s+distinct\s+/i', $sql)) {
			$sqlwrk = "SELECT COUNT(*) FROM " . preg_replace($pattern, "", $sql);
		} else {
			$sqlwrk = "SELECT COUNT(*) FROM (" . $sql . ") COUNT_TABLE";
		}
		$conn = &$this->getConnection();
		if ($rs = $conn->execute($sqlwrk)) {
			if (!$rs->EOF && $rs->FieldCount() > 0) {
				$cnt = $rs->fields[0];
				$rs->close();
			}
			return (int)$cnt;
		}

		// Unable to get count, get record count directly
		if ($rs = $conn->execute($sql)) {
			$cnt = $rs->RecordCount();
			$rs->close();
			return (int)$cnt;
		}
		return $cnt;
	}

	// Get record count based on filter (for detail record count in master table pages)
	public function loadRecordCount($filter)
	{
		$origFilter = $this->CurrentFilter;
		$this->CurrentFilter = $filter;
		$this->Recordset_Selecting($this->CurrentFilter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $this->CurrentFilter, "");
		$cnt = $this->getRecordCount($sql);
		$this->CurrentFilter = $origFilter;
		return $cnt;
	}

	// Get record count (for current List page)
	public function listRecordCount()
	{
		$filter = $this->getSessionWhere();
		AddFilter($filter, $this->CurrentFilter);
		$filter = $this->applyUserIDFilters($filter);
		$this->Recordset_Selecting($filter);
		$select = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlSelect() : "SELECT * FROM " . $this->getSqlFrom();
		$groupBy = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlGroupBy() : "";
		$having = $this->TableType == 'CUSTOMVIEW' ? $this->getSqlHaving() : "";
		$sql = BuildSelectSql($select, $this->getSqlWhere(), $groupBy, $having, "", $filter, "");
		$cnt = $this->getRecordCount($sql);
		return $cnt;
	}

	// INSERT statement
	protected function insertSql(&$rs)
	{
		$names = "";
		$values = "";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom)
				continue;
			$names .= $this->fields[$name]->Expression . ",";
			$values .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$names = preg_replace('/,+$/', "", $names);
		$values = preg_replace('/,+$/', "", $values);
		return "INSERT INTO " . $this->UpdateTable . " ($names) VALUES ($values)";
	}

	// Insert
	public function insert(&$rs)
	{
		$conn = &$this->getConnection();
		$success = $conn->execute($this->insertSql($rs));
		if ($success) {

			// Get insert id if necessary
			$this->HOST_INDEX->setDbValue($conn->insert_ID());
			$rs['HOST_INDEX'] = $this->HOST_INDEX->DbValue;
		}
		return $success;
	}

	// UPDATE statement
	protected function updateSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "UPDATE " . $this->UpdateTable . " SET ";
		foreach ($rs as $name => $value) {
			if (!isset($this->fields[$name]) || $this->fields[$name]->IsCustom || $this->fields[$name]->IsPrimaryKey)
				continue;
			$sql .= $this->fields[$name]->Expression . "=";
			$sql .= QuotedValue($value, $this->fields[$name]->DataType, $this->Dbid) . ",";
		}
		$sql = preg_replace('/,+$/', "", $sql);
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		AddFilter($filter, $where);
		if ($filter <> "")
			$sql .= " WHERE " . $filter;
		return $sql;
	}

	// Update
	public function update(&$rs, $where = "", $rsold = NULL, $curfilter = TRUE)
	{
		$conn = &$this->getConnection();
		$success = $conn->execute($this->updateSql($rs, $where, $curfilter));
		return $success;
	}

	// DELETE statement
	protected function deleteSql(&$rs, $where = "", $curfilter = TRUE)
	{
		$sql = "DELETE FROM " . $this->UpdateTable . " WHERE ";
		if (is_array($where))
			$where = $this->arrayToFilter($where);
		if ($rs) {
			if (array_key_exists('HOST_INDEX', $rs))
				AddFilter($where, QuotedName('HOST_INDEX', $this->Dbid) . '=' . QuotedValue($rs['HOST_INDEX'], $this->HOST_INDEX->DataType, $this->Dbid));
		}
		$filter = ($curfilter) ? $this->CurrentFilter : "";
		AddFilter($filter, $where);
		if ($filter <> "")
			$sql .= $filter;
		else
			$sql .= "0=1"; // Avoid delete
		return $sql;
	}

	// Delete
	public function delete(&$rs, $where = "", $curfilter = FALSE)
	{
		$success = TRUE;
		$conn = &$this->getConnection();
		if ($success)
			$success = $conn->execute($this->deleteSql($rs, $where, $curfilter));
		return $success;
	}

	// Load DbValue from recordset or array
	protected function loadDbValues(&$rs)
	{
		if (!$rs || !is_array($rs) && $rs->EOF)
			return;
		$row = is_array($rs) ? $rs : $rs->fields;
		$this->HOST_INDEX->DbValue = $row['HOST_INDEX'];
		$this->HOST_TYPE->DbValue = $row['HOST_TYPE'];
		$this->HOST_SERVERNAME->DbValue = $row['HOST_SERVERNAME'];
		$this->HOST_IP->DbValue = $row['HOST_IP'];
		$this->HOST_PW->DbValue = $row['HOST_PW'];
		$this->HOST_RootDir->DbValue = $row['HOST_RootDir'];
		$this->HOST_RootLoginID->DbValue = $row['HOST_RootLoginID'];
		$this->HOST_UseLocalHost->DbValue = $row['HOST_UseLocalHost'];
		$this->HOST_BlockChainName->DbValue = $row['HOST_BlockChainName'];
		$this->HOST_TokenName->DbValue = $row['HOST_TokenName'];
		$this->HOST_TokenSymbol->DbValue = $row['HOST_TokenSymbol'];
		$this->HOST_TokenTotalSupply->DbValue = $row['HOST_TokenTotalSupply'];
		$this->NODENAME_ARRAY->DbValue = $row['NODENAME_ARRAY'];
		$this->PW_ARRAY->DbValue = $row['PW_ARRAY'];
		$this->MYSQL_OWNER->DbValue = $row['MYSQL_OWNER'];
		$this->MYSQL_PW->DbValue = $row['MYSQL_PW'];
		$this->FTP_OWNER->DbValue = $row['FTP_OWNER'];
		$this->FTP_PW->DbValue = $row['FTP_PW'];
		$this->NETWORKID->DbValue = $row['NETWORKID'];
		$this->BC_PORT_BASE->DbValue = $row['BC_PORT_BASE'];
		$this->HTTP_PORT->DbValue = $row['HTTP_PORT'];
		$this->RPCPORT_BASE->DbValue = $row['RPCPORT_BASE'];
		$this->RPC_API->DbValue = $row['RPC_API'];
		$this->Create_Date->DbValue = $row['Create_Date'];
	}

	// Delete uploaded files
	public function deleteUploadedFiles($row)
	{
		$this->loadDbValues($row);
	}

	// Record filter WHERE clause
	protected function sqlKeyFilter()
	{
		return "`HOST_INDEX` = @HOST_INDEX@";
	}

	// Get record filter
	public function getRecordFilter($row = NULL)
	{
		$keyFilter = $this->sqlKeyFilter();
		$val = is_array($row) ? (array_key_exists('HOST_INDEX', $row) ? $row['HOST_INDEX'] : NULL) : $this->HOST_INDEX->CurrentValue;
		if (!is_numeric($val))
			return "0=1"; // Invalid key
		if ($val == NULL)
			return "0=1"; // Invalid key
		else
			$keyFilter = str_replace("@HOST_INDEX@", AdjustSql($val, $this->Dbid), $keyFilter); // Replace key value
		return $keyFilter;
	}

	// Return page URL
	public function getReturnUrl()
	{
		$name = PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_RETURN_URL;

		// Get referer URL automatically
		if (ServerVar("HTTP_REFERER") <> "" && ReferPageName() <> CurrentPageName() && ReferPageName() <> "login.php") // Referer not same page or login page
			$_SESSION[$name] = ServerVar("HTTP_REFERER"); // Save to Session
		if (@$_SESSION[$name] <> "") {
			return $_SESSION[$name];
		} else {
			return "esbc_host_basiclist.php";
		}
	}
	public function setReturnUrl($v)
	{
		$_SESSION[PROJECT_NAME . "_" . $this->TableVar . "_" . TABLE_RETURN_URL] = $v;
	}

	// Get modal caption
	public function getModalCaption($pageName)
	{
		global $Language;
		if ($pageName == "esbc_host_basicview.php")
			return $Language->Phrase("View");
		elseif ($pageName == "esbc_host_basicedit.php")
			return $Language->Phrase("Edit");
		elseif ($pageName == "esbc_host_basicadd.php")
			return $Language->Phrase("Add");
		else
			return "";
	}

	// List URL
	public function getListUrl()
	{
		return "esbc_host_basiclist.php";
	}

	// View URL
	public function getViewUrl($parm = "")
	{
		if ($parm <> "")
			$url = $this->keyUrl("esbc_host_basicview.php", $this->getUrlParm($parm));
		else
			$url = $this->keyUrl("esbc_host_basicview.php", $this->getUrlParm(TABLE_SHOW_DETAIL . "="));
		return $this->addMasterUrl($url);
	}

	// Add URL
	public function getAddUrl($parm = "")
	{
		if ($parm <> "")
			$url = "esbc_host_basicadd.php?" . $this->getUrlParm($parm);
		else
			$url = "esbc_host_basicadd.php";
		return $this->addMasterUrl($url);
	}

	// Edit URL
	public function getEditUrl($parm = "")
	{
		$url = $this->keyUrl("esbc_host_basicedit.php", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline edit URL
	public function getInlineEditUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=edit"));
		return $this->addMasterUrl($url);
	}

	// Copy URL
	public function getCopyUrl($parm = "")
	{
		$url = $this->keyUrl("esbc_host_basicadd.php", $this->getUrlParm($parm));
		return $this->addMasterUrl($url);
	}

	// Inline copy URL
	public function getInlineCopyUrl()
	{
		$url = $this->keyUrl(CurrentPageName(), $this->getUrlParm("action=copy"));
		return $this->addMasterUrl($url);
	}

	// Delete URL
	public function getDeleteUrl()
	{
		return $this->keyUrl("esbc_host_basicdelete.php", $this->getUrlParm());
	}

	// Add master url
	public function addMasterUrl($url)
	{
		return $url;
	}
	public function keyToJson($htmlEncode = FALSE)
	{
		$json = "";
		$json .= "HOST_INDEX:" . JsonEncode($this->HOST_INDEX->CurrentValue, "number");
		$json = "{" . $json . "}";
		if ($htmlEncode)
			$json = HtmlEncode($json);
		return $json;
	}

	// Add key value to URL
	public function keyUrl($url, $parm = "")
	{
		$url = $url . "?";
		if ($parm <> "")
			$url .= $parm . "&";
		if ($this->HOST_INDEX->CurrentValue != NULL) {
			$url .= "HOST_INDEX=" . urlencode($this->HOST_INDEX->CurrentValue);
		} else {
			return "javascript:ew.alert(ew.language.phrase('InvalidRecord'));";
		}
		return $url;
	}

	// Sort URL
	public function sortUrl(&$fld)
	{
		if ($this->CurrentAction || $this->isExport() ||
			in_array($fld->Type, array(128, 204, 205))) { // Unsortable data type
				return "";
		} elseif ($fld->Sortable) {
			$urlParm = $this->getUrlParm("order=" . urlencode($fld->Name) . "&amp;ordertype=" . $fld->reverseSort());
			return $this->addMasterUrl(CurrentPageName() . "?" . $urlParm);
		} else {
			return "";
		}
	}

	// Get record keys from Post/Get/Session
	public function getRecordKeys()
	{
		global $COMPOSITE_KEY_SEPARATOR;
		$arKeys = array();
		$arKey = array();
		if (Param("key_m") !== NULL) {
			$arKeys = Param("key_m");
			$cnt = count($arKeys);
		} else {
			if (Param("HOST_INDEX") !== NULL)
				$arKeys[] = Param("HOST_INDEX");
			elseif (IsApi() && Key(0) !== NULL)
				$arKeys[] = Key(0);
			elseif (IsApi() && Route(2) !== NULL)
				$arKeys[] = Route(2);
			else
				$arKeys = NULL; // Do not setup

			//return $arKeys; // Do not return yet, so the values will also be checked by the following code
		}

		// Check keys
		$ar = array();
		if (is_array($arKeys)) {
			foreach ($arKeys as $key) {
				if (!is_numeric($key))
					continue;
				$ar[] = $key;
			}
		}
		return $ar;
	}

	// Get filter from record keys
	public function getFilterFromRecordKeys()
	{
		$arKeys = $this->getRecordKeys();
		$keyFilter = "";
		foreach ($arKeys as $key) {
			if ($keyFilter <> "") $keyFilter .= " OR ";
			$this->HOST_INDEX->CurrentValue = $key;
			$keyFilter .= "(" . $this->getRecordFilter() . ")";
		}
		return $keyFilter;
	}

	// Load rows based on filter
	public function &loadRs($filter)
	{

		// Set up filter (WHERE Clause)
		$sql = $this->getSql($filter);
		$conn = &$this->getConnection();
		$rs = $conn->execute($sql);
		return $rs;
	}

	// Load row values from recordset
	public function loadListRowValues(&$rs)
	{
		$this->HOST_INDEX->setDbValue($rs->fields('HOST_INDEX'));
		$this->HOST_TYPE->setDbValue($rs->fields('HOST_TYPE'));
		$this->HOST_SERVERNAME->setDbValue($rs->fields('HOST_SERVERNAME'));
		$this->HOST_IP->setDbValue($rs->fields('HOST_IP'));
		$this->HOST_PW->setDbValue($rs->fields('HOST_PW'));
		$this->HOST_RootDir->setDbValue($rs->fields('HOST_RootDir'));
		$this->HOST_RootLoginID->setDbValue($rs->fields('HOST_RootLoginID'));
		$this->HOST_UseLocalHost->setDbValue($rs->fields('HOST_UseLocalHost'));
		$this->HOST_BlockChainName->setDbValue($rs->fields('HOST_BlockChainName'));
		$this->HOST_TokenName->setDbValue($rs->fields('HOST_TokenName'));
		$this->HOST_TokenSymbol->setDbValue($rs->fields('HOST_TokenSymbol'));
		$this->HOST_TokenTotalSupply->setDbValue($rs->fields('HOST_TokenTotalSupply'));
		$this->NODENAME_ARRAY->setDbValue($rs->fields('NODENAME_ARRAY'));
		$this->PW_ARRAY->setDbValue($rs->fields('PW_ARRAY'));
		$this->MYSQL_OWNER->setDbValue($rs->fields('MYSQL_OWNER'));
		$this->MYSQL_PW->setDbValue($rs->fields('MYSQL_PW'));
		$this->FTP_OWNER->setDbValue($rs->fields('FTP_OWNER'));
		$this->FTP_PW->setDbValue($rs->fields('FTP_PW'));
		$this->NETWORKID->setDbValue($rs->fields('NETWORKID'));
		$this->BC_PORT_BASE->setDbValue($rs->fields('BC_PORT_BASE'));
		$this->HTTP_PORT->setDbValue($rs->fields('HTTP_PORT'));
		$this->RPCPORT_BASE->setDbValue($rs->fields('RPCPORT_BASE'));
		$this->RPC_API->setDbValue($rs->fields('RPC_API'));
		$this->Create_Date->setDbValue($rs->fields('Create_Date'));
	}

	// Render list row values
	public function renderListRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

	// Common render codes
		// HOST_INDEX
		// HOST_TYPE
		// HOST_SERVERNAME
		// HOST_IP
		// HOST_PW
		// HOST_RootDir
		// HOST_RootLoginID
		// HOST_UseLocalHost
		// HOST_BlockChainName
		// HOST_TokenName
		// HOST_TokenSymbol
		// HOST_TokenTotalSupply
		// NODENAME_ARRAY
		// PW_ARRAY
		// MYSQL_OWNER
		// MYSQL_PW
		// FTP_OWNER
		// FTP_PW
		// NETWORKID
		// BC_PORT_BASE
		// HTTP_PORT
		// RPCPORT_BASE
		// RPC_API
		// Create_Date
		// HOST_INDEX

		$this->HOST_INDEX->ViewValue = $this->HOST_INDEX->CurrentValue;
		$this->HOST_INDEX->ViewCustomAttributes = "";

		// HOST_TYPE
		$this->HOST_TYPE->ViewValue = $this->HOST_TYPE->CurrentValue;
		$this->HOST_TYPE->ViewCustomAttributes = "";

		// HOST_SERVERNAME
		$this->HOST_SERVERNAME->ViewValue = $this->HOST_SERVERNAME->CurrentValue;
		$this->HOST_SERVERNAME->ViewCustomAttributes = "";

		// HOST_IP
		$this->HOST_IP->ViewValue = $this->HOST_IP->CurrentValue;
		$this->HOST_IP->ViewCustomAttributes = "";

		// HOST_PW
		$this->HOST_PW->ViewValue = $this->HOST_PW->CurrentValue;
		$this->HOST_PW->ViewCustomAttributes = "";

		// HOST_RootDir
		$this->HOST_RootDir->ViewValue = $this->HOST_RootDir->CurrentValue;
		$this->HOST_RootDir->ViewCustomAttributes = "";

		// HOST_RootLoginID
		$this->HOST_RootLoginID->ViewValue = $this->HOST_RootLoginID->CurrentValue;
		$this->HOST_RootLoginID->ViewCustomAttributes = "";

		// HOST_UseLocalHost
		$this->HOST_UseLocalHost->ViewValue = $this->HOST_UseLocalHost->CurrentValue;
		$this->HOST_UseLocalHost->ViewValue = FormatNumber($this->HOST_UseLocalHost->ViewValue, 0, -2, -2, -2);
		$this->HOST_UseLocalHost->ViewCustomAttributes = "";

		// HOST_BlockChainName
		$this->HOST_BlockChainName->ViewValue = $this->HOST_BlockChainName->CurrentValue;
		$this->HOST_BlockChainName->ViewCustomAttributes = "";

		// HOST_TokenName
		$this->HOST_TokenName->ViewValue = $this->HOST_TokenName->CurrentValue;
		$this->HOST_TokenName->ViewCustomAttributes = "";

		// HOST_TokenSymbol
		$this->HOST_TokenSymbol->ViewValue = $this->HOST_TokenSymbol->CurrentValue;
		$this->HOST_TokenSymbol->ViewCustomAttributes = "";

		// HOST_TokenTotalSupply
		$this->HOST_TokenTotalSupply->ViewValue = $this->HOST_TokenTotalSupply->CurrentValue;
		$this->HOST_TokenTotalSupply->ViewValue = FormatNumber($this->HOST_TokenTotalSupply->ViewValue, 0, -2, -2, -2);
		$this->HOST_TokenTotalSupply->ViewCustomAttributes = "";

		// NODENAME_ARRAY
		$this->NODENAME_ARRAY->ViewValue = $this->NODENAME_ARRAY->CurrentValue;
		$this->NODENAME_ARRAY->ViewCustomAttributes = "";

		// PW_ARRAY
		$this->PW_ARRAY->ViewValue = $this->PW_ARRAY->CurrentValue;
		$this->PW_ARRAY->ViewCustomAttributes = "";

		// MYSQL_OWNER
		$this->MYSQL_OWNER->ViewValue = $this->MYSQL_OWNER->CurrentValue;
		$this->MYSQL_OWNER->ViewCustomAttributes = "";

		// MYSQL_PW
		$this->MYSQL_PW->ViewValue = $this->MYSQL_PW->CurrentValue;
		$this->MYSQL_PW->ViewCustomAttributes = "";

		// FTP_OWNER
		$this->FTP_OWNER->ViewValue = $this->FTP_OWNER->CurrentValue;
		$this->FTP_OWNER->ViewCustomAttributes = "";

		// FTP_PW
		$this->FTP_PW->ViewValue = $this->FTP_PW->CurrentValue;
		$this->FTP_PW->ViewCustomAttributes = "";

		// NETWORKID
		$this->NETWORKID->ViewValue = $this->NETWORKID->CurrentValue;
		$this->NETWORKID->ViewValue = FormatNumber($this->NETWORKID->ViewValue, 0, -2, -2, -2);
		$this->NETWORKID->ViewCustomAttributes = "";

		// BC_PORT_BASE
		$this->BC_PORT_BASE->ViewValue = $this->BC_PORT_BASE->CurrentValue;
		$this->BC_PORT_BASE->ViewValue = FormatNumber($this->BC_PORT_BASE->ViewValue, 0, -2, -2, -2);
		$this->BC_PORT_BASE->ViewCustomAttributes = "";

		// HTTP_PORT
		$this->HTTP_PORT->ViewValue = $this->HTTP_PORT->CurrentValue;
		$this->HTTP_PORT->ViewValue = FormatNumber($this->HTTP_PORT->ViewValue, 0, -2, -2, -2);
		$this->HTTP_PORT->ViewCustomAttributes = "";

		// RPCPORT_BASE
		$this->RPCPORT_BASE->ViewValue = $this->RPCPORT_BASE->CurrentValue;
		$this->RPCPORT_BASE->ViewValue = FormatNumber($this->RPCPORT_BASE->ViewValue, 0, -2, -2, -2);
		$this->RPCPORT_BASE->ViewCustomAttributes = "";

		// RPC_API
		$this->RPC_API->ViewValue = $this->RPC_API->CurrentValue;
		$this->RPC_API->ViewCustomAttributes = "";

		// Create_Date
		$this->Create_Date->ViewValue = $this->Create_Date->CurrentValue;
		$this->Create_Date->ViewValue = FormatDateTime($this->Create_Date->ViewValue, 1);
		$this->Create_Date->ViewCustomAttributes = "";

		// HOST_INDEX
		$this->HOST_INDEX->LinkCustomAttributes = "";
		$this->HOST_INDEX->HrefValue = "";
		$this->HOST_INDEX->TooltipValue = "";

		// HOST_TYPE
		$this->HOST_TYPE->LinkCustomAttributes = "";
		$this->HOST_TYPE->HrefValue = "";
		$this->HOST_TYPE->TooltipValue = "";

		// HOST_SERVERNAME
		$this->HOST_SERVERNAME->LinkCustomAttributes = "";
		$this->HOST_SERVERNAME->HrefValue = "";
		$this->HOST_SERVERNAME->TooltipValue = "";

		// HOST_IP
		$this->HOST_IP->LinkCustomAttributes = "";
		$this->HOST_IP->HrefValue = "";
		$this->HOST_IP->TooltipValue = "";

		// HOST_PW
		$this->HOST_PW->LinkCustomAttributes = "";
		$this->HOST_PW->HrefValue = "";
		$this->HOST_PW->TooltipValue = "";

		// HOST_RootDir
		$this->HOST_RootDir->LinkCustomAttributes = "";
		$this->HOST_RootDir->HrefValue = "";
		$this->HOST_RootDir->TooltipValue = "";

		// HOST_RootLoginID
		$this->HOST_RootLoginID->LinkCustomAttributes = "";
		$this->HOST_RootLoginID->HrefValue = "";
		$this->HOST_RootLoginID->TooltipValue = "";

		// HOST_UseLocalHost
		$this->HOST_UseLocalHost->LinkCustomAttributes = "";
		$this->HOST_UseLocalHost->HrefValue = "";
		$this->HOST_UseLocalHost->TooltipValue = "";

		// HOST_BlockChainName
		$this->HOST_BlockChainName->LinkCustomAttributes = "";
		$this->HOST_BlockChainName->HrefValue = "";
		$this->HOST_BlockChainName->TooltipValue = "";

		// HOST_TokenName
		$this->HOST_TokenName->LinkCustomAttributes = "";
		$this->HOST_TokenName->HrefValue = "";
		$this->HOST_TokenName->TooltipValue = "";

		// HOST_TokenSymbol
		$this->HOST_TokenSymbol->LinkCustomAttributes = "";
		$this->HOST_TokenSymbol->HrefValue = "";
		$this->HOST_TokenSymbol->TooltipValue = "";

		// HOST_TokenTotalSupply
		$this->HOST_TokenTotalSupply->LinkCustomAttributes = "";
		$this->HOST_TokenTotalSupply->HrefValue = "";
		$this->HOST_TokenTotalSupply->TooltipValue = "";

		// NODENAME_ARRAY
		$this->NODENAME_ARRAY->LinkCustomAttributes = "";
		$this->NODENAME_ARRAY->HrefValue = "";
		$this->NODENAME_ARRAY->TooltipValue = "";

		// PW_ARRAY
		$this->PW_ARRAY->LinkCustomAttributes = "";
		$this->PW_ARRAY->HrefValue = "";
		$this->PW_ARRAY->TooltipValue = "";

		// MYSQL_OWNER
		$this->MYSQL_OWNER->LinkCustomAttributes = "";
		$this->MYSQL_OWNER->HrefValue = "";
		$this->MYSQL_OWNER->TooltipValue = "";

		// MYSQL_PW
		$this->MYSQL_PW->LinkCustomAttributes = "";
		$this->MYSQL_PW->HrefValue = "";
		$this->MYSQL_PW->TooltipValue = "";

		// FTP_OWNER
		$this->FTP_OWNER->LinkCustomAttributes = "";
		$this->FTP_OWNER->HrefValue = "";
		$this->FTP_OWNER->TooltipValue = "";

		// FTP_PW
		$this->FTP_PW->LinkCustomAttributes = "";
		$this->FTP_PW->HrefValue = "";
		$this->FTP_PW->TooltipValue = "";

		// NETWORKID
		$this->NETWORKID->LinkCustomAttributes = "";
		$this->NETWORKID->HrefValue = "";
		$this->NETWORKID->TooltipValue = "";

		// BC_PORT_BASE
		$this->BC_PORT_BASE->LinkCustomAttributes = "";
		$this->BC_PORT_BASE->HrefValue = "";
		$this->BC_PORT_BASE->TooltipValue = "";

		// HTTP_PORT
		$this->HTTP_PORT->LinkCustomAttributes = "";
		$this->HTTP_PORT->HrefValue = "";
		$this->HTTP_PORT->TooltipValue = "";

		// RPCPORT_BASE
		$this->RPCPORT_BASE->LinkCustomAttributes = "";
		$this->RPCPORT_BASE->HrefValue = "";
		$this->RPCPORT_BASE->TooltipValue = "";

		// RPC_API
		$this->RPC_API->LinkCustomAttributes = "";
		$this->RPC_API->HrefValue = "";
		$this->RPC_API->TooltipValue = "";

		// Create_Date
		$this->Create_Date->LinkCustomAttributes = "";
		$this->Create_Date->HrefValue = "";
		$this->Create_Date->TooltipValue = "";

		// Call Row Rendered event
		$this->Row_Rendered();

		// Save data for Custom Template
		$this->Rows[] = $this->customTemplateFieldValues();
	}

	// Render edit row values
	public function renderEditRow()
	{
		global $Security, $CurrentLanguage, $Language;

		// Call Row Rendering event
		$this->Row_Rendering();

		// HOST_INDEX
		$this->HOST_INDEX->EditAttrs["class"] = "form-control";
		$this->HOST_INDEX->EditCustomAttributes = "";
		$this->HOST_INDEX->EditValue = $this->HOST_INDEX->CurrentValue;
		$this->HOST_INDEX->ViewCustomAttributes = "";

		// HOST_TYPE
		$this->HOST_TYPE->EditAttrs["class"] = "form-control";
		$this->HOST_TYPE->EditCustomAttributes = "";
		$this->HOST_TYPE->EditValue = $this->HOST_TYPE->CurrentValue;
		$this->HOST_TYPE->PlaceHolder = RemoveHtml($this->HOST_TYPE->caption());

		// HOST_SERVERNAME
		$this->HOST_SERVERNAME->EditAttrs["class"] = "form-control";
		$this->HOST_SERVERNAME->EditCustomAttributes = "";
		$this->HOST_SERVERNAME->EditValue = $this->HOST_SERVERNAME->CurrentValue;
		$this->HOST_SERVERNAME->PlaceHolder = RemoveHtml($this->HOST_SERVERNAME->caption());

		// HOST_IP
		$this->HOST_IP->EditAttrs["class"] = "form-control";
		$this->HOST_IP->EditCustomAttributes = "";
		$this->HOST_IP->EditValue = $this->HOST_IP->CurrentValue;
		$this->HOST_IP->PlaceHolder = RemoveHtml($this->HOST_IP->caption());

		// HOST_PW
		$this->HOST_PW->EditAttrs["class"] = "form-control";
		$this->HOST_PW->EditCustomAttributes = "";
		$this->HOST_PW->EditValue = $this->HOST_PW->CurrentValue;
		$this->HOST_PW->PlaceHolder = RemoveHtml($this->HOST_PW->caption());

		// HOST_RootDir
		$this->HOST_RootDir->EditAttrs["class"] = "form-control";
		$this->HOST_RootDir->EditCustomAttributes = "";
		$this->HOST_RootDir->EditValue = $this->HOST_RootDir->CurrentValue;
		$this->HOST_RootDir->PlaceHolder = RemoveHtml($this->HOST_RootDir->caption());

		// HOST_RootLoginID
		$this->HOST_RootLoginID->EditAttrs["class"] = "form-control";
		$this->HOST_RootLoginID->EditCustomAttributes = "";
		$this->HOST_RootLoginID->EditValue = $this->HOST_RootLoginID->CurrentValue;
		$this->HOST_RootLoginID->PlaceHolder = RemoveHtml($this->HOST_RootLoginID->caption());

		// HOST_UseLocalHost
		$this->HOST_UseLocalHost->EditAttrs["class"] = "form-control";
		$this->HOST_UseLocalHost->EditCustomAttributes = "";
		$this->HOST_UseLocalHost->EditValue = $this->HOST_UseLocalHost->CurrentValue;
		$this->HOST_UseLocalHost->PlaceHolder = RemoveHtml($this->HOST_UseLocalHost->caption());

		// HOST_BlockChainName
		$this->HOST_BlockChainName->EditAttrs["class"] = "form-control";
		$this->HOST_BlockChainName->EditCustomAttributes = "";
		$this->HOST_BlockChainName->EditValue = $this->HOST_BlockChainName->CurrentValue;
		$this->HOST_BlockChainName->PlaceHolder = RemoveHtml($this->HOST_BlockChainName->caption());

		// HOST_TokenName
		$this->HOST_TokenName->EditAttrs["class"] = "form-control";
		$this->HOST_TokenName->EditCustomAttributes = "";
		$this->HOST_TokenName->EditValue = $this->HOST_TokenName->CurrentValue;
		$this->HOST_TokenName->PlaceHolder = RemoveHtml($this->HOST_TokenName->caption());

		// HOST_TokenSymbol
		$this->HOST_TokenSymbol->EditAttrs["class"] = "form-control";
		$this->HOST_TokenSymbol->EditCustomAttributes = "";
		$this->HOST_TokenSymbol->EditValue = $this->HOST_TokenSymbol->CurrentValue;
		$this->HOST_TokenSymbol->PlaceHolder = RemoveHtml($this->HOST_TokenSymbol->caption());

		// HOST_TokenTotalSupply
		$this->HOST_TokenTotalSupply->EditAttrs["class"] = "form-control";
		$this->HOST_TokenTotalSupply->EditCustomAttributes = "";
		$this->HOST_TokenTotalSupply->EditValue = $this->HOST_TokenTotalSupply->CurrentValue;
		$this->HOST_TokenTotalSupply->PlaceHolder = RemoveHtml($this->HOST_TokenTotalSupply->caption());

		// NODENAME_ARRAY
		$this->NODENAME_ARRAY->EditAttrs["class"] = "form-control";
		$this->NODENAME_ARRAY->EditCustomAttributes = "";
		$this->NODENAME_ARRAY->EditValue = $this->NODENAME_ARRAY->CurrentValue;
		$this->NODENAME_ARRAY->PlaceHolder = RemoveHtml($this->NODENAME_ARRAY->caption());

		// PW_ARRAY
		$this->PW_ARRAY->EditAttrs["class"] = "form-control";
		$this->PW_ARRAY->EditCustomAttributes = "";
		$this->PW_ARRAY->EditValue = $this->PW_ARRAY->CurrentValue;
		$this->PW_ARRAY->PlaceHolder = RemoveHtml($this->PW_ARRAY->caption());

		// MYSQL_OWNER
		$this->MYSQL_OWNER->EditAttrs["class"] = "form-control";
		$this->MYSQL_OWNER->EditCustomAttributes = "";
		$this->MYSQL_OWNER->EditValue = $this->MYSQL_OWNER->CurrentValue;
		$this->MYSQL_OWNER->PlaceHolder = RemoveHtml($this->MYSQL_OWNER->caption());

		// MYSQL_PW
		$this->MYSQL_PW->EditAttrs["class"] = "form-control";
		$this->MYSQL_PW->EditCustomAttributes = "";
		$this->MYSQL_PW->EditValue = $this->MYSQL_PW->CurrentValue;
		$this->MYSQL_PW->PlaceHolder = RemoveHtml($this->MYSQL_PW->caption());

		// FTP_OWNER
		$this->FTP_OWNER->EditAttrs["class"] = "form-control";
		$this->FTP_OWNER->EditCustomAttributes = "";
		$this->FTP_OWNER->EditValue = $this->FTP_OWNER->CurrentValue;
		$this->FTP_OWNER->PlaceHolder = RemoveHtml($this->FTP_OWNER->caption());

		// FTP_PW
		$this->FTP_PW->EditAttrs["class"] = "form-control";
		$this->FTP_PW->EditCustomAttributes = "";
		$this->FTP_PW->EditValue = $this->FTP_PW->CurrentValue;
		$this->FTP_PW->PlaceHolder = RemoveHtml($this->FTP_PW->caption());

		// NETWORKID
		$this->NETWORKID->EditAttrs["class"] = "form-control";
		$this->NETWORKID->EditCustomAttributes = "";
		$this->NETWORKID->EditValue = $this->NETWORKID->CurrentValue;
		$this->NETWORKID->PlaceHolder = RemoveHtml($this->NETWORKID->caption());

		// BC_PORT_BASE
		$this->BC_PORT_BASE->EditAttrs["class"] = "form-control";
		$this->BC_PORT_BASE->EditCustomAttributes = "";
		$this->BC_PORT_BASE->EditValue = $this->BC_PORT_BASE->CurrentValue;
		$this->BC_PORT_BASE->PlaceHolder = RemoveHtml($this->BC_PORT_BASE->caption());

		// HTTP_PORT
		$this->HTTP_PORT->EditAttrs["class"] = "form-control";
		$this->HTTP_PORT->EditCustomAttributes = "";
		$this->HTTP_PORT->EditValue = $this->HTTP_PORT->CurrentValue;
		$this->HTTP_PORT->PlaceHolder = RemoveHtml($this->HTTP_PORT->caption());

		// RPCPORT_BASE
		$this->RPCPORT_BASE->EditAttrs["class"] = "form-control";
		$this->RPCPORT_BASE->EditCustomAttributes = "";
		$this->RPCPORT_BASE->EditValue = $this->RPCPORT_BASE->CurrentValue;
		$this->RPCPORT_BASE->PlaceHolder = RemoveHtml($this->RPCPORT_BASE->caption());

		// RPC_API
		$this->RPC_API->EditAttrs["class"] = "form-control";
		$this->RPC_API->EditCustomAttributes = "";
		$this->RPC_API->EditValue = $this->RPC_API->CurrentValue;
		$this->RPC_API->PlaceHolder = RemoveHtml($this->RPC_API->caption());

		// Create_Date
		$this->Create_Date->EditAttrs["class"] = "form-control";
		$this->Create_Date->EditCustomAttributes = "";
		$this->Create_Date->EditValue = FormatDateTime($this->Create_Date->CurrentValue, 8);
		$this->Create_Date->PlaceHolder = RemoveHtml($this->Create_Date->caption());

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Aggregate list row values
	public function aggregateListRowValues()
	{
	}

	// Aggregate list row (for rendering)
	public function aggregateListRow()
	{

		// Call Row Rendered event
		$this->Row_Rendered();
	}

	// Export data in HTML/CSV/Word/Excel/Email/PDF format
	public function exportDocument($doc, $recordset, $startRec = 1, $stopRec = 1, $exportPageType = "")
	{
		if (!$recordset || !$doc)
			return;
		if (!$doc->ExportCustom) {

			// Write header
			$doc->exportTableHeader();
			if ($doc->Horizontal) { // Horizontal format, write header
				$doc->beginExportRow();
				if ($exportPageType == "view") {
					if ($this->HOST_INDEX->Exportable)
						$doc->exportCaption($this->HOST_INDEX);
					if ($this->HOST_TYPE->Exportable)
						$doc->exportCaption($this->HOST_TYPE);
					if ($this->HOST_SERVERNAME->Exportable)
						$doc->exportCaption($this->HOST_SERVERNAME);
					if ($this->HOST_IP->Exportable)
						$doc->exportCaption($this->HOST_IP);
					if ($this->HOST_PW->Exportable)
						$doc->exportCaption($this->HOST_PW);
					if ($this->HOST_RootDir->Exportable)
						$doc->exportCaption($this->HOST_RootDir);
					if ($this->HOST_RootLoginID->Exportable)
						$doc->exportCaption($this->HOST_RootLoginID);
					if ($this->HOST_UseLocalHost->Exportable)
						$doc->exportCaption($this->HOST_UseLocalHost);
					if ($this->HOST_BlockChainName->Exportable)
						$doc->exportCaption($this->HOST_BlockChainName);
					if ($this->HOST_TokenName->Exportable)
						$doc->exportCaption($this->HOST_TokenName);
					if ($this->HOST_TokenSymbol->Exportable)
						$doc->exportCaption($this->HOST_TokenSymbol);
					if ($this->HOST_TokenTotalSupply->Exportable)
						$doc->exportCaption($this->HOST_TokenTotalSupply);
					if ($this->NODENAME_ARRAY->Exportable)
						$doc->exportCaption($this->NODENAME_ARRAY);
					if ($this->PW_ARRAY->Exportable)
						$doc->exportCaption($this->PW_ARRAY);
					if ($this->MYSQL_OWNER->Exportable)
						$doc->exportCaption($this->MYSQL_OWNER);
					if ($this->MYSQL_PW->Exportable)
						$doc->exportCaption($this->MYSQL_PW);
					if ($this->FTP_OWNER->Exportable)
						$doc->exportCaption($this->FTP_OWNER);
					if ($this->FTP_PW->Exportable)
						$doc->exportCaption($this->FTP_PW);
					if ($this->NETWORKID->Exportable)
						$doc->exportCaption($this->NETWORKID);
					if ($this->BC_PORT_BASE->Exportable)
						$doc->exportCaption($this->BC_PORT_BASE);
					if ($this->HTTP_PORT->Exportable)
						$doc->exportCaption($this->HTTP_PORT);
					if ($this->RPCPORT_BASE->Exportable)
						$doc->exportCaption($this->RPCPORT_BASE);
					if ($this->RPC_API->Exportable)
						$doc->exportCaption($this->RPC_API);
					if ($this->Create_Date->Exportable)
						$doc->exportCaption($this->Create_Date);
				} else {
					if ($this->HOST_INDEX->Exportable)
						$doc->exportCaption($this->HOST_INDEX);
					if ($this->HOST_TYPE->Exportable)
						$doc->exportCaption($this->HOST_TYPE);
					if ($this->HOST_SERVERNAME->Exportable)
						$doc->exportCaption($this->HOST_SERVERNAME);
					if ($this->HOST_IP->Exportable)
						$doc->exportCaption($this->HOST_IP);
					if ($this->HOST_PW->Exportable)
						$doc->exportCaption($this->HOST_PW);
					if ($this->HOST_RootDir->Exportable)
						$doc->exportCaption($this->HOST_RootDir);
					if ($this->HOST_RootLoginID->Exportable)
						$doc->exportCaption($this->HOST_RootLoginID);
					if ($this->HOST_UseLocalHost->Exportable)
						$doc->exportCaption($this->HOST_UseLocalHost);
					if ($this->HOST_BlockChainName->Exportable)
						$doc->exportCaption($this->HOST_BlockChainName);
					if ($this->HOST_TokenName->Exportable)
						$doc->exportCaption($this->HOST_TokenName);
					if ($this->HOST_TokenTotalSupply->Exportable)
						$doc->exportCaption($this->HOST_TokenTotalSupply);
					if ($this->NODENAME_ARRAY->Exportable)
						$doc->exportCaption($this->NODENAME_ARRAY);
					if ($this->PW_ARRAY->Exportable)
						$doc->exportCaption($this->PW_ARRAY);
					if ($this->MYSQL_OWNER->Exportable)
						$doc->exportCaption($this->MYSQL_OWNER);
					if ($this->MYSQL_PW->Exportable)
						$doc->exportCaption($this->MYSQL_PW);
					if ($this->FTP_OWNER->Exportable)
						$doc->exportCaption($this->FTP_OWNER);
					if ($this->FTP_PW->Exportable)
						$doc->exportCaption($this->FTP_PW);
					if ($this->NETWORKID->Exportable)
						$doc->exportCaption($this->NETWORKID);
					if ($this->BC_PORT_BASE->Exportable)
						$doc->exportCaption($this->BC_PORT_BASE);
					if ($this->HTTP_PORT->Exportable)
						$doc->exportCaption($this->HTTP_PORT);
					if ($this->RPCPORT_BASE->Exportable)
						$doc->exportCaption($this->RPCPORT_BASE);
					if ($this->RPC_API->Exportable)
						$doc->exportCaption($this->RPC_API);
					if ($this->Create_Date->Exportable)
						$doc->exportCaption($this->Create_Date);
				}
				$doc->endExportRow();
			}
		}

		// Move to first record
		$recCnt = $startRec - 1;
		if (!$recordset->EOF) {
			$recordset->moveFirst();
			if ($startRec > 1)
				$recordset->move($startRec - 1);
		}
		while (!$recordset->EOF && $recCnt < $stopRec) {
			$recCnt++;
			if ($recCnt >= $startRec) {
				$rowCnt = $recCnt - $startRec + 1;

				// Page break
				if ($this->ExportPageBreakCount > 0) {
					if ($rowCnt > 1 && ($rowCnt - 1) % $this->ExportPageBreakCount == 0)
						$doc->exportPageBreak();
				}
				$this->loadListRowValues($recordset);

				// Render row
				$this->RowType = ROWTYPE_VIEW; // Render view
				$this->resetAttributes();
				$this->renderListRow();
				if (!$doc->ExportCustom) {
					$doc->beginExportRow($rowCnt); // Allow CSS styles if enabled
					if ($exportPageType == "view") {
						if ($this->HOST_INDEX->Exportable)
							$doc->exportField($this->HOST_INDEX);
						if ($this->HOST_TYPE->Exportable)
							$doc->exportField($this->HOST_TYPE);
						if ($this->HOST_SERVERNAME->Exportable)
							$doc->exportField($this->HOST_SERVERNAME);
						if ($this->HOST_IP->Exportable)
							$doc->exportField($this->HOST_IP);
						if ($this->HOST_PW->Exportable)
							$doc->exportField($this->HOST_PW);
						if ($this->HOST_RootDir->Exportable)
							$doc->exportField($this->HOST_RootDir);
						if ($this->HOST_RootLoginID->Exportable)
							$doc->exportField($this->HOST_RootLoginID);
						if ($this->HOST_UseLocalHost->Exportable)
							$doc->exportField($this->HOST_UseLocalHost);
						if ($this->HOST_BlockChainName->Exportable)
							$doc->exportField($this->HOST_BlockChainName);
						if ($this->HOST_TokenName->Exportable)
							$doc->exportField($this->HOST_TokenName);
						if ($this->HOST_TokenSymbol->Exportable)
							$doc->exportField($this->HOST_TokenSymbol);
						if ($this->HOST_TokenTotalSupply->Exportable)
							$doc->exportField($this->HOST_TokenTotalSupply);
						if ($this->NODENAME_ARRAY->Exportable)
							$doc->exportField($this->NODENAME_ARRAY);
						if ($this->PW_ARRAY->Exportable)
							$doc->exportField($this->PW_ARRAY);
						if ($this->MYSQL_OWNER->Exportable)
							$doc->exportField($this->MYSQL_OWNER);
						if ($this->MYSQL_PW->Exportable)
							$doc->exportField($this->MYSQL_PW);
						if ($this->FTP_OWNER->Exportable)
							$doc->exportField($this->FTP_OWNER);
						if ($this->FTP_PW->Exportable)
							$doc->exportField($this->FTP_PW);
						if ($this->NETWORKID->Exportable)
							$doc->exportField($this->NETWORKID);
						if ($this->BC_PORT_BASE->Exportable)
							$doc->exportField($this->BC_PORT_BASE);
						if ($this->HTTP_PORT->Exportable)
							$doc->exportField($this->HTTP_PORT);
						if ($this->RPCPORT_BASE->Exportable)
							$doc->exportField($this->RPCPORT_BASE);
						if ($this->RPC_API->Exportable)
							$doc->exportField($this->RPC_API);
						if ($this->Create_Date->Exportable)
							$doc->exportField($this->Create_Date);
					} else {
						if ($this->HOST_INDEX->Exportable)
							$doc->exportField($this->HOST_INDEX);
						if ($this->HOST_TYPE->Exportable)
							$doc->exportField($this->HOST_TYPE);
						if ($this->HOST_SERVERNAME->Exportable)
							$doc->exportField($this->HOST_SERVERNAME);
						if ($this->HOST_IP->Exportable)
							$doc->exportField($this->HOST_IP);
						if ($this->HOST_PW->Exportable)
							$doc->exportField($this->HOST_PW);
						if ($this->HOST_RootDir->Exportable)
							$doc->exportField($this->HOST_RootDir);
						if ($this->HOST_RootLoginID->Exportable)
							$doc->exportField($this->HOST_RootLoginID);
						if ($this->HOST_UseLocalHost->Exportable)
							$doc->exportField($this->HOST_UseLocalHost);
						if ($this->HOST_BlockChainName->Exportable)
							$doc->exportField($this->HOST_BlockChainName);
						if ($this->HOST_TokenName->Exportable)
							$doc->exportField($this->HOST_TokenName);
						if ($this->HOST_TokenTotalSupply->Exportable)
							$doc->exportField($this->HOST_TokenTotalSupply);
						if ($this->NODENAME_ARRAY->Exportable)
							$doc->exportField($this->NODENAME_ARRAY);
						if ($this->PW_ARRAY->Exportable)
							$doc->exportField($this->PW_ARRAY);
						if ($this->MYSQL_OWNER->Exportable)
							$doc->exportField($this->MYSQL_OWNER);
						if ($this->MYSQL_PW->Exportable)
							$doc->exportField($this->MYSQL_PW);
						if ($this->FTP_OWNER->Exportable)
							$doc->exportField($this->FTP_OWNER);
						if ($this->FTP_PW->Exportable)
							$doc->exportField($this->FTP_PW);
						if ($this->NETWORKID->Exportable)
							$doc->exportField($this->NETWORKID);
						if ($this->BC_PORT_BASE->Exportable)
							$doc->exportField($this->BC_PORT_BASE);
						if ($this->HTTP_PORT->Exportable)
							$doc->exportField($this->HTTP_PORT);
						if ($this->RPCPORT_BASE->Exportable)
							$doc->exportField($this->RPCPORT_BASE);
						if ($this->RPC_API->Exportable)
							$doc->exportField($this->RPC_API);
						if ($this->Create_Date->Exportable)
							$doc->exportField($this->Create_Date);
					}
					$doc->endExportRow($rowCnt);
				}
			}

			// Call Row Export server event
			if ($doc->ExportCustom)
				$this->Row_Export($recordset->fields);
			$recordset->moveNext();
		}
		if (!$doc->ExportCustom) {
			$doc->exportTableFooter();
		}
	}

	// Lookup data from table
	public function lookup()
	{

		// Load lookup parameters
		$distinct = ConvertToBool(Post("distinct"));
		$linkField = Post("linkField");
		$displayFields = Post("displayFields");
		$parentFields = Post("parentFields");
		if (!is_array($parentFields))
			$parentFields = [];
		$childFields = Post("childFields");
		if (!is_array($childFields))
			$childFields = [];
		$filterFields = Post("filterFields");
		if (!is_array($filterFields))
			$filterFields = [];
		$filterOperators = Post("filterOperators");
		if (!is_array($filterOperators))
			$filterOperators = [];
		$autoFillSourceFields = Post("autoFillSourceFields");
		if (!is_array($autoFillSourceFields))
			$autoFillSourceFields = [];
		$formatAutoFill = FALSE;
		$lookupType = Post("ajax", "unknown");
		$pageSize = -1;
		$offset = -1;
		$searchValue = "";
		if (SameText($lookupType, "modal")) {
			$searchValue = Post("sv", "");
			$pageSize = Post("recperpage", 10);
			$offset = Post("start", 0);
		} elseif (SameText($lookupType, "autosuggest")) {
			$searchValue = Get("q", "");
			$pageSize = Param("n", -1);
			$pageSize = is_numeric($pageSize) ? (int)$pageSize : -1;
			if ($pageSize <= 0)
				$pageSize = AUTO_SUGGEST_MAX_ENTRIES;
			$start = Param("start", -1);
			$start = is_numeric($start) ? (int)$start : -1;
			$page = Param("page", -1);
			$page = is_numeric($page) ? (int)$page : -1;
			$offset = $start >= 0 ? $start : ($page > 0 && $pageSize > 0 ? ($page - 1) * $pageSize : 0);
		}
		$userSelect = Decrypt(Post("s", ""));
		$userFilter = Decrypt(Post("f", ""));
		$userOrderBy = Decrypt(Post("o", ""));

		// Create lookup object and output JSON
		$lookup = new Lookup($linkField, $this->TableVar, $distinct, $linkField, $displayFields, $parentFields, $childFields, $filterFields, $autoFillSourceFields);
		foreach ($filterFields as $i => $filterField) { // Set up filter operators
			if (@$filterOperators[$i] <> "")
				$lookup->setFilterOperator($filterField, $filterOperators[$i]);
		}
		$lookup->LookupType = $lookupType; // Lookup type
		$lookup->FilterValues[] = rawurldecode(Post("v0", Post("lookupValue", ""))); // Lookup values
		$cnt = is_array($filterFields) ? count($filterFields) : 0;
		for ($i = 1; $i <= $cnt; $i++)
			$lookup->FilterValues[] = rawurldecode(Post("v" . $i, ""));
		$lookup->SearchValue = $searchValue;
		$lookup->PageSize = $pageSize;
		$lookup->Offset = $offset;
		if ($userSelect <> "")
			$lookup->UserSelect = $userSelect;
		if ($userFilter <> "")
			$lookup->UserFilter = $userFilter;
		if ($userOrderBy <> "")
			$lookup->UserOrderBy = $userOrderBy;
		$lookup->toJson();
	}

	// Get file data
	public function getFileData($fldparm, $key, $resize, $width = THUMBNAIL_DEFAULT_WIDTH, $height = THUMBNAIL_DEFAULT_HEIGHT)
	{

		// No binary fields
		return FALSE;
	}

	// Table level events
	// Recordset Selecting event
	function Recordset_Selecting(&$filter) {

		// Enter your code here
	}

	// Recordset Selected event
	function Recordset_Selected(&$rs) {

		//echo "Recordset Selected";
	}

	// Recordset Search Validated event
	function Recordset_SearchValidated() {

		// Example:
		//$this->MyField1->AdvancedSearch->SearchValue = "your search criteria"; // Search value

	}

	// Recordset Searching event
	function Recordset_Searching(&$filter) {

		// Enter your code here
	}

	// Row_Selecting event
	function Row_Selecting(&$filter) {

		// Enter your code here
	}

	// Row Selected event
	function Row_Selected(&$rs) {

		//echo "Row Selected";
	}

	// Row Inserting event
	function Row_Inserting($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Inserted event
	function Row_Inserted($rsold, &$rsnew) {

		//echo "Row Inserted"
	}

	// Row Updating event
	function Row_Updating($rsold, &$rsnew) {

		// Enter your code here
		// To cancel, set return value to FALSE

		return TRUE;
	}

	// Row Updated event
	function Row_Updated($rsold, &$rsnew) {

		//echo "Row Updated";
	}

	// Row Update Conflict event
	function Row_UpdateConflict($rsold, &$rsnew) {

		// Enter your code here
		// To ignore conflict, set return value to FALSE

		return TRUE;
	}

	// Grid Inserting event
	function Grid_Inserting() {

		// Enter your code here
		// To reject grid insert, set return value to FALSE

		return TRUE;
	}

	// Grid Inserted event
	function Grid_Inserted($rsnew) {

		//echo "Grid Inserted";
	}

	// Grid Updating event
	function Grid_Updating($rsold) {

		// Enter your code here
		// To reject grid update, set return value to FALSE

		return TRUE;
	}

	// Grid Updated event
	function Grid_Updated($rsold, $rsnew) {

		//echo "Grid Updated";
	}

	// Row Deleting event
	function Row_Deleting(&$rs) {

		// Enter your code here
		// To cancel, set return value to False

		return TRUE;
	}

	// Row Deleted event
	function Row_Deleted(&$rs) {

		//echo "Row Deleted";
	}

	// Email Sending event
	function Email_Sending($email, &$args) {

		//var_dump($email); var_dump($args); exit();
		return TRUE;
	}

	// Lookup Selecting event
	function Lookup_Selecting($fld, &$filter) {

		//var_dump($fld->Name, $fld->Lookup, $filter); // Uncomment to view the filter
		// Enter your code here

	}

	// Row Rendering event
	function Row_Rendering() {

		// Enter your code here
	}

	// Row Rendered event
	function Row_Rendered() {

		// To view properties of field class, use:
		//var_dump($this-><FieldName>);

	}

	// User ID Filtering event
	function UserID_Filtering(&$filter) {

		// Enter your code here
	}
}
?>
