<?php
	function getSeries($con)
	{
		$sql = "SELECT * FROM series ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getSeriesK($con)
	{
		$sql = "SELECT * FROM series WHERE SCountry='Korea' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getSeriesE($con)
	{
		$sql = "SELECT * FROM series WHERE SCountry='England' OR SCountry='United States' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function subString($str)
	{
		if (strlen($str)>350) {
			for ($i=350; $i>=0 ; $i--) { 
				if ($str[$i]==' ') {
					return substr_replace($str, '...', $i);
				}
			}
			return substr_replace($str, '...', 350);
		}
		else {
			return $str;
		}
	}

	function insertComment($con,$acc_name,$series_id,$str)
	{
		$sql = "INSERT INTO comment (userName, SID, comment, comment_date) VALUES (:acc_name, :series_id, :str, CURRENT_TIMESTAMP)";
		$statement = $con->prepare($sql);
		$statement->bindParam(':acc_name', $acc_name);
		$statement->bindParam(':series_id', $series_id);
		$statement->bindParam(':str', $str);
		$statement->execute();
	}

	function getComment($con,$series_id)
	{
		$sql = "SELECT * FROM comment WHERE SID = :series_id ORDER BY comment.comment_date DESC ";
		$statement = $con->prepare($sql);
		$statement->bindParam(':series_id', $series_id);
		$statement->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function infoRating($con,$acc_name,$series_id)
	{
		$sql = "SELECT * FROM rating WHERE userName = :acc_name AND SID = :series_id ";
		$statement = $con->prepare($sql);
		$statement->bindParam(':acc_name', $acc_name);
		$statement->bindParam(':series_id', $series_id);
		$statement->execute();
		$result = $statement->fetchAll();

		if (count($result)==0) {
			return 1;
		}

		return 0;
	}

	function insertRating($con,$acc_name,$series_id,$vote)
	{
		$sql = "INSERT INTO rating (userName, SID, rate) VALUES (:acc_name, :series_id, :vote)";
		$statement = $con->prepare($sql);
		$statement->bindParam(':acc_name', $acc_name);
		$statement->bindParam(':series_id', $series_id);
		$statement->bindParam(':vote', $vote);
		$statement->execute();
	}

	function getRating($con,$series_id)
	{
		$sql = "SELECT * FROM rating WHERE SID = :series_id ";
		$statement = $con->prepare($sql);
		$statement->bindParam(':series_id', $series_id);
		$statement->execute();
		$result = $statement->fetchAll();
		/*
		$rate = 0;
		for ($i=0; $i<count($result) ; $i++) { 
			//echo $result[$i]['rate']."<br>";
			$rate = $rate+$result[$i]['rate'];
		}

		if ($rate != 0) {
			$rate = $rate/count($result);
			$rate = number_format($rate, 1, '.', '');
		}
		*/
		return $result;
	}
?>
