<?php 
/**
 * 
 */
class Post
{
	private $data;
	function __construct(array $data)
	{
		$this->data = $data;
	}

	public function create()
	{
		require('dbConn.php');
		try {
			$query = $db->prepare('INSERT INTO posts(`title`, `text`, `description`, `category`, `tumbnail`) VALUES (:title, :ttext, :description, :category, :tumbnail)');
			$query->execute(array(':title'=> $this->data['title'], ':ttext' => $this->data['text'], ':description' => $this->data['description'], ':category' => $this->data['category'], ':tumbnail' => $this->data['tumbnail']));
		} catch (PDOException $e) {
			echo "Error" . $e->getMessage();
		}
		header("Location: " . $_SERVER['PHP_SELF']);
	}

	public function test(){
		var_dump($this->data);
	}
}
?>