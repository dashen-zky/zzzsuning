<?php

	/**
	*通过id来获取地址的名称
	*/

	function getName($id)
	{
		$res = DB::table('areas')->where('areaid',$id)->first();
		return $res->areaname;
	}


?>