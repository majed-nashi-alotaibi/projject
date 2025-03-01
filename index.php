<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?>

    <div class="position-relative overflow-hidden  text-center bg-light">
    <div class="col-md-5  mx-auto ">
      <br><br>
      <img src="images/hxh.png" alt="">
    <h1 class="display-4 fw-normal">اربح مع ماجد</h1>
    <p class="lead fw-normal">باقي على السحب </p>
    <h3 id="countdown"></h3>
    <h5>
    <p class="lead fw-normal"> للسحب على جهاز pc مع كافة ملحقاته   </p>
    <p class="lead fw-normal"> السحب بالسناب  </p></h5>
    <a class="btn btn-outline-secondary" id="sn" href="https://t.snapchat.com/00MjwINH"> snap </a>
    </div>
    <br>
    <div class="container">
    <ul class="list-group list-group-flush">
      <h6>
        <li class="list-group-item">مواصفات الـ pc</li>
        <li class="list-group-item">i9-14900K | RTX 4060 | RAM 32 GB | 2 TB </li>
        <li class="list-group-item">الشاشة - لوحة مفاتيح - ماوس - سماعات - كرسي </li><br><br>
        </ul></h6>
    </div>
        </div>

    <div class="containerr">
    <div class="position-relative text-center">
    <div class="col-md-5  mx-auto my-5">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>  الرجاء تعبئة المعلومات التالية لدخول السحب </h3>
        <br><h6>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" placeholder=" اسمك الاول " value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors ['firstNameError'] ?></div>
    
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" placeholder=" اسم العائلة " value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors ['lastNameError'] ?></div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="بريدك الالكتروني" value="<?php echo $email ?>">
    <div name="submit" class="form-text error"><?php echo $errors ['emailError'] ?></div>
</h6>
<br> 
  <button type="submit" name="submit" id="su"  class="btn btn-primary">ارسل معلوماتك</button> 
</form>
    </div>
    </div>
    <div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-3"> 
      <button type="button" id="winner" class="btn btn-primary">
       اختيار الرابح
      </button>
    </div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
       <h5 class="modal-title" id="modalLabel"> الرابح</h5>   
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
           <div class="modal-body">
              <?php foreach($users as $user): ?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"> <?php echo htmlspecialchars($user['firstName']) . '  ' .  htmlspecialchars($user['lastName'])?></h1>
         <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<?php include_once './parts/footer.php';
