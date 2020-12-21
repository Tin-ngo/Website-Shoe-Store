<?php
  public function update_pass($data, $id)
        {
            $password = mysqli_real_escape_string($this->db->link, md5($data['old_password']));
            $new_password = mysqli_real_escape_string($this->db->link, md5($data['new_password']));
            $password_1= mysqli_real_escape_string($this->db->link, md5($data['upda_password']));
            
            if($password==""  || $new_password=="" || $password_1=="" ){
                $alert = "<span class='error'>Fields must be not empty</span>";
                return $alert;
            }else if($new_password !=$password_1){

                $alert = "<span class='error'>Mật khẩu mới không đúng</span>";
                return $alert;
            }
            else{
                $query = "UPDATE customer SET password='$new_password' WHERE id='$id' ";
                $result = $this->db->insert($query);
                if($result){
                        $alert = "<span class='success'>Khách hàng Updated thành công</span>";
                        return $alert;
                }else{
                        $alert = "<span class='error'>Khách hàng Updated Not thành công</span>";
                        return $alert;
                }
                
            }
        }            ?>