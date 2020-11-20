<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database banner</h4>

      <a class="pull-left themmoi" href="?action=thembanner_giaodien"> Thêm mới</a>

      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <input type="text" placeholder="Search"/>&ensp;
          <a href="#"><i class="fa fa-search" id="i1"></i></a>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>idbanner</th>
                  <th class="theadd">Ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
              <?php foreach ($data as $row) { ?>
              <tr>
                  <td scope="row"><?= $row['idbanner'] ?></td>
                  <td><img src="./public_admin/image/banner/<?php echo $row['anh'] ?>" height='50'></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=suabanner&id=<?= $row['idbanner'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoabanner&id=<?= $row['idbanner'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa">
                        <i class="fa fa-times"></i></a>
                  </td> 
              </tr>
              <?php } ?>
          </tbody>
      </table>

      <br>
      <br>
      <br>
     

</div>

</div>