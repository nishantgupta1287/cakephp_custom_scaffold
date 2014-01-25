<?php 
class PostsController extends AppController{
	var $name = "Posts";
	var $uses = array("Posts");
	var $scaffold;
 	var $displayFieldsList = array("id","title","modified");/// will hide all other fields in table 
}
?>
