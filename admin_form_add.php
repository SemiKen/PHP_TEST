<?php include('h.php'); ?>
<form  name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-5" align="left">
              <input  name="a_user" type="text" required class="form-control" id="admin_user" placeholder="username" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-5" align="left">
              <input  name="a_pass" type="password" required class="form-control" id="admin_pass" placeholder="password" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-5" align="left">
              <input  name="a_name" type="text" required class="form-control" id="admin_name" placeholder="ชื่อ-สกุล" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3"> </div>
            <div class="col-sm-5" align="right">
              <button type="submit" class="btn btn-success" id="btn-sm"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>
            </div>
          </div>
        </form>
