
<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
$member_id = $_REQUEST["ID"];
//2. query ข้อมูลจากตาราง:
$sql = "SELECT * FROM tbl_member WHERE member_id='$member_id' ";
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
?>

<?php include('h.php');?>
<form  name="register" action="member_form_edit_db.php" method="POST" class="form-horizontal">
      <input  name="member_id" type='hidden' value="<?=$member_id;?>" />
       <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_user" type="text" required class="form-control" id="mem_username" placeholder="Username" value="<?=$m_user;?>" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
          </div>
      </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_pass" type="password" required class="form-control" id="mem_password" placeholder="Password" value="<?=$m_pass;?>" pattern="^[a-zA-Z0-9]+$" minlength="2" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_name" type="text" required class="form-control" id="mem_name" placeholder="ชื่อ-สกุล " value="<?=$m_name;?>"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_email" type="email" class="form-control" id="mem_email"   placeholder=" อีเมล์ name@hotmail.com" value="<?=$m_email;?>"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <input  name="m_tel" type="text" class="form-control" id="mem_tel"  placeholder="เบอร์โทร ตัวเลขเท่านั้น" value="<?=$m_tel;?>"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-5" align="left">
            <textarea name="m_address" class="form-control" id="mem_address" required > <?=$m_address;?> </textarea>
          </div>
        </div>
      <div class="form-group">
          <div class="col-sm-5" align="right">
          <button type="submit" class="btn btn-success" id="btn"><span class="glyphicon glyphicon-ok"></span> สมัครสมาชิก  </button>
          </div>
      </div>
      </form>
