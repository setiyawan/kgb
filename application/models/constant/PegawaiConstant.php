<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class PegawaiConstant extends CI_Model {
	function verifikasi_data() {
		return array(
			'0' => 'Belum Terverifikasi', 
			'1' => 'Terverifikasi'
		);
	}

	function golongan()	{
		return array(
			'IA' => 'IA',
			'IB' => 'IB',
			'IC' => 'IC',
			'ID' => 'ID',

			'IIA' => 'IIA',
			'IIB' => 'IIB',
			'IIC' => 'IIC',
			'IID' => 'IID',

			'IIIA' => 'IIIA',
			'IIIB' => 'IIIB',
			'IIIC' => 'IIIC',
			'IIID' => 'IIID',

			'IVA' => 'IVA',
			'IVB' => 'IVB',
			'IVC' => 'IVC',
			'IVD' => 'IVD',
		);
	}

}

?>