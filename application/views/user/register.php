<style>
    .get {
      background: #D5D5D5;
      color: #1E5B94;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 100%;
      border: 2px;
      padding: 10px;
      display: inline-block;
    }

    .get-btn {
      background: #1E5B94;
    }
	
	.get-center {
	  text-align: center;
	}
  </style>
  
  <br />
<br />
<div class='get'>

<div class="am-g am-g-fixed" >
    <form name="contactForm" class="am-form am-form-horizontal ace-register" method="post" action="/index.php/Custom/registerresult">

        <div class="fup"><h1>Sign up</h1>
            <p>Fill out the form below to join us. </p>
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-3" class="am-u-sm-3 ">Phone *</label>
            <div class="am-u-sm-9">
                <input name="phone" type="text" id="doc-ipt-3" placeholder="That's important">
            </div>
        </div>
        <div class="am-form-group">
            <label for="doc-ipt-2" class="am-u-sm-3 ">Password *</label>
            <div class="am-u-sm-9">
                <input name="password" type="password" id="doc-ipt-2" placeholder="6 to 16 characters">
            </div>
        </div>

        <div class="am-form-group">
            <label  class="am-u-sm-3 ">Name *</label>
            <div class="am-u-sm-9">
                <input name="name" type="text" placeholder="How to call you" >
            </div>
        </div>

		<div class="am-form-group">
            <label  class="am-u-sm-3 ">Address</label>
            <div class="am-u-sm-9">
                <input name="address" type="text" placeholder="How to call you">
            </div>
        </div>
		
        <div class="am-form-group">
                <button name="submit" type="submit" class="am-btn am-btn-primary">Submit</button>
                <button name="reset" type="reset" class="am-btn am-btn-default">Reset</button>
        </div>
        <p>&nbsp;</p>

    </form>
</div>
</div>