<?php 
class DB{
function connect(){    
$dsn = 'mysql:dbname=iti;host=127.0.0.1;port=3307;'; 
$user = 'root';
$password = '1234';
try{
    return new PDO($dsn, $user, $password);
    // echo "connected successfully";
}
catch(Exception $e){
    var_dump($e);
    exit();
}
}
function adduser($data, $image = "")
{
    try{
        $db=$this-> connect();
        if($db){
            if(isset($image)){
                $insert_query = 'insert into testt2 (`fname`,`lname`,`gender`,`email`,`username`,`password`,`phone`) values (?,?,?,?,?,?,?)';
            } else {
                $insert_query = 'insert into test2 (fname,lname,gender,email,username,password,phone) 
                            values (?,?,?,?,?,?,?)';
            }
            $insert_stmt = $db->prepare($insert_query);

            $insert_stmt->bindParam(1,$data['fname'] );
            $insert_stmt->bindParam(2,$data['lname'] );
            $insert_stmt->bindParam(3,$data['gender'] );
            $insert_stmt->bindParam(4,$data['email'] );
            $insert_stmt->bindParam(5,$data['uname'] );
            $insert_stmt->bindParam(6,$data['pass'] );
            $insert_stmt->bindParam(7,$data['phone'] );



            $res=$insert_stmt->execute();

            if ($res){
                return true;
            }

        }
    return false;
    }catch (PDOException $e){
        echo $e->getMessage();

    }
}
function deleteuser($id)
{
    try{
        $db=$this->connect();
        if($db){
            $delete_query = 'delete from user where `id` =:id';
            $del_stmt = $db->prepare($delete_query);
            $del_stmt->bindParam(":id",$id );
            $res=$del_stmt->execute();
            if ($res){
                header("Location:allusers.php");
            }
    
        }
    
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}


function update($id,$data)
{
    try{
        $db=$this->connect();
        if($db){
            $lname = $data['lname'];
            $fname = $data['fname'];
            $gender = $data['gender'];
            $email = $data['email'];
            $username = $data['uname'];
            $password = $data['pass'];
            $phone = $data['phone'];
            $update_query = "update `test2` set `fname`=?, `lname`=?, `gender`=? , `email`=?,  `username`=? ,`password`= ?, `phone`=? where `id`=$id";
            $update_stmt = $db->prepare($update_query);
            $update_stmt->bindParam(1,$data['fname'] );
            $update_stmt->bindParam(2,$data['lname'] );
            $update_stmt->bindParam(3,$data['gender'] );
            $update_stmt->bindParam(4,$data['email'] );
            $update_stmt->bindParam(5,$data['uname'] );
            $update_stmt->bindParam(6,$data['pass'] );
            $update_stmt->bindParam(7,$data['phone'] );
            $res = $update_stmt->execute();
            if($res){
                return true;
            }
        }
    return false;
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

function selectall()
{
    try{
        $db=$this->connect();
        if($db){
            $select_query = 'select * from test2';
            $select_stmt = $db->prepare($select_query);
            $res=$select_stmt->execute();
            if ($res){
                $users = $select_stmt->fetchAll(PDO::FETCH_OBJ);
                return $users;
            }
        }
    return null;
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

function selectuser($id)
{
    try{
        $db=$this->connect();
        if($db){
            $select_query = 'select * from test2 where id=:id';
            $select_stmt = $db->prepare($select_query);
            $select_stmt->bindParam(":id",$id );

            $res=$select_stmt->execute();
            if ($res){
                $users = $select_stmt->fetchAll(PDO::FETCH_OBJ);
                return $users;
            }
        }
    return null;
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

}
$object =new DB();


?>