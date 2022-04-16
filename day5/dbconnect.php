<?php 
class DB{
function connect(){    
$dsn = 'mysql:dbname=iti;host=127.0.0.1;port=3306;'; 
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
function adduser($data)
{
    try{
        $db=$this-> connect();
        if($db){
                $insert_query = 'insert into test2 (fname,lname,username,email,password,phone,gender) 
                            values (?,?,?,?,?,?,?)';
            $insert_stmt = $db->prepare($insert_query);

            $insert_stmt->bindParam(1,$data['fname'] );
            $insert_stmt->bindParam(2,$data['lname'] );
            $insert_stmt->bindParam(3,$data['uname'] );
            $insert_stmt->bindParam(4,$data['email'] );
            $insert_stmt->bindParam(5,$data['pass'] );
            $insert_stmt->bindParam(6,$data['phone'] );
            $insert_stmt->bindParam(7,$data['gender'] );


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
function deleteuser($ID)
{
    try{
        $db=$this->connect();
        if($db){
            $delete_query = 'delete from test2 where `ID` =:ID';
            $del_stmt = $db->prepare($delete_query);
            $del_stmt->bindParam(":ID",$ID );
            $res=$del_stmt->execute();
            if ($res){
                header("Location:showusers.php");
            }
    
        }
    
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}


function update($ID,$data)
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
            $update_query = "update `test2` set `fname`=?, `lname`=?,  `username`=?, `email`=?   ,`password`= ?, `phone`=?, `gender`=?  where `ID`=$ID";
            $update_stmt = $db->prepare($update_query);
            $update_stmt->bindParam(1,$data['fname'] );
            $update_stmt->bindParam(2,$data['lname'] );
            $update_stmt->bindParam(3,$data['uname'] );
            $update_stmt->bindParam(4,$data['email'] );
            $update_stmt->bindParam(5,$data['pass'] );
            $update_stmt->bindParam(6,$data['phone'] );
            $update_stmt->bindParam(7,$data['gender'] );
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

function selectuser($ID)
{
    try{
        $db=$this->connect();
        if($db){
            $select_query = 'select * from test2 where ID=:ID';
            $select_stmt = $db->prepare($select_query);
            $select_stmt->bindParam(":ID",$ID );

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