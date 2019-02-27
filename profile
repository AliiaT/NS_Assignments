<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso18.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: #2c85bf}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: #ffffff !important;} .asteriskField{color: red;}.bootstrap-iso form .input-group-addon {color:#555555; background-color: #f2eeee; border-radius: 4px; padding-left:12px}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label " for="name">
       Name
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input class="form-control" id="name" name="name" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="name1">
       Username:
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input class="form-control" id="name1" name="name1" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label requiredField" for="email">
       Email:
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope-o">
        </i>
       </div>
       <input class="form-control" id="email" name="email" type="text"/>
      </div>
     </div>
     <div class="form-group ">
      <label class="control-label " for="tel">
       Phone #
      </label>
      <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-phone">
        </i>
       </div>
       <input class="form-control" id="tel" name="tel" type="text"/>
      </div>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-success " name="submit" type="submit">
        OK
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
