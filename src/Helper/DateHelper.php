<?php
namespace App\Helper;

use DateTimeInterface;

class DateHelper
{
	public static function getDuration(DateTimeInterface $start, DateTimeInterface $end = null)
	{
		if (is_null($end) || $start->format('Y') === $end->format('Y')) {
			return $start->format('Y');
		}

		return $start->format('Y').' - '.$end->format('Y');
	}
}
