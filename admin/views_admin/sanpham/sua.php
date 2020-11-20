<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      
      <div style="background-color: #e5e5e5; padding: 10px 50px 10px; color:gray;">
        <form action="?action=suasanpham_xl" method="post" enctype="multipart/form-data">  <!-- model_admin/sua_xl.php -->
      	<table border="0" cellpadding="10">
          <tr>
               <td>idSP: </td>
               <td>
                <input disabled type="text" name="idSP" value=<?php echo $data['idSP']; ?>>
                <input type="hidden" name="idSP" value=<?php echo $data['idSP']; ?> >
              </td>
           </tr>
            <tr>
               <td>Tên sản phẩm:</td>
               <td><input type="text" name="tenSP" value=<?php echo $data['tenSP']; ?> ></td>
           </tr>
            <tr>
               <td>Đơn giá:</td>
               <td><input type="text" name="Dongia" value=<?php echo $data['Dongia']; ?>></td>
           </tr>
            <tr>
               <td>ảnh 1:</td>
               <td><input type="file" name="anh1" value=<?php echo $data['anh1']; ?>></td>
           </tr>
           <tr>
               <td>ảnh 2:</td>
               <td><input type="file" name="anh2" value=<?php echo $data['anh2']; ?>></td>
           </tr>
            <tr>
              <td>ảnh 3:</td>
              <td><input type="file" name="anh3" value=<?php echo $data['anh3']; ?>></td>
           </tr>
            <tr>
               <td>Màu:</td>
               <td><input type="text" name="mau" value=<?php echo $data['mau']; ?>></td>
           </tr>
            <tr>
               <td>Size:</td>
               <td><input type="text" name="size" value=<?php echo $data['size']; ?>></td>
           </tr>
           <tr>
               <td>Ngày Nhập:</td>
               <td><input type="date" name="ngaynhap" value=<?php echo $data['ngaynhap']; ?>></td>
           </tr>
           <tr>
               <td>Mô tả:</td>
               <td><input type="text" name="mota" value=<?php echo $data['mota']; ?>></td>
           </tr>
           <tr>
           	<td colspan="2"><button  style="width: 100px; background-color: darkgray;" type="submit">Sửa</button></td>
           </tr>

        </table>
        </form>
      </div>
     

</div>

</div>