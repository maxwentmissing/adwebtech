<?php
	class Medium {
		function Medium($info) {
			$this->books = $info;
		}
	}
	class Book {
		function Book($id, $language, $edition, $author) {
			$this->id = $id;
			$this->language = $language;
			$this->edition = $edition;
			$this->author = $author;
		}
	}
	$book1 = new Book("01","Java","third","Herbert Schildt");
	$book2 = new Book("07","C++","second","E.Balagurusamy");
	$arr = array($book1,$book2);
	$obj = new Medium($arr);
	echo json_encode($obj);
?>
