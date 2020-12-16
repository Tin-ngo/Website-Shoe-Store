<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=suasanpham_xl" method="post" enctype="multipart/form-data" >  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td style="width: 150px;">idSP: </td>
               <td>
                <input disabled type="text" name="idSP" value=<?php echo $data['idSP']; ?>>
                <input type="hidden" name="idSP" value=<?php echo $data['idSP']; ?> >
              </td>
           </tr>

             <tr>
               <td>id Khuyến mãi:</td>
               <td><input type="text" value="<?php echo $data['idKM'];?>" name="idKM" required></td>
           </tr>


           <tr>
               <td>idLoaiSP:</td>
               <td>
                <input type="radio" value="1" name="idLoaiSP" checked>Giày công sở<br>
                <input type="radio" value="2" name="idLoaiSP">Giày học sinh<br>
                <input type="radio" value="3" name="idLoaiSP">Giày da bò<br>
                <input type="radio" value="4" name="idLoaiSP">Giày thời trang<br>
               </td>
           </tr>
            
            <tr>
               <td>id màu:;</td>
               <td><input type="text" value="<?php echo $data['idcolor'];?>" name="idmau" required></td>
           </tr>
            <tr>
               <td>id size:</td>
               <td><input type="text" name="idsize" value="<?php echo $data['idsize'];?>" required></td>
           </tr>
            <tr>
               <td>Tên Sản Phẩm:</td>
               <td><input type="text" name="tenSP" value="<?php echo $data['tenSP'];?>"  required></td>
           </tr>
            <tr>
               <td>Đơn giá:</td>
               <td><input type="text" value="<?php echo $data['Dongia'];?>" name="Dongia" required></td>
           </tr>
            <tr>
               <td>ảnh 1:</td>
               <td><input type="file" value="<?php echo $data['anh1'];?>"  name="anh1"></td>
           </tr>
           <tr>
               <td>ảnh 2:</td>
               <td><input type="file"  name="anh2"></td>
           </tr>
            <tr>
               <td>ảnh 3:</td>
               <td><input type="file" name="anh3"></td></td>
           </tr>
            <tr>
               <td>Ngày nhập:</td>
               <td><input type="date" value="<?php echo $data['ngaynhap'];?>" name="ngaynhap" required></td>
           </tr>
           <tr>
               <td>Số lượng:</td>
               <td><input type="text" value="<?php echo $data['soluong'];?>" name="soluong" required></td>
           </tr>
           <tr>
               <td>mô tả:</td>
               <td style="width: 150%;">
                 <form action="_posteddata.php" method="post">
                      <textarea  name="mota"  value="<?php echo $data['mota'];?>" cols="" rows="" required></textarea>
                     
           <!--          <input name="ok" type="submit" value="Ok" /> -->
                </form>
              </td>
           </tr>
           



           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>


        </table>
        </form>

        <br>
           <br>
           <br>


      </div>
     

</div>

</div>


                      <script type="text/javascript" >
    
                           CKEDITOR.replace( 'mota' );
        
                       </script>