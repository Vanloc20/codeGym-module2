<?php
class KetnoiCSDL {
	public $host;
	public $usename;
	public $password;
	public $dbname;

	public function __construct($host = '127.0.0.1', $usename = 'root', $password = '', $dbname = 'quanlysanpham') {
		$this->host = $host;
		$this->usename = $usename;
		$this->password = $password;
		$this->dbname = $dbname;
	}

	public function ketNoi() {
		return mysqli_connect($this->host, $this->usename, $this->password, $this->dbname);
	}

}
