<?php
	function getApp($con)
	{
		$sql = "SELECT * FROM Application , Developer  WHERE  Application.DevID = Developer.DevID";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function infoRating($con,$UserID,$AppID)
	{
		$sql = "SELECT * FROM RateBy WHERE UserID = :UserID AND AppID = :AppID ";
		$statement = $con->prepare($sql);
		$statement->bindParam(':UserID', $UserID);
		$statement->bindParam(':AppID', $AppID);
		$statement->execute();
		$result = $statement->fetchAll();

		if (count($result)==0) {
			return 1;
		}

		return 0;
	}

	function insertRating($con,$UserID,$AppID,$Rate)
	{
		$sql = "INSERT INTO RateBy (UserID, AppID, Rate) VALUES (:UserID, :AppID, :Rate)";
		$statement = $con->prepare($sql);
		$statement->bindParam(':UserID', $UserID);
		$statement->bindParam(':AppID', $AppID);
		$statement->bindParam(':Rate', $Rate);
		$statement->execute();
	}
	function AddAppComment($con,$UserID,$AppID,$Comment)
	{
		$sql = "INSERT INTO CommentBy (UserID,AppID,Comment) VALUES (:UserID, :AppID, :Comment)";
		$statement = $con->prepare($sql);
		$statement->bindParam(':UserID', $UserID);
		$statement->bindParam(':AppID', $AppID);
		$statement->bindParam(':Comment', $Comment);
		$statement->execute();
	}

	function getAppByCatagory($con,$CID)
	{
		$sql = "SELECT * FROM Application WHERE CID='".$CID."' AND Appname LIKE '%".$AppName."%'";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getCatagoryname($con,$CID)
	{
		$sql = "SELECT * FROM Catagory WHERE CID='".$CID."' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getDevName($con,$DevID)
	{
		$sql = "SELECT * FROM Developer WHERE DevID='".$DevID."' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getDevApp($con,$DevID)
	{
		$sql = "SELECT * FROM Application WHERE DevID='".$DevID."' ";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function partialString($str)
	{
		if (strlen($str)>17) {
			for ($i=17; $i>=0 ; $i--) { 
				if ($str[$i]==' ') {
					return substr_replace($str, '...', $i);
				}
			}
			return substr_replace($str, '...', 17);
		}
		else {
			return $str;
		}
	}
	
	function getAppComment($con,$Appid)
    {
        $sql = "SELECT * FROM CommentBy  WHERE AppID = :Appid ORDER BY CommentDate DESC "; 
        $statement = $con->prepare($sql);
        $statement->bindParam(':Appid', $Appid);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }

	function getUser($con)
	{
		$sql = "SELECT * FROM User";
		$statement = $con->prepare($sql);
		$statement ->execute();
		$result = $statement->fetchAll();
		return $result;
	}

	function getRating($con,$AppID)
    {
        $sql = "SELECT * FROM RateBy WHERE AppID = :AppID ";
        $statement = $con->prepare($sql);
        $statement->bindParam(':AppID', $AppID);
        $statement->execute();
        $result = $statement->fetchAll();
        return $result;
    }
    
	function insertUser($con,$ID,$Pass,$email)
	{
		
		mysql_query("INSERT INTO User (ID, Pass, email) VALUES ('$ID','$Pass','$email')",$con) or die ("<script> alert('E-mail has already used.'); window.location='../register.php'; <script>");
		header(index.php);

	}

?>