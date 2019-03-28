<?php
class Admin {
	public static function delReviewsById($idReviews) {
		$idReviews = intval($idReviews);
		if($idReviews) {
			$conn = Db::getConnection();
			$sql = "DELETE FROM reviews where id=$idReviews";
			return $conn->query($sql);
		}
	}
	public static function confirm($idRev) {
		$idRev = intval($idRev);
		$conn = Db::getConnection();
		$sql = "UPDATE reviews SET approval = 1 WHERE id=$idRev";
		return $conn->query($sql);
	}
	public static function getLimitedEdition() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM limitedEdition
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $limited[] = $row;
   }
   return $limited;
	}
	} 
	public static function getPresent() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM Present
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $present[] = $row;
   }
   return $present;
	}
	} 
	public static function getSweet() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM Sweet
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $sweet[] = $row;
   }
   return $sweet;
	}
	}
    public static function getMix() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM Mix
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $mix[] = $row;
   }
   return $mix;
	}
	}
    public static function getIntim() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM Intim
		ORDER BY id";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $intim[] = $row;
   }
   return $intim;
	}
	}	
	public static function getReviews() {
		$conn = Db::getConnection();
		$sql = "SELECT *
		FROM reviews WHERE approval IS NULL
		ORDER BY id DESC";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) { 
   $data[] = $row;
   }
   return $data;
	}
	}
	public static function СhangeProduct($nameProduct1, $priceProduct1, $nameProduct2, $priceProduct2, $nameProduct3, $priceProduct3, $nameProduct4, $priceProduct4 ) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO limitedEdition (id, name, price, text)
VALUES
(1, '$nameProduct1', '$priceProduct1', 'fffff'),
(2, '$nameProduct2', '$priceProduct2','fffff'),
(3, '$nameProduct3', '$priceProduct3', 'fffff'),
(4, '$nameProduct4', '$priceProduct4', 'ffff')
ON DUPLICATE KEY UPDATE
 id=VALUES(id), price=VALUES(price), name=VALUES(name)";
		return $conn->query($sql);
	}
	public static function СhangePresent($namePresent1, $pricePresent1, $namePresent2, $pricePresent2, $namePresent3, $pricePresent3, $namePresent4, $pricePresent4 ) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO Present (id, name, price, text)
VALUES
(1, '$namePresent1', '$pricePresent1', 'fffff'),
(2, '$namePresent2', '$pricePresent2','fffff'),
(3, '$namePresent3', '$pricePresent3', 'fffff'),
(4, '$namePresent4', '$pricePresent4', 'ffff')
ON DUPLICATE KEY UPDATE
 id=VALUES(id), price=VALUES(price), name=VALUES(name)";
		return $conn->query($sql);
	}
	public static function СhangeSweet($nameSweet1, $priceSweet1, $nameSweet2, $priceSweet2, $nameSweet3, $priceSweet3, $nameSweet4, $priceSweet4 ) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO Sweet (id, name, price, text)
VALUES
(1, '$nameSweet1', '$priceSweet1', 'fffff'),
(2, '$nameSweet2', '$priceSweet2','fffff'),
(3, '$nameSweet3', '$priceSweet3', 'fffff'),
(4, '$nameSweet4', '$priceSweet4', 'ffff')
ON DUPLICATE KEY UPDATE
 id=VALUES(id), price=VALUES(price), name=VALUES(name)";
		return $conn->query($sql);
	}
	public static function СhangeMix($nameMix1, $priceMix1, $nameMix2, $priceMix2, $nameMix3, $priceMix3, $nameMix4, $priceMix4 ) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO Mix (id, name, price, text)
VALUES
(1, '$nameMix1', '$priceMix1', 'fffff'),
(2, '$nameMix2', '$priceMix2','fffff'),
(3, '$nameMix3', '$priceMix3', 'fffff'),
(4, '$nameMix4', '$priceMix4', 'ffff')
ON DUPLICATE KEY UPDATE
 id=VALUES(id), price=VALUES(price), name=VALUES(name)";
		return $conn->query($sql);
	}
	public static function СhangeIntim($nameIntim1, $priceIntim1, $nameIntim2, $priceIntim2, $nameIntim3, $priceIntim3, $nameIntim4, $priceIntim4 ) {
		$conn = Db::getConnection();
		$sql = "INSERT INTO Intim (id, name, price, text)
VALUES
(1, '$nameIntim1', '$priceIntim1', 'fffff'),
(2, '$nameIntim2', '$priceIntim2','fffff'),
(3, '$nameIntim3', '$priceIntim3', 'fffff'),
(4, '$nameIntim4', '$priceIntim4', 'ffff')
ON DUPLICATE KEY UPDATE
 id=VALUES(id), price=VALUES(price), name=VALUES(name)";
		return $conn->query($sql);
	}
		
}