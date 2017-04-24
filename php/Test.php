<?php

class Test
{

   public $dataConf = array('host'=>'mysql','user'=>'root','pass'=>'1234.com');

   function go() {
       $sql = "select * from mysql.user";
       var_dump($this->DB($sql,'rows','mysql'));
   }

   function DB($sql, $type='row', $db='webmax_db') {

        $return = NULL;
        $data = array();
        $host = $this->dataConf['host'];
        $user = $this->dataConf['user'];
        $pass = $this->dataConf['pass'];

        $conn = new mysqli($host, $user, $pass, $db);
        if(mysqli_connect_errno()) {
            echo mysqli_connect_error();
        }
        $result = $conn->query($sql);

        if($result === false) {
            echo $mysqli->errno,'|';
            echo $mysqli->error,PHP_EOL;
            echo $sql,PHP_EOL;
        }
        //mysql_set_charset('utf8');

        switch ($type) {
            case 'row':
                $return = $result->fetch_row();
                break;
            case 'rows':
                while ($return = $result->fetch_all(MYSQLI_ASSOC)) {
                    $data[] = $return;
                }
                $return = $data;
                break;
            case 'id':
                $return = mysqli_insert_id();
                break;
            default:
                $return = $result;
                break;
        }
        mysqli_close($conn);

        return $return;
    }
}

$test = new Test();
$test->go();
