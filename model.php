<?php
    include 'connection.php';
    class Model extends Connection
        {
            public function __construct(){
                $this->conn = $this->get_connection();
            }

            //********** Memeber **********
            public function tampil_member(){
            $sql = "SELECT * FROM member";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) { 
                $baris[] = $obj;
            }
            if(!empty($baris)){
                return $baris;
            }
            }
            
            public function insert_member($member_id, $nama, $alamat, $tlp){
                
                $sql = "INSERT INTO `member`(`member_id`, `nama`, `alamat`, `tlp`)
                VALUES ('$member_id', '$nama', '$alamat', '$tlp')";
                $this->conn->query($sql);
            }

            public function delete_member($member_id){ 
                $sql = "DELETE FROM member WHERE member_id='$member_id'";
                $this->conn->query($sql);
            }

            public function edit_member($member_id){
                $sql = "SELECT * FROM member WHERE member_id='$member_id'";
                $bind = $this->conn->query($sql);
                while ($obj = $bind->fetch_object()) {
                    $baris = $obj;
                }
                return $baris;
            }

        public function update_member($member_id, $nama, $alamat, $tlp){
            $sql = "UPDATE `member` SET `nama` ='$nama' , 'alamat'='$alamat', 'tlp'='$tlp'
            WHERE 'member_id'='$member_id'";
            $this->conn->query($sql);
        }

        //********** RENTALLLL **********
        public function tampil_rental(){
            $sql = "SELECT * FROM rental";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) { 
                $baris[] = $obj;
            }
            if(!empty($baris)){
                return $baris;
            }
            }

        public function insert_rental($rental_id,$mobil_id,$member_id, $lama_rental){
            
            $sql = "INSERT INTO rental (rental_id,mobil_id,member_id,lama_rental) 
            VALUES ('$rental_id','$mobil_id','$member_id', '$lama_rental')";
            $this->conn->query($sql);
        }

        public function edit_rental($rental_id){
            $sql = "SELECT * FROM rental WHERE rental_id='$rental_id'";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) {
                $baris = $obj;
            }
            return $baris;
        }

        public function delete_rental($rental_id){ 
            $sql = "DELETE FROM rental WHERE rental_id='$rental_id'";
            $this->conn->query($sql);
        }

        public function update_rental($rental_id,$mobil_id,$member_id, $lama_rental){
            $sql = "UPDATE rental SET mobil_id='$mobil_id', member_id='$member_id', lama_rental='$lama_rental'
                    WHERE rental_id ='$rental_id'";
            $this->conn->query($sql);
        }


          //********** MOBILLLLL **********

          public function tampil_mobil(){
            $sql = "SELECT * FROM mobil";
            $bind = $this->conn->query($sql);
            while ($obj = $bind->fetch_object()) { 
                $baris[] = $obj;
            }
            if(!empty($baris)){
                return $baris;
            }
            }

            public function insert_mobil($mobil_id,$merk,$thn_keluaran, $tarif){
            
                $sql = "INSERT INTO `mobil`(`mobil_id`, `merk`, `thn_keluaran`, `tarif`) VALUES 
                 ('$mobil_id','$merk','$thn_keluaran', '$tarif')";
                $this->conn->query($sql);
            }

            public function edit_mobil($mobil_id){
                $sql = "SELECT * FROM mobil WHERE mobil_id='$mobil_id'";
                $bind = $this->conn->query($sql);
                while ($obj = $bind->fetch_object()) {
                    $baris = $obj;
                }
                return $baris;
            }

            public function update_mobil($mobil_id,$merk,$thn_keluaran, $tarif){
                $sql = "UPDATE mobil SET merk='$merk', thn_keluaran='$thn_keluaran',tarif='$tarif'
                        WHERE mobil_id='$mobil_id'";
                $this->conn->query($sql);
            }

            public function delete_mobil($mobil_id){ 
                $sql = "DELETE FROM mobil WHERE mobil_id='$mobil_id'";
                $this->conn->query($sql);
            }
    }


