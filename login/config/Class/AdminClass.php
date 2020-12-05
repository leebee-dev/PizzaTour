<?php
class AdminClass extends DBConClass {
    //관리자 정보 신규 입력
    public function storeAdmin($userID, $userNM, $email, $password) {
        $hash = $this->hashSSHA($password);
        $encrypted_password = $hash['encrypted']; // encrypted password
        $salt = $hash['salt']; // salt

		try{
			$this->db->beginTransaction();
			$sql = "INSERT INTO Admin(adminID, adminName, email, password, salt, created_at) VALUES(:userID,:userNM,:email,:passwd,:salt,:created_at)";
			$stmt = $this->db->prepare($sql);
			$stmt->bindValue(':userID',$userID,PDO::PARAM_STR);
			$stmt->bindValue(':userNM',$userNM,PDO::PARAM_STR);
			$stmt->bindValue(':email',$email,PDO::PARAM_STR);
			$stmt->bindValue(':passwd',$encrypted_password,PDO::PARAM_STR);
			$stmt->bindValue(':salt',$salt,PDO::PARAM_STR);
			$stmt->bindValue(':created_at',date("YmdHis"));
			$result = $stmt->execute();
			$this->db->commit();
		} catch (PDOException $pex) {
			$this->db->rollBack();
			echo "에러 : ".$pex->getMessage();
		}
        // check for successful store
        if ($result) {
            $stmt = $this->db->prepare("SELECT * FROM Admin WHERE adminID = :userID");
            $stmt->bindValue(':userID', $userID, PDO::PARAM_STR);
            $stmt->execute();
			$user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user;
        } else {
            return false;
        }
    }

    // 로그인 체크
    public function getAdmin($userID, $password) {
		$sql = "SELECT * FROM Admin WHERE adminID=:userID";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':userID', $userID);
		$stmt->execute();

        if ($user=$stmt->fetch()) {
            // verifying user password
            $salt = $user['salt'];
            $encrypted_password = $user['password'];
            $hash = $this->checkhashSSHA($salt, $password);
            if ($encrypted_password == $hash) {
                // user authentication details are correct
                return $user;
            }
        } else {
            return NULL;
        }
    }
    //관리자 등록 여부 체크
    public function isAdminExisted($userID) {
        $stmt = $this->db->prepare("SELECT adminID from Admin WHERE adminID=:userID");
		$stmt->bindValue(':userID',$userID,PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

	//관리자 정보 삭제
	public function deleteAdmin($userID){
		try{
			$this->db->beginTransaction();
			$stmt = $this->db->prepare("delete FROM Admin WHERE adminID=:userID");
			$stmt->bindValue(':userID',$userID,PDO::PARAM_STR);
			$stmt->execute();
			$this->db->commit();
		}catch (PDOException $pex) {
			$this->db->rollBack();
			echo "에러 : ".$pex->getMessage();
		}
	}

    public function hashSSHA($password) {
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    public function checkhashSSHA($salt, $password) {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);
        return $hash;
    }
}
?>
