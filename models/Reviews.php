<?php
class Reviews {
	public static function getReviews() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM reviews WHERE approval=1
		ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $data[] = $row;
   }
   return $data;
	}
	}
	public static function addReviews($reviewsName, $reviewsCity, $reviewsText) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO reviews (id, name, city, text, approval)
		VALUES (NULL, '$reviewsName', '$reviewsCity', '$reviewsText', NULL)";
		return $conn->query($sql);
	}
}