<?php
/**
		 * 
		 */
		class Pagination
		{
			private $db;
			private $limit;
			private $offset;
			private $total;
			private $pageno;
			private $pages;
			private $table;
			function __construct($dbConn, $alimit, $atable)
			{
				$this->db = $dbConn;
				$this->limit = $alimit;
				$this->table = $atable;
				self::config();
				self::Paginate();
				self::addButtons();
			}



public function Paginate() 
		{ 
				try {
						$query = $this->db->query("SELECT * FROM ".$this->table." LIMIT ".$this->limit." OFFSET ".$this->offset." ");
					} catch (Exception $e) {
					echo "Error ". $e->getMessage();
				}

			
				while ($row = $query->fetch(PDO::FETCH_OBJ)) 
				{ 	
						?>	
							
   							
                            <!-- Blog post-->
                            <div class="card mb-4">
                               <!--  <a href="#!"><img class="card-img-top" src="test.png" alt="..." /></a> -->
                                <div class="card-body">
                                    <div class="row">
                                    	<div class="col-md-6">
                                    		<h2 class="card-title h4"><?=$row->title; ?></h2>
                                    	</div>
                                        <div class="col-md-2">
                                     	    <div class="small text-muted"><?=substr($row->create_date, 0, 16); ?></div>
                                        </div>
                                        <div class="col-md-1">
                                     	    <small class="text-muted"><?=$row->category; ?></small>
                                        </div>
                                        <div class="col-md-1">
                                     	    <small class="text-muted"><?=$row->status; ?></small>
                                        </div>
                                        <div class="col-md-1">

<?php if ($row->status == "default" || $row->status != "futured") {
	?>
	 <a href="index.php?current=<?=$row->id ?>&status=futured" title="make futured" class="text-dark">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-fill" viewBox="0 0 16 16">
  <path d="M4.146.146A.5.5 0 0 1 4.5 0h7a.5.5 0 0 1 .5.5c0 .68-.342 1.174-.646 1.479-.126.125-.25.224-.354.298v4.431l.078.048c.203.127.476.314.751.555C12.36 7.775 13 8.527 13 9.5a.5.5 0 0 1-.5.5h-4v4.5c0 .276-.224 1.5-.5 1.5s-.5-1.224-.5-1.5V10h-4a.5.5 0 0 1-.5-.5c0-.973.64-1.725 1.17-2.189A5.921 5.921 0 0 1 5 6.708V2.277a2.77 2.77 0 0 1-.354-.298C4.342 1.674 4 1.179 4 .5a.5.5 0 0 1 .146-.354z"/>
</svg>
 </a>
	<?
} ?>

<?php if ($row->status != "default" || $row->status == "futured") {
	?>
	 <a href="index.php?current=<?=$row->id ?>&status=default" title="make default" class="text-dark">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle" viewBox="0 0 16 16">
  <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z"/>
</svg>
 </a>
	<?
} ?>
 </div>


 				<div class="col-md-1">
                             <a href="index.php?current=<?=$row->id ?>&action=delete" class="text-dark"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
                </div>













                                    </div>
                                   <!--  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p> -->
                                  <!--   <a class="btn btn-success" href="#!">Read more →</a> -->
                                </div>
                            </div>   
                        
						<?


					}
			
		}




//---------------------------------------------------------------------------------------------------------------------------------------------------------------//



			private function addButtons()
			{
			
				?>

		<div class="">
			<nav  aria-label="Пример навигации по страницам">
				  <ul class="pagination justify-content-center ">  

<? if ($this->pageno > 1) { ?> <li class="page-item"><a class="page-link text-dark" href="index.php?pageno=1">First</a></li> <? } ?>  <!-- First page. This page is showing only if pageno is higher than 1 -->

<? while($this->pageno < $this->pages){ ?>
<li class="page-item"><a class="page-link text-dark" href="index.php?pageno=<?=$this->pageno;?>"><?=$this->pageno; if($this->pageno < $this->pages)$this->pageno++; ?></a></li> <? } ?>   <!-- Other pages by nubmers. In while cicle show pagination pages, if pageno is lower than pages(for values look config() function). After showing current page number between a tag, pageno variable increments, and the href attribute goes to incremented pageno --> 
					   
<? if($this->limit < $this->total){?> <li class="page-item"><a class="page-link text-dark" href="index.php?pageno=<?=ceil($this->total / $this->limit);?>">Last</a></li> <?}?> <!-- Last page. this item is showing only if the limit of items per page is lower than total number of items, cs there is no need to show last page, if you are already in the last page. -->

				  </ul>
			</nav>
		</div>
				<? 
			}


//---------------------------------------------------------------------------------------------------------------------------------------------------------------//		


		private function config()
		{
			if (isset($_GET['status'])) 
			{
				try {
					$status_update = $this->db->prepare("UPDATE posts SET status = ? WHERE id = ?  ");
					$status_update->execute([$_GET['status'], $_GET['current']]);
				} catch (Exception $e) {
					echo "Error ". $e->getMessage();
				}
			}	
						if (isset($_GET['action']) && $_GET['action'] == "delete") 
						{
							try {
								$delete_post = $this->db->prepare("DELETE FROM posts  WHERE id = ? ");
								$delete_post->execute([$_GET['current']]);
							} catch (Exception $e) {
								echo "Error ". $e->getMessage();
							}
						}


					try {
				$total_query = $this->db->query("SELECT COUNT(*) FROM ".$this->table."");
				$total_query = $total_query->fetch(PDO::FETCH_ASSOC);
			} catch (Exception $e) {
				echo "Error ". $e->getMessage();
			}	
				if (!isset($_GET['pageno']) || $_GET['pageno'] == 0) {$_GET['pageno'] = 1;}
				$this->total  = $total_query['COUNT(*)'];
				$this->pageno = $_GET['pageno'];
				$this->offset = ($this->pageno -1) * $this->limit;
				$this->pages  = ceil($this->total / $this->limit);
		}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------//		

	}
 ?>