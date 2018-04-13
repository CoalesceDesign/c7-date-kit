<?php
class C7DateKit
{

	// =====================================================================================================
	/*
	* @return string
	*/
	function todaysDateTime()
	{
		return date('Y-m-d', mktime(0, 0, 0, date("m") , date("d"), date("Y")));
	}


	// =====================================================================================================
	/*
	* Returns an array of all dates in a range
	* @param string $start_date - Formatted like 2018-11-20
	* @param string $end_date - Formatted like 2018-12-31
	* @return array
	*/

	function dateRange( $start_date, $end_date ) {
	     $all_days = array();
	     $k = 0;
	     while ( $start_date <= $end_date ) {
	          $all_days[$k]['date'] = $start_date->format("Y-m-d");
	          $all_days[$k]['weekday'] = $start_date->format("l");
	          $start_date->modify("+1 day");
	          $k++;
	     }
	     return $all_days;
	}


} # End C7DateKit