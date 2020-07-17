<?php
function contactus($post){
  include_once("connection.php");
  if(empty(trim($post['name'])) || empty(trim($post['email'])) || empty(trim($post['message'])))
  {
      return "missing_filds";
    }
    else{
       $name= $post['name'];
       $email = $post['email'];
       $message = $post['message'];
        $query = "INSERT INTO `contactform`(`name`, `email`, `message`) VALUES (?,?,?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param('sss',$name,$email,$message);
        $stmt->execute();
        return "success";

  }

}

